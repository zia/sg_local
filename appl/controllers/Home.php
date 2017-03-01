<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		#About Us page
		
		$this->load->model('home_model');

		$data['intros'] = $this->home_model->get_intro();

		$data['infos'] = $this->home_model->get_info();

		$data['testimonials'] = $this->home_model->get_testimony_view();

		$data['clients'] = $this->home_model->get_clients();

		$data['policies'] = $this->home_model->get_policy();

		$data['contact'] = $this->home_model->contact_info();

		$data['recents'] = $this->home_model->recent_items();

		#About Us page Ends

		#Fetching Specific Galleries
		$data['dsm_galaries'] = $this->home_model->get_dsm();
		$data['tsm_galaries'] = $this->home_model->get_tsm();
		$data['ssb_galaries'] = $this->home_model->get_ssb();

		#Fetching News/Events
		$data['n_es'] = $this->home_model->get_news_events();
		
		#Fetching F_P
		$data['f_ps'] = $this->home_model->get_future_plan();
		
		#Fetching J_V
		$data['j_vs'] = $this->home_model->get_job_vacancy();

		#Blogs
		$data['blogs'] = $this->home_model->get_blog();


		$this->load->view('home_layouts/header');
		$this->load->view('home_layouts/about',$data);
		$this->load->view('home_layouts/gallery',$data);
		$this->load->view('home_layouts/blog',$data);
		$this->load->view('home_layouts/home_view',$data);
		$this->load->view('home_layouts/contact',$data);
		$this->load->view('home_layouts/footer');
	}

	#Message
	public function message(){

		$this->form_validation->set_rules('name', 'Name', 'required|xss_clean|htmlspecialchars');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|xss_clean|htmlspecialchars');
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim|xss_clean|htmlspecialchars');
		$this->form_validation->set_rules('msg', 'Message', 'required|xss_clean|htmlspecialchars|min_length[10]');
		$this->form_validation->set_rules('validation', 'Captcha Field', 'required|xss_clean|htmlspecialchars');

		#The Matches Isn't wroking here.
		
		if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('error', validation_errors());
			redirect('home#!/page_mail');
        }
        else if($this->input->post('validation') != $this->input->post('captcha') ){
        	$this->session->set_flashdata('error', 'Captcha is not Matched !');
			redirect('home#!/page_mail');
        }
        else
        {
        	$this->load->model('home_model');
			$this->home_model->insert_msg();
			$this->session->set_flashdata('success', 'Contact form submitted!');
			redirect('home#!/page_mail');
        }	
	}
}