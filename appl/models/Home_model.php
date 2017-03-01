<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	#About Us
	public function get_intro(){
		$query = $this->db->get('intro');
		return $query->result();
	}

	public function get_info(){
		$query = $this->db->get('info');
		return $query->result();
	}

	#For View (showing last 3)
	public function get_testimony_view(){
		$this->db->order_by("id", "desc");
		$this->db->limit(3);
		$query = $this->db->get('testimonial');
		return $query->result();
	}

	#For View (showing last 9)
	public function get_clients(){
		$this->db->order_by("id", "desc");
		$this->db->limit(9);
		$query = $this->db->get('clients');
		return $query->result();
	}

	#For View (showing last 6)
	public function get_policy(){
		$this->db->order_by("id", "desc");
		$this->db->limit(6);
		$query = $this->db->get('b_p');
		return $query->result();
	}
	#About Us Ends

	#Gallery

	public function get_dsm(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('a_i',array('section' => 'DABIRUDDIN SPINNING MILLS LTD.'));
		return $query->result();
	}

	public function get_tsm(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('a_i',array('section' => 'TAMIJUDDIN TEXTILE MILLS LTD.'));
		return $query->result();
	}

	public function get_ssb(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('a_i',array('section' => 'BSB SPINNING MILLS LTD.'));
		return $query->result();
	}

	#Activity
	public function get_activity(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get('a_n_e');
		return $query->result();
	}

	public function get_news_events(){
		$this->db->select('*');
		$this->db->where("(type = '0' OR type = '1')");
		$query = $this->db->get('a_n_e');	
		return $query->result();
	}

	public function get_future_plan(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('a_n_e',array('type' => '2'));	
		return $query->result();
	}

	public function get_job_vacancy(){
		$this->db->order_by("id", "desc");
		$query = $this->db->get_where('a_n_e',array('type' => '3'));	
		return $query->result();
	}

	#Blog
	public function get_blog(){
		$this->db->order_by("id","desc");
		$query = $this->db->get('blogs');
		return $query->result();
	}

	#Message
	public function insert_msg(){
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'msg' => $this->input->post('msg'),
			'date' => $this->input->post('date')
		);
		$this->db->insert('msg', $data);
	}

	#Fetching Contact Infos
	public function contact_info(){
		return $this->db->get('contact')->row();
	}

	#Recent Items
	public function recent_items(){
		#Increase The Limit To Show More Items
		$this->db->order_by("id", "desc");
        $this->db->limit(2);
        return $this->db->get('a_n_e')->result();
	}

}