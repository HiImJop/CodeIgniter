<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiteController extends CI_Controller {

    

    function __construct() {
        parent::__construct();
        $this->load->model('getDB');
        $this->load->helper(array('form', 'url'));
        $this->load->library('session');
    }
    
    function index()
    {
       if($this->session->userdata('login'))
       {
           $this->load->view('admin');
       }
      $this->load->view('home');
    
    }
    
    function aboutUs()
    {
       if($this->session->userdata('login'))
       {
           $this->load->view('admin');
       }
       $this->load->view('about');
    }
    
    function contactUs()
    {
        if($this->session->userdata('login')){
            $this->load->view('admin');
        }
       $this->load->view('contact');
    }
    function admin()
    {
        if($this->session->userdata('login'))
        {
            $data['sched'] = $this->getDB->getSchedules();
            $this->load->view('admin',$data);
        }
        else
            redirect(base_url());
    }
    function reservation()
    {
        if($this->session->userdata('login')){
            $this->load->view('admin');
        }
       $this->load->view('reservation');
    }
     function schedule()
    {
        if($this->session->userdata('login')){
        
           admin();
        }  
       $data['sched'] = $this->getDB->getSchedules();
       $this->load->view('schedules',$data);
      
    }
    function signin()
    {
        if($this->getDB->sign_in($this->input->post('username'),$this->input->post('password')))
        {
            $this->session->set_userdata('login', TRUE);
            $this->session->set_userdata('user',$this->input->post('username'));
            $data['sched'] = $this->getDB->getSchedules();
            $this->load->view('admin',$data);
        }
        else
        {
            redirect(base_url());
        }
    }
    function signup()
    {
        $this->load->view('signup');
    }
    function logout()
    {
        $this->session->unset_userdata('login');
       redirect(base_url());
    }
  
    function add_reservation()
        {
            $data['message'] = 'Success!';
            
           $transT = $this->input->post('transType');
           $origin = $this->input->post('origin');
           $desti = $this->input->post('destination');
           $departD = $this->input->post('departDate');
           $fulname = $this->input->post('fname');
           $address = $this->input->post('adr');
           $contact = $this->input->post('contct');
           $email = $this->input->post('emailAd');
           $adult = $this->input->post('adult');
           $child = $this->input->post('child');
           $accom = $this->input->post('accomType');
           
           $reservation = array(
            'travType' => $transT,
            'origin' => $origin,
            'destination' => $desti,
            'depDate' => $departD,
            'name' => $fulname,
            'address' => $address,
            'contact' => $contact,
            'email' =>  $email,
            'noPaxA' => $adult,
            'noPaxC' => $child,
            'accoType' => $accom,
            'status' => 'Open'  
               
           );
           $this->getDB->insertReservation($reservation);
           $this->load->view('reservation',$data);
        }
      
        
       
       
}