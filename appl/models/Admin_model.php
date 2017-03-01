<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function get_intro(){

		$query = $this->db->get('intro');

		return $query->num_rows();
	}

	public function insert_intro(){
		$data = array(
			'title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name')
		);
		$this->db->insert('intro', $data);
	}

	public function update_intro(){
		$data = array(
			'title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name')
		);

		$query = $this->db->get('intro');
		$row = $query->row();
		
		$this->db->where('id', $row->id);
		$this->db->update('intro', $data);
	}


	public function get_info(){

		$query = $this->db->get('info');

		return $query->num_rows();
	}

	public function insert_info(){
		$data = array(
			'title' => $this->input->post('title'),
			'name' => $this->input->post('nome'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name')
		);
		$this->db->insert('info', $data);
	}

	public function update_info(){
		$data = array(
			'title' => $this->input->post('title'),
			'name' => $this->input->post('nome'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name')
		);

		$query = $this->db->get('intro');
		$row = $query->row();
		
		$this->db->where('id', $row->id);
		$this->db->update('info', $data);
	}

	#Testimonial Management

	#For Admin
	public function get_testimony(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get('testimonial');
		return $query->result();
	}
	
	public function insert_testimony(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name'),
			'name' => $this->input->post('nome'),
			'designation' => $this->input->post('designation'),
			'address' => $this->input->post('address'),
			'date' => $this->input->post('date')
		);
		$this->db->insert('testimonial', $data);
	}

	public function update_testimony($id){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name'),
			'name' => $this->input->post('nome'),
			'designation' => $this->input->post('designation'),
			'address' => $this->input->post('address'),
			'date' => date('Y-m-d', strtotime($this->input->post('date')))
		);
		$this->db->where('id', $id);
		$this->db->update('testimonial', $data);
	}

	public function delete_testimony($id){
		$this->db->where('id', $id);
		$this->db->delete('testimonial');
	}

	#Testimonial Management Ends

	#Client Managment

	public function get_client(){
		$query = $this->db->get('clients');

		return $query->result();
	}

	public function insert_client(){
		$data = array(
			'title' => $this->input->post('title'),
			'img_path' => $this->upload->data('file_name')
		);
		$this->db->insert('clients', $data);
	}

	public function update_client(){
		$data = array(
			'title' => $this->input->post('title'),
			'img_path' => $this->upload->data('file_name')
		);
		$this->db->update('clients', $data);
		$this->db->where();
	}

	public function remove_client(){
		
	}

	#Client Managment Ends

	#Business Policy Management

	public function insert_policy(){
		$data = array(
			'title' => $this->input->post('title'),
			'feature' => $this->input->post('feature'),
			'description' => $this->input->post('description'),
			'img_path' => $this->upload->data('file_name')
		);
		$this->db->insert('b_p', $data);
	}

	public function update_policy(){
		$data = array(
			'title' => $this->input->post('title'),
			'feature' => $this->input->post('feature'),
			'description' => $this->input->post('description')
		);
		$this->db->insert('b_p', $data);
	}

	public function delete_policy(){
		
	}

	#Business Policy Management Ends

	#Gallery Section
	public function add_gallery_info(){
		$data = array(
			'title' => $this->input->post('title'),
			'subtitle' => $this->input->post('subtitle'),
			'section' => $this->input->post('section')
		);
		$this->db->insert('g_info', $data);
	}

	#Fetching Gallery Infos
	public function get_g_info(){
		$query = $this->db->get('g_info');
		return $query->result();
	}

	public function add_gallery_image($l_img,$s_img){
		$data = array(
			'title' => $this->input->post('title'),
			's_img_path' => $s_img,
			'l_img_path' => $l_img,
			'section' => $this->input->post('section'),
			'url' => $this->input->post('link')
		);
		$this->db->insert('a_i', $data);
	}

	public function add_activity(){
		$data = array(
			'title' => $this->input->post('title'),
			'type' => $this->input->post('type'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name'),
			'date' => $this->input->post('date')
		);
		$this->db->insert('a_n_e', $data);
	}

	public function get_the_activity($id){
		
		#You have to fetch whether it's news or event or future plan pr job vacancy
		#News = 0, Event = 1, Future Plan = 2, Job Vacancy = 3
		#Remove Notification
		$data = array(
			'stat' => 1
		);
		$this->db->where('id',$id);
		$this->db->update('a_n_e',$data);

		#Return Found Message
		return $this->db->get_where('a_n_e',array('id'=>$id))->row();
	}

	#Login
	public function login_check(){

		#The User Name Must Be unique..
		#Fetch the salt first
		$username = md5($this->input->post('username'));
		$query = $this->db->get_where('admin',array('username' => $username))->row();
		$salt = $query->salt;
		
		#Hash The Password
		$pass = sha1(md5(sha1(md5($this->input->post('password')))));
		$password = $salt.$pass;

		//echo $password;
		//exit();

		#Validate The Login
		$data = array(
			'username' => md5($this->input->post('username')),
			'password' => $password
		);

		$query = $this->db->get_where('admin',array('username' => $data['username'], 'password' => $data['password']));

		#If Login Successful update the salt
		if($query->num_rows()){

			$salt = sha1(sha1(md5(md5(random_string('alnum', 32)))));
			$password = $salt.$pass;

			$data = array(
				'salt' => $salt,
				'password' => $password,
				'session_id' => session_id()
			);
			$this->db->where('username',md5($this->input->post('username')));
			$this->db->update('admin',$data);
		}
		#Return Login Status
		return $query->num_rows();
	}

	#Changing Password
	public function change_pass(){
		$username = md5($this->input->post('username'));

		$data = array(
			'password' => sha1(md5(sha1(md5($this->input->post('new_password'))))),
			'salt' => ''
		);

		$this->db->where('username',$username);
		$query = $this->db->update('admin',$data);

		if($query){return TRUE;}
		else{return FALSE;}
	}

	#Load Admin profile
	public function admin_profile(){
		return $this->db->get_where('admin',array('id' => $this->session->userdata('id')))->row();
	}

	#Add Admin
	public function add_admin(){
		$data = array(
			'username' 	=> md5($this->input->post('username')),
			'password' 	=> sha1(md5(sha1(md5($this->input->post('password'))))),
			'role' 		=> $this->input->post('role'),
			'created' 	=> date('Y-m-d')
		);
		$this->db->insert('admin', $data);
	}

	#update Admin
	public function update_admin($id){
		$data = array(
			'name' 			=> $this->input->post('name'),
			'phone' 		=> $this->input->post('phone'),
			'email' 		=> $this->input->post('email'),
			'notes' 		=> $this->input->post('notes'),
			'username' 		=> md5($this->input->post('username')),
			'password' 		=> sha1(md5(sha1(md5($this->input->post('n_pass'))))),
			'role' 			=> $this->input->post('role'),
			'salt' 			=> '',
		);
		$this->db->where('id',$id);
		$this->db->update('admin', $data);
	}

	#Blog
	public function insert_blog(){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name')
		);
		$this->db->insert('blogs', $data);
	}

	public function update_blog($id){
		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'img_path' => $this->upload->data('file_name')
		);
		
		$this->db->where('id', $id);
		$this->db->update('blogs', $data);
	}

	public function get_the_blog($id){
		#Return Found Blog
		return $this->db->get_where('blogs',array('id'=>$id))->row();
	}

	public function add_factory_profile($id){
		$data = array(
			'blog_id' => $id,
			'heading' => $this->input->post('title'),
			'info' => $this->input->post('detail')
		);
		$this->db->insert('f_profile', $data);
	}

	public function search($term){
		$tables = array(
			'a_n_e' => 'a_n_e',
			'blogs' => 'blogs',
			'b_p' => 'b_p',
			'clients' => 'clients',
			'f_profile' => 'f_profile',
			'g_info' => 'g_info',
			'info' => 'info',
			'intro' => 'intro',
			'msg' => 'msg',
			'testimonial' => 'testimonial'
		);

		foreach ($tables as $table) {
			if($table == 'a_n_e'){
				$this->db->like('title', $term);
				$this->db->or_like('date', $term);
			}
			else if($table == 'blogs'){
				$this->db->like('title', $term);
				$this->db->or_like('content', $term);
			}
			else if($table == 'b_p'){
				$this->db->like('title', $term);
				$this->db->or_like('feature', $term);
				$this->db->or_like('description', $term);
			}
			else if($table == 'clients'){
				$this->db->like('title', $term);
			}
			else if($table == 'f_profile'){
				$this->db->like('heading', $term);
				$this->db->or_like('info', $term);
			}
			else if($table == 'g_info'){
				$this->db->like('title', $term);
				$this->db->or_like('subtitle', $term);
				$this->db->or_like('section', $term);
			}
			else if($table == 'info'){
				$this->db->like('title', $term);
				$this->db->or_like('name', $term);
				$this->db->or_like('content', $term);
			}
			else if($table == 'intro'){
				$this->db->like('title', $term);
				$this->db->or_like('subtitle', $term);
				$this->db->or_like('content', $term);
			}
			else if($table == 'msg'){
				$this->db->like('name', $term);
				$this->db->or_like('email', $term);
				$this->db->or_like('phone', $term);
				$this->db->or_like('msg', $term);
			}
			else{
				$this->db->like('title', $term);
				$this->db->or_like('content', $term);
				$this->db->or_like('name', $term);
				$this->db->or_like('designation', $term);
				$this->db->or_like('address', $term);
				$this->db->or_like('date', $term);
			}

			$query = $this->db->get($table);
			$s_result[$table] = $query->result();
		}

		return $s_result;
	}

	public function get_the_message($id){
		
		#Remove Notification
		$data = array(
			'stat' => 1
		);
		$this->db->where('id',$id);
		$this->db->update('msg',$data);

		#Return Found Message
		return $this->db->get_where('msg',array('id'=>$id))->row();
	}


	#Contact

	#Fetching Contact Infos
	public function contact_info(){
		return $this->db->get('contact')->row();
	}

	#Validate and insert contact infos
	public function validate_contact_info(){

		$data = array(
			'page_heading' => $this->input->post('p_h'),
			'office_heading' => $this->input->post('o_h'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'fax' => $this->input->post('fax'),
			'email' => $this->input->post('email')
		);
		$this->db->where('id',1);
		$this->db->update('contact', $data);
	}

	#generate Calendar
	public function generate($year = 'null', $month = 'null'){
		$template = '

		        {table_open}<table class="table table-responsive table-hover table-bordered" style="border-collapse:collapse; table-layout:fixed;">{/table_open}

		        {heading_row_start}<tr>{/heading_row_start}

		        {heading_previous_cell}<th style="text-align:center;" class="info"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		        {heading_title_cell}<th style="text-align:center;" colspan="{colspan}">{heading}</th>{/heading_title_cell}
		        {heading_next_cell}<th style="text-align:center;" class="info"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

		        {heading_row_end}</tr>{/heading_row_end}

		        {week_row_start}<tr>{/week_row_start}
		        {week_day_cell}<td align="center">{week_day}</td>{/week_day_cell}
		        {week_row_end}</tr>{/week_row_end}

		        {cal_row_start}<tr>{/cal_row_start}
		        {cal_cell_start}<td align="center" style="word-wrap:break-word;height:46px;">{/cal_cell_start}
		        {cal_cell_start_today}<td align="center" class="info">{/cal_cell_start_today}
		        {cal_cell_start_other}<td class="other-month">{/cal_cell_start_other}

		        {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
		        {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

		        {cal_cell_no_content}{day}{/cal_cell_no_content}
		        {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

		        {cal_cell_blank}&nbsp;{/cal_cell_blank}

		        {cal_cell_other}{day}{/cal_cel_other}

		        {cal_cell_end}</td>{/cal_cell_end}
		        {cal_cell_end_today}</td>{/cal_cell_end_today}
		        {cal_cell_end_other}</td>{/cal_cell_end_other}
		        {cal_row_end}</tr>{/cal_row_end}

		        {table_close}</table>{/table_close}
			';

			$prefs = array(
		        'template'    => $template,
		        'month_type'   => 'long',
		        'day_type'     => 'abr',
		        'show_next_prev'  => TRUE,
        		'next_prev_url'   => base_url().'admin/index'
			);


			$this->load->library('calendar', $prefs);

			for($i=0;$i<=31;$i++){
				if(!$year || !$month){
					$year = date('Y');
					$month = date('m');
					$info[$i] = base_url().'admin/day_event/'.$year.'/'.$month.'/'.$i;
				}
				else{
					$info[$i] = base_url().'admin/day_event/'.$year.'/'.$month.'/'.$i;
				}
			}

			return $this->calendar->generate($year,$month,$info);
	}

	#Get Calendar Event
	public function get_event($date,$month,$year){
		$dt = $date.'/'.$month.'/'.$year;
		return $this->db->get_where('a_n_e',array('date' => $dt))->result();
	}


}