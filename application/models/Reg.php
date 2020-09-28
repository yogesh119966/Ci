<?php
class Reg extends CI_Model
{
	  function __construct()
       {
        parent::__construct();
        $this->load->database();
       }
     function reginsert($n,$e,$p,$m)
    {
     $this->db->insert('reg',array('name'=>$n,'email'=>$e,'pass'=>$p,'mobile'=>$m));
     return $this->db->affected_rows();
    }
  

}
?>