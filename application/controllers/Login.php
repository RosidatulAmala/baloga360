<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login extends CI_Controller {

        // konstruktor 
        function __construct(){

            parent::__construct();


            // panggil model disini
            $this->load->model('M_login');
        }    




        // view utama
        function index() {

            $this->load->view('login/V_login');
        }


        /**
         * 
         *  1. Login input username dan password
         *  2. Mencocokan antara (user password) dengan database
         *  3. Jika cocok masuk dashboard
         *  4. Jika tidak kembali ke halaman login
         */

        function proseslogin() {


            // @TODO 1 : Input username dan password
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            

            // @TODO 2 : Pengecekan user dan password
            $getDataProfile = $this->M_login->getDataProfile( $username );
                        
            // cek akun terdaftar ?
            if ( $getDataProfile->num_rows() == 1 ) {

                $kolom = $getDataProfile->row_array();
                
                // cek password
                $passwordDB = $kolom['password'];


                // pencocokan password DB dengan password dari view
                if ( $passwordDB == $password ){

                    /** Tambah session */
                    $dataSession = array(

                        'sess_idprofile'=> $kolom['id_profile'],
                        'sess_level'    => $kolom['level'],
                        'sess_username' => $kolom['username']
                    );
                    // pasang session 
                    $this->session->set_userdata( $dataSession );



                    redirect('dashboard');

                } else {

                    $this->session->set_flashdata('msg', 'Kata sandi salah');
                    redirect('login');
                }
                

            } else {

                $this->session->set_flashdata('msg', 'Akun tidak terdaftar !');
                redirect('login');
            }
            

            

            
        }







        // logout
        function processlogout() {


            redirect('login');
        }
    }
    
    /* End of file Login.php */
    