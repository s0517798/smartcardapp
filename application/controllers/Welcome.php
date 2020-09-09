<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('ViewModel', 'vm');
	}
	//home
	public function index()
	{
		$data['cats'] = $this->vm->getAllCat();
		$data['shops'] = $this->vm->getAllShop();
		$this->load->view('home', $data);
	}
	//login
	public function loginview()
	{
		if($this->session->userdata('loginid') == ''){
			$this->load->view('login');
		}else{
			redirect('after-login');
		}
	}
	public function loginform()
	{
		$check = $this->vm->logincheck($this->input->post(), true);
		if($check){
			redirect('after-login');
		}else{
			redirect('login');
		}
	}
	//shop details
	public function shopdetail()
	{
		$data['shop'] = $this->vm->getOneShop($this->input->get('id'), true);
		$this->load->view('shop_details', $data);
	}
	//after login
	public function afterlogin()
	{
		if($this->session->userdata('loginid') == ''){
			redirect('login');
		}else{
			$this->load->view('after_login');
		}
	}
	//activate card
	public function activatecard()
	{
		if($this->session->userdata('loginid') == ''){
			redirect('login');
		}else{
			$data['cards'] = $this->vm->issuecard();
			$this->load->view('activate_card', $data);
		}
	}
	public function activatecardform()
	{
		$this->vm->activate($this->input->post(), true);
		redirect('/after-login');
	}
	//issue card
	public function issuecards()
	{
		if($this->session->userdata('loginid') == ''){
			redirect('login');
		}else{
			$data['cards'] = $this->vm->issuecards();
			$this->load->view('card_issued', $data);
		}
	}
	//check validity
	public function validitycheck()
	{
		if($this->session->userdata('loginid') == ''){
			redirect('login');
		}else{
			$data['validity'] = array();
			$this->load->view('validate_card', $data);
		}
	}
	public function validitycheckform()
	{
		$validity = $this->vm->validcheck($this->input->get('cardno'), true);
		$data = new stdClass();
		$date1 = date_create(date('Y-m-d'));
		$date2 = date_create(date('d/m/Y', strtotime($validity->deactivate_date)));
		$datediff = date_diff($date1,  $date2);
		$data->customer_name = $validity->customer_name;
		$data->customer_phone = $validity->customer_phone;
		$data->customer_cards = $validity->customer_cards;
		$data->activate_date = $validity->activate_date;
		$data->deactivate_date = $validity->deactivate_date;
		$data->validitytil = $datediff->format("%R%a days");
		$makearray = json_decode(json_encode($data), true);
		echo json_encode($makearray);
	}
	//logout
	public function logout()
	{
		$this->session->unset_userdata('loginid');
		$this->session->sess_destroy();
		redirect('/');
	}
}
