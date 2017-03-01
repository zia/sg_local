<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('admin_model');
        date_default_timezone_set('Asia/Dhaka');
	}

	#homepage
	public function index()
	{	
		if($this->session->userdata('logged_in')){
			
			$data['calendar'] = $this->admin_model->generate($this->uri->segment(3), $this->uri->segment(4));

			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/admin_view',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	#login
	public function login(){
		if(!$this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/admin_login');
		}
		else{
			$this->session->set_flashdata('error', 'Already Logged In !');
            redirect('admin/NowAy');
		}
	}
	public function login_check()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[50]|xss_clean|htmlspecialchars');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|xss_clean|htmlspecialchars');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/xQzMe');
        }

        else{

			$result = $this->admin_model->login_check();
			if($result){
				$query = $this->db->get_where('admin',array('username' => md5($this->input->post('username'))))->row();
				$newdata = array(
					'username' 	=> md5($this->input->post('username')),
					'role' 		=> $query->role,
					'id'		=> $query->id,
	        		'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
				$this->session->set_flashdata('success', 'Welcome To Admin Panel !');
            	redirect('admin/NowAy');
			}
			else{
				$this->session->set_flashdata('error', 'Invalid Username Or password !');
            	redirect('admin/xQzMe');
			}
		}
	}

	#LogOut
	public function logout()
	{
		#Remove the session id before logging out
		$data = array(
				'session_id' => '',
				'last_login' => date('Y-m-d')
			);
		#$this->db->where('username',$_SESSION['username']);
		#Only For Admin Right Now
		$this->db->where('id',$this->session->userdata('id'));
		$this->db->update('admin',$data);

		#Remove the session variables before logging out
		$data = array('logged_in');
		$this->session->unset_userdata($data);
		$this->load->view('admin_layouts/admin_login');
	}

	#Reset Session
	public function reset_session()
	{
		$data = array(
				'session_id' => ''
			);
		#Only For Admin Right Now
		$this->db->where('id',$this->session->userdata('id'));
		$this->db->update('admin',$data);

		#Remove the session variables before logging out
		$this->load->view('admin_layouts/admin_login');
	}

	#reset password
	public function reset()
	{
		$this->load->view('admin_layouts/reset');
	}
	#List Of Admin
	public function l_o_ad(){
		$data['admins'] = $this->db->get('admin')->result();
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/l_o_ad',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}

	}
	#admin profile
	public function profile(){
		$data['profile'] = $this->admin_model->admin_profile();
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/profile',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	#Adding Admin
	public function add_admin(){
		if($this->session->userdata('logged_in')){
			$this->admin_model->add_admin();
			$this->session->set_flashdata('success', 'Admin added successfully !');
	        redirect('admin/profile');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}

	}
	#Edit Admin
	public function edit_admin($id){
		$this->form_validation->set_rules('username', 'User Name', 'required|min_length[6]');
		$this->form_validation->set_rules('n_pass', 'New Password', 'trim|required|min_length[8]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
        	redirect('admin/profile');
        }
        else{
			if($this->session->userdata('logged_in')){
				$this->admin_model->update_admin($id);
				$this->session->set_flashdata('success', 'Admin Info Updated Successfully !');
	        	redirect('admin/profile');
			}
			else{
				$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            	redirect('admin/xQzMe');
			}
		}
	}

	#Delete Admin
	public function delete_admin($id){
		$this->db->where('id',$id);
		$this->db->delete('admin');
		$this->session->set_flashdata('success', 'Addmin Deleted Successfully !');
		redirect('admin/l_o_ad');
	}

	#---------------------------------------------------------------------------------#
	
	#intro-about us
	public function add_intro()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/intro');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Introduction About Us
	public function add_intro_validation(){
		
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['max_width'] = '270';
    	$config['max_height'] = '120';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

    	if (! $this->upload->do_upload('intro_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/add_intro');
        }
        else
        {
        	$result = $this->admin_model->get_intro();

        	if(!$result){
				$this->admin_model->insert_intro();
	        	$this->session->set_flashdata('success', 'Intro added successfully !');
	            redirect('admin/add_intro');
	        }
	        else{
	        	$this->admin_model->update_intro();
	        	$this->session->set_flashdata('success', 'Intro updated successfully !');
	            redirect('admin/add_intro');
	        }
		}
	}
	#info-about us
	public function add_info()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/info');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	public function add_info_validation(){
		
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['max_width'] = '572';
    	$config['max_height'] = '373';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

    	if (! $this->upload->do_upload('info_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('nome', 'Name', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/add_info');
        }
        else
        {
        	$result = $this->admin_model->get_info();

        	if(!$result){
				$this->admin_model->insert_info();
	        	$this->session->set_flashdata('success', 'Info added successfully !');
	            redirect('admin/add_info');
	        }
	        else{
	        	$this->admin_model->update_info();
	        	$this->session->set_flashdata('success', 'Info updated successfully !');
	            redirect('admin/add_info');
	        }
		}
	}

	#testimony-about us
	public function testimony()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/testimony');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	public function add_testimony_validation(){
		
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['max_width'] = '22';
    	$config['max_height'] = '15';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

    	if (! $this->upload->do_upload('testimony_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');
		$this->form_validation->set_rules('nome', 'Content', 'required|min_length[4]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/testimony');
        }
        else
        {
			$this->admin_model->insert_testimony();
        	$this->session->set_flashdata('success', 'Testimony added successfully !');
            redirect('admin/testimony'); 
		}
	}

	public function update_testimony_validation(){
		
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

    	if (! $this->upload->do_upload('testimony_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');
		$this->form_validation->set_rules('nome', 'Content', 'required|min_length[4]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/testimony');
        }
        else
        {
	        $url = $this->uri->segment(3);
	        $this->admin_model->update_testimony($url);
        	$this->session->set_flashdata('success', 'Testimony updated successfully !');
            redirect('admin/testimony'); 
		}
	}

	public function delete_testimony()
	{
		$url = $this->uri->segment(3);
		$this->admin->model->delete_testimony($url);
		$this->session->set_flashdata('success', 'Testimony deleted successfully !');
		redirect('admin/testimony');
	}

	#clients-about us
	public function clients()
	{
		if($this->session->userdata('logged_in')){	
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/clients');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	public function add_client()
	{
		if($this->session->userdata('logged_in')){
			#image uploading
			$config['upload_path'] = './assets/images/';
	    	$config['allowed_types'] = 'gif|jpg|png';
	    	$config['max_size'] = '5000000';
	    	$config['max_width'] = '139';
    		$config['max_height'] = '139';
	    	$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('client_img'))
	        {
				$this->session->set_flashdata('error', $this->upload->display_errors());
	        }

	        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');

			if ($this->form_validation->run() == FALSE)
	        {
	            $this->session->set_flashdata('error', validation_errors());
	            redirect('admin/testimony');
	        }

	        else
	        {
	        	$this->admin_model->insert_client();
				$this->session->set_flashdata('success', 'Client Added successfully !');
	        	redirect('admin/clients');
	        }
	    }
	    else{
	    	$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
	    }
	}

	public function remove_client()
	{
		$this->admin_model->remove_client();
	}

	public function update_client()
	{
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('client_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/testimony');
        }

        else
        {
        	$this->admin_model->update_client();
			$this->session->set_flashdata('success', 'Client Updated successfully !');
        	redirect('admin/clients');
        }
	}


	#business-policy-about us
	public function policy()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/policy');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	public function add_policy(){
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('policy_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('feature', 'Feature', 'required|min_length[4]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/policy');
        }

        else{
        	$this->admin_model->insert_policy();
			$this->session->set_flashdata('success', 'Policy Added successfully !');
        	redirect('admin/policy');
        }
	}
	public function update_policy(){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('feature', 'Feature', 'required|min_length[4]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/policy');
        }

        else{
        	$this->admin_model->update_policy();
			$this->session->set_flashdata('success', 'Policy Updated successfully !');
        	redirect('admin/policy');
        }
	}
	public function remove_policy()
	{
		$this->admin_model->delete_policy();
	}


	#Activities

	#load-all-activities-activities
	public function l_o_a()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/l_o_a');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	
	#Inbox -- Read An Activity
	public function activity($id){
		$data['activity'] = $this->admin_model->get_the_activity($id);

		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/activity',$data);
		$this->load->view('admin_layouts/footer');
	}

	#add-news-event-activities
	public function a_n_e()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/a_n_e');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	public function d_n_e($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('a_n_e');
		$this->session->set_flashdata('success', 'News / Event Deleted successfully !');
		redirect('admin/l_o_a');
	}
	public function a_n_e_validation()
	{
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = 100;
    	$config['max_width'] = 300;
        $config['max_height'] = 144;
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('n_e_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[100]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/a_i');
        }
        else
        {
			$this->admin_model->add_activity();
			$this->session->set_flashdata('success', 'News/Event Added successfully !');
			
			if($this->input->post('url') == 'a_n_e'){redirect('admin/a_n_e');}
			if($this->input->post('url') == 'f_p'){redirect('admin/f_p');}
			if($this->input->post('url') == 'j_v'){redirect('admin/j_v');}
		}
	}
	#add-future-plan-activities
	public function f_p()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/f_p');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	#add-job-vacancy-activities
	public function j_v()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/j_v');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Gallery

	#current gallery-listing-Gallery
	public function c_g()
	{
		if($this->session->userdata('logged_in')){
			$data['g_infos'] = $this->admin_model->get_g_info();

			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/c_g',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	public function c_g_update(){

	}
	public function c_g_delete($id){
		$this->db->where('id', $id);
		$this->db->delete('g_info');
		$this->session->set_flashdata('success', 'Gallery Info Deleted successfully !');
		redirect('admin/c_g');
	}
	#gallery-info-Gallery
	public function g_i()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/g_i');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	#Adding Gallery info
	public function add_g_i(){
	    if($this->session->userdata('logged_in')){
		    $this->admin_model->add_gallery_info();
			$this->session->set_flashdata('success', 'Gallery Info Updated successfully !');
	    	redirect('admin/g_i');
	    }
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	#add-image-to-gallery-Gallery
	public function a_i()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/a_i');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}
	#Large Image Upload
	public function l_upload($img){
		#Large image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = 3000;
    	$config['max_width'] = 5472;
        $config['max_height'] = 3648;
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($img))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$port_path='';
			return $port_path;
        }
        else{
        	$image_info = $this->upload->data();
      		$port_path=$image_info['file_name'];
			return $port_path;
        }
	}

	#Small Image Upload
	public function s_upload($img){
		#Small image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = 200;
    	$config['max_width'] = 300;
        $config['max_height'] = 144;
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

		if (! $this->upload->do_upload($img))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			$port_path='';
			return $port_path;
        }
        else{
        	$image_info = $this->upload->data();
      		$port_path=$image_info['file_name'];
			return $port_path;
        }
	}


	#Add Image To gallery
	public function a_i_g(){
		
		$l_img = $this->l_upload('g_l_img');
		$s_img = $this->s_upload('g_s_img');

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/a_i');
        }
        else
        {
			$this->admin_model->add_gallery_image($l_img,$s_img);
			$this->session->set_flashdata('success', 'Gallery Image Uploaded successfully !');
	        redirect('admin/a_i');
    	}
	}
	#delete-image-from-gallery-Gallery
	public function d_i($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('a_i');
		$this->session->set_flashdata('success', 'Gallery Image Deleted successfully !');
		redirect('admin/c_g');
	}

	#Add-image/gallery-to-custom-section
	public function cr_g($id){
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/cr_g');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Gallery Section Ends

	#Blog

	#Add Blog
	public function add_blog(){
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/a_b');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	public function add_blog_validation(){
		
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['max_width'] = '200';
    	$config['max_height'] = '170';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

    	if (! $this->upload->do_upload('intro_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/add_blog');
        }
        else
        {
        	$this->admin_model->insert_blog();
	        $this->session->set_flashdata('success', 'Blog added successfully !');
	        redirect('admin/add_blog');
	        
		}
	}

	#Update Blog
	public function update_blog($id){
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/u_b');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	public function update_blog_validation($id){
		
		#image uploading
		$config['upload_path'] = './assets/images/';
    	$config['allowed_types'] = 'gif|jpg|png';
    	$config['max_size'] = '5000000';
    	$config['max_width'] = '200';
    	$config['max_height'] = '170';
    	$config['encrypt_name'] = TRUE;
		$this->load->library('upload', $config);

    	if (! $this->upload->do_upload('intro_img'))
        {
			$this->session->set_flashdata('error', $this->upload->display_errors());
        }

		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('content', 'Content', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/update_blog/'.$id);
        }
        else
        {
           	$this->admin_model->update_blog($id);
	        $this->session->set_flashdata('success', 'Blog updated successfully !');
	        redirect('admin/update_blog/'.$id);    
		}
	}

	#Delete Blog
	public function d_b($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blogs');
		$this->session->set_flashdata('success', 'Blog Deleted successfully !');
		redirect('admin/l_o_b');
	}

	#List Of Blogs
	public function l_o_b()
	{
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/l_o_b');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Single Blog
	public function single($id){
		$data['blog'] = $this->admin_model->get_the_blog($id);

		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/single',$data);
		$this->load->view('admin_layouts/footer');
	}

	#Create Factory Profile Page
	public function c_f_p($id){
		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/c_f_p');
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Add Factory Profile Function
	public function a_f_p($id){
		$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('detail', 'Details', 'required|min_length[5]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/c_f_p/'.$id);
        }

        else{
        	$this->admin_model->add_factory_profile($id);
			$this->session->set_flashdata('success', 'Factory Profile Added successfully !');
	        redirect('admin/c_f_p/'.$id);
        }
	}

	public function d_f_p($id){
		#First Fetch the Blog Id
		$query = $this->db->get_where('f_profile',array('id' => $id));
		$url = $query->row()->blog_id;
		
		#Then delete the profile Id
		$this->db->where('id', $id);
		$this->db->delete('f_profile');
		$this->session->set_flashdata('success', 'Profile Deleted successfully !');

		#Redirect to the Profile page for specific blog
		redirect('admin/c_f_p/'.$url);
	}


	#Search
	public function search(){

		#Lets get the time we need to find a result
		$this->benchmark->mark('code_start');

		#Make sure the search field is sanited
		$this->form_validation->set_rules('s_value', 'Search Field', 'required|htmlspecialchars|xss_clean');

		$r_url = $this->input->post('s_url');

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_tempdata('error',validation_errors(),30);
			redirect($r_url);
			$this->benchmark->mark('code_end');
		}
		else
		{
			$term = $this->input->post('s_value');
			
			#Special Cases
			#It could be done dynamic either.User will choose a string to naviagate to a specific section.Will be stored in the database.User will then just put the string in the search box and navigate to desired section.

			$cases = array(
				'about' => 'add_intro',
				'activity' => 'l_o_a',
				'addimage' => 'a_i',
				'addblog' => 'add_blog',
				'blog' => 'l_o_b',
				'mill' => 'l_o_b',
				'mills' => 'l_o_b',
				'addsection' => 'add_blog',
				'listofactivity' => 'l_o_a',
				'gallery' => 'c_g',
				'galleryinfo' => 'g_i',
				'inbox' => 'l_o_m',
				'introduction' => 'add_intro',
				'intro' => 'add_intro',
				'info' => 'add_info',
				'client' => 'clients',
				'testimonial' => 'testimony',
				'businesspolicy' => 'policy',
				'newsandevent' => 'l_o_a',
				'addnews' => 'a_n_e',
				'addevent' => 'a_n_e',
				'addfutureplan' => 'f_p',
				'addfuture' => 'f_p',
				'jobvacancy' => 'j_v',
				'addjob' => 'j_v',
				'currentgallery' => 'c_g'
			);

			#$s_term = preg_replace('/\s+/', '', $term);
			
			#Removing Space
			$s_term = str_replace(' ', '', $term);

			#small letter
			$s_term = strtolower($s_term);

			foreach ($cases as $key=>$value) {
				switch ($s_term) {
					case $key:
						redirect('admin/'.$value);
						#It's Redirecting so no need to break here
				}
			}

			$data['s_results'] = $this->admin_model->search($term);

			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/s_result',$data);
			$this->load->view('admin_layouts/footer');
		}
	}

	#Inbox -- Read A Message
	public function inbox($id){
		$data['message'] = $this->admin_model->get_the_message($id);

		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/message',$data);
		$this->load->view('admin_layouts/footer');
	}

	#Inbox -- List Of Messages
	public function l_o_m(){
		
		$data['base_url'] = base_url().'admin/l_o_m';
		$data['total_rows'] = $this->db->get('msg')->num_rows();
		$data['per_page'] = 5;
		$data["uri_segment"] = 3;
		$data['full_tag_open'] = '<ul class="pagination pagination-md">';
		$data['full_tag_close'] = '</ul>';

		$data['first_link'] = '&lt;&lt;';
		$data['first_tag_open'] = '<li>';
		$data['first_tag_close'] = '</li>';

		$data['last_link'] = '&gt;&gt;';
		$data['last_tag_open'] = '<li>';
		$data['last_tag_close'] = '</li>';

		$data['next_link'] = '&gt;';
		$data['next_tag_open'] = '<li>';
		$data['next_tag_close'] = '</li>';

		$data['prev_link'] = '&lt;';
		$data['prev_tag_open'] = '<li>';
		$data['prev_tag_close'] = '</li>';

		$data['cur_tag_open'] = '<li class="active"><a href="">';
		$data['cur_tag_close'] = '</a></li>';

		$data['num_tag_open'] = '<li>';
		$data['num_tag_close'] = '</li>';

		$this->pagination->initialize($data);

		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->db->order_by('id', 'DESC');
        $data['messages'] = $this->db->get('msg',$data['per_page'],$data['page'])->result();

        $data['pagination'] = $this->pagination->create_links();


		if($this->session->userdata('logged_in')){
			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/l_o_m',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Delete Message
	public function d_m($id){
		$this->db->where('id',$id);
		$this->db->delete('msg');
		$this->session->set_flashdata('success', 'Message Deleted Successfully !');
        redirect('admin/l_o_m');
	}

	#Reply Message
	public function r_m($id){

		$this->email->from($this->input->post('from'), 'Admin - Salma Group');
		$this->email->to($this->input->post('to'));

		$this->email->subject('Reply From Salma Group Admin');
		$this->email->message($this->input->post('rep'));

		$check = $this->email->send();

		if($check){
			$this->session->set_flashdata('success', 'Replied Successfully !');
        	redirect('admin/l_o_m');
		}
		else{
			$this->session->set_flashdata('error', 'Some Error Occured !');
        	redirect('admin/l_o_m');
		}
	}

	#Change Password
	public function change_pass(){
		$this->form_validation->set_rules('username', 'User Name', 'required|min_length[6]');
		$this->form_validation->set_rules('old_password', 'Old Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('new_password', 'New Password', 'trim|required|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[new_password]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
        	redirect('admin/NowAy');
        }
        else
        {
            $stat = $this->admin_model->change_pass();
            if($stat){
            	$this->session->set_flashdata('success', 'Password Updated Successfully !');
        		if($this->session->userdata('logged_in')){
        			redirect('admin/NowAy');
        		}
        		else{
        			redirect('admin/xQzMe');
        		}
            }
            else{
            	$username = md5($this->input->post('username'));

            	$fetch = $this->db->get_where('admin',array('username'=>$username))->num_rows();
            	if(!$fetch){
            		$this->session->set_flashdata('error', 'User Name Not Found !');
        			if($this->session->userdata('logged_in')){
        				redirect('admin/NowAy');
        			}
        			else{
        				redirect('admin/xQzMe');
        			}
            	}
            	else{
            		$this->session->set_flashdata('error', 'Password can\'t be updated at this mommnet! Please Try Again!');
        			if($this->session->userdata('logged_in')){
        				redirect('admin/NowAy');
        			}
        			else{
        				redirect('admin/xQzMe');
        			}
            	}
            }
        }
	}

	#contact Info

	public function contact_info()
	{
		if($this->session->userdata('logged_in')){

			$data['contact'] = $this->admin_model->contact_info();

			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/co_i',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	public function validate_contact(){

		$this->form_validation->set_rules('p_h', 'Page Heading', 'required|min_length[4]');
		$this->form_validation->set_rules('o_h', 'Office Heading', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
		$this->form_validation->set_rules('fax', 'Fax', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'required|min_length[10]');

		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
        	redirect('admin/contact_info');
        }
        else
        {
        	$this->admin_model->validate_contact_info();
        	$this->session->set_flashdata('success', 'Contact Info Updated Successfully !');
        	redirect('admin/contact_info');
        }
	}

	public function day_event($year,$month,$date){
		$this->benchmark->mark('code_start');
		if($this->session->userdata('logged_in')){
			$data['events'] = $this->admin_model->get_event($date,$month,$year);
			if($date<10){
				$data['dt'] = '0'.$date.'/'.$month.'/'.$year;
			}
			else{
				$data['dt'] = $date.'/'.$month.'/'.$year;
			}

			$this->load->view('admin_layouts/header');
			$this->load->view('admin_layouts/sidebar');
			$this->load->view('admin_layouts/event',$data);
			$this->load->view('admin_layouts/footer');
		}
		else{
			$this->session->set_flashdata('error', 'Unauthorized Access Not Granted !');
            redirect('admin/xQzMe');
		}
	}

	#Footer
	public function tweets(){
		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/r_t');
		$this->load->view('admin_layouts/footer');
	}
	public function concern(){
		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/concern');
		$this->load->view('admin_layouts/footer');
	}
	public function contact_person(){
		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/c_p');
		$this->load->view('admin_layouts/footer');
	}
	public function stay_conneted(){
		$this->load->view('admin_layouts/header');
		$this->load->view('admin_layouts/sidebar');
		$this->load->view('admin_layouts/s_c');
		$this->load->view('admin_layouts/footer');
	}
	#Footer
}