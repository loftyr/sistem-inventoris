<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function index()
    {
        $dataheader['judul']    = 'Login Sistem';
        $dataheader['css']      = ''; // 
        $datafooter['js']       = ''; // 


        $this->load->view('templates/headerlogin', $dataheader);
        $this->load->view('page/v_login');
        $this->load->view('templates/footerlogin', $datafooter);
    }

    public function authLogin()
    {
        $user = htmlspecialchars($this->input->post('Username'));
        $pass = $this->input->post('Password');

        $dataUser = $this->db->get_where('ap_user', ['Username' => $user])->row_array();

        // Check Data User
        if ($dataUser) {
            // Check Status User
            // if ($dataUser['Status'] == 1) {


            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            //     <strong>User Tidak Aktif</strong> Mohon Hubungin Admin
            //     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //         <span aria-hidden="true">&times;</span>
            //     </button></div>');
            //     redirect('login');
            // }

            // Check Password User
            if (password_verify($pass, $dataUser['Password'])) {
                $datasession = [
                    'Id_User'   => $dataUser['Id_User'],
                    'Username'  => $dataUser['Username'],
                    'Nama'      => $dataUser['Nama'],
                    'Level'     => $dataUser['Level']
                ];

                $this->session->set_userdata('logged_in', $datasession);
                // redirect(base_url('home')); //Redirect Home
                // die();

                $data['cekUser'] = true;
                $data['cekPass'] = true;
                echo json_encode($data);
            } else {
                // $this->session->set_flashdata('message', '<div class="col-12 alert alert-danger alert-dismissible animated fadeIn show" role="alert">
                // <strong>Password Salah !!!</strong>
                // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //     <span aria-hidden="true">&times;</span>
                // </button></div>');
                // redirect('login');
                // die();
                $data['cekUser'] = true;
                $data['cekPass'] = false;

                echo json_encode($data);
            }
        } else {
            $data['cekUser'] = false;
            $data['cekPass'] = false;

            echo json_encode($data);
            // $this->session->set_flashdata('message', '<div class="col-12 alert alert-warning alert-dismissible animated fadeIn show" role="alert">
            // <strong>User Tidak Ditemukan</strong>
            // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            //     <span aria-hidden="true">&times;</span>
            // </button></div>');
            // redirect('login');
            // die();
        }
    }

    public function out()
    {
        session_unset();
        session_destroy();
        redirect('login', 'refresh');
    }
}
