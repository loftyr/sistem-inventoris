<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function index()
    {
        $dataheader['judul']    = 'Admin';
        $dataheader['css']      = ''; // 
        $datafooter['js']       = ''; // 


        $this->load->view('templates/header', $dataheader);
        $this->load->view('page/index');
        $this->load->view('templates/footer', $datafooter);
    }
}
