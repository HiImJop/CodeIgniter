<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->model('getDB');
  }  
  
   function updateTrans()
    {
       $me['message'] = 'Successfully Updated'; 
       $stats = array(
           'status' => $this->input->post('stat')
       );
       $no = $this->input->post('ticket');
       $result = $this->getDB->updateRecord($no,$stats);
       if($result)
       {
           redirect(base_url());
       }
    }
    
    function retrieve()
    {
        if($this->session->userdata('login'))
        {
            $user = $this->session->userdata('username');
            $data['datas'] = $this->getDB->retrieveInfo($user);
            $this->load->view('passengers',$data);
        }
        else
        {
            redirect(base_url());
        }
    }
    function getEdit()
    {
      $id = $this->input->get('ticket');
      $result['ticket'] = $this->getDB->retrieveForEdit($id);
      $this->load->view('EditBook',$result);
    }
    
   

}

?>
    