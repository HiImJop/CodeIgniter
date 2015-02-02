<?php
class getDB extends CI_Model{
    
    function __construct()
    {
        parent::__construct();
    }

    function getSchedules()
    {
        $query = $this->db->get('schedule');
        if($query->num_rows() > 0)
        {
            foreach($query->result() as $r)
            {
                $data[] = $r;
            }
        }
        return $data;
    }
    
    function insertReservation($data)
    {
        $this->db->insert('book',$data);
    }
    function sign_in($user,$password)
    {
        $this->db->where('username', $user);
        $this->db->where('password', $password);
        $q = $this->db->get('accounts');
        if($q->num_rows == 1)
        {
            return true;
        }
    }
    
    function retrieveInfo()
    {
        $this->db->select('ticketNo,name,travType,origin,destination,status');
        $que = $this->db->get('book');
        if($que->num_rows() > 1)
        {
            return $que->result();
        }
    }
    function retrieveForEdit($id)
    {
        $this->db->select('*');
        $this->db->where('ticketNo',$id);
        $q = $this->db->get('book');
        if($q->num_rows() == 1)
        {
            return $q->result();
        }
    }
    function updateRecord($id,$data)
    {
       $this->db->where('ticketNo',$id);
       $q = $this->db->update('book',$data);
      
        if($q)
        {
            return true;
        }
    }
}
