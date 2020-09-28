<?php
class First extends CI_Controller
{
  function stuadd()
    {
     $this->load->model('Reg');
     $r = $this->input->post('txtname');
     $s = $this->input->post('txtemail');
     $b = $this->input->post('txtpass');
     $f = $this->input->post('txtmob');
    
    $this->input->set_cookie('cuid',$r,3600);
    $this->input->set_cookie('cpwd',$b,3600);
    
     $res=$this->Reg->reginsert($r,$s,$b,$f);
     if($res==1)
     $data['res']= "data inserted successfully";
     else
     $data['res']= "problem in insertion";
     $this->load->view('website/home',$data);
    }
   function getCookie()
   {
    
    echo $this->input->cookie('cpwd');

   }
  function index()
  {
  	$this->load->view("website/header");
    $this->load->view("website/home");
    $this->load->view("website/footer");  
  }
  function about()
  {
    $this->load->view("website/header");
    $this->load->view("website/about");
    $this->load->view("website/footer");  
  }
  function services()
  {
    $this->load->view("website/header");
    $this->load->view("website/services");
    $this->load->view("website/footer");  
  }
  function contact()
  {
    $this->load->view("website/header");
    $this->load->view("website/contact");
    $this->load->view("website/footer");  
  }
  

}