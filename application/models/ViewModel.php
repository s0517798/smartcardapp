<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
    }

    //home
    public function getAllCat()
    {
        return $this->db->select('*')->from('category')
                        ->get()
                        ->result_array();
    }
    //shop
    public function getAllShop()
    {
        return $this->db->select('s.*, c.cat_icon')->from('shopkeeper as s')
                        ->join('category as c', 'c.id = s.category')
                        ->get()
                        ->result_array();
    }
    public function getOneShop($id)
    {
        return $this->db->select('s.*, c.*')->from('shopkeeper as s')
                        ->join('category as c', 'c.id = s.category')
                        ->where('s.id', $id)
                        ->get()
                        ->row();
    }
    //login
    public function logincheck($login)
    {
        $checking = $this->db->select('*')->from('shopkeeper')
                            ->where('skuserid', $login['userid'])
                            ->where('skpass', $login['password'])
                            ->get()
                            ->row();
        if(!empty($checking)){
            $this->session->set_userdata('loginid', $checking->id);
            return true;
        }else{
            return false;
        }
    }
    //activate card
    public function issuecard()
    {
        return $this->db->select('c.*')->from('issue as i')
                        ->join('card as c', 'c.id = i.cardno')
                        ->where('i.shname', $this->session->userdata('loginid'))
                        ->where('c.status', 'issued')
                        ->get()
                        ->result_array();
    }
    public function activate($user)
    {
        $card = $this->getCardNo($user['cardid']);
        $cust = array(
            'customer_name' => $user['custname'],
            'customer_phone' => $user['custphno'],
            'customer_cards' => $card->cardno,
            'activate_date' => date('Y-m-d'),
            'deactivate_date' => date('Y-m-d', strtotime('+5 years'))
        );
        if($this->db->insert('customer', $cust)){
            $this->db->where('id', $user['cardid'])
                        ->update('card', array('status' => 'active'));
        }
        return true;
    }
    public function getCardNo($id)
    {
        return $this->db->select('*')->from('card')
                        ->where('id', $id)
                        ->where('status', 'issued')
                        ->get()
                        ->row();
    }
    //issue cards
    public function issuecards()
    {
        return $this->db->select('c.*')->from('issue as i')
                        ->join('card as c', 'c.id = i.cardno')
                        ->where('shname', $this->session->userdata('loginid'))
                        ->get()
                        ->result_array();
    }
    //validity checking
    public function validcheck($cardno)
    {
        return $this->db->select('*')->from('customer')
                        ->like('customer_cards', $cardno)
                        ->get()
                        ->row();
    }
}