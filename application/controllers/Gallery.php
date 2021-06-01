<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Gallery extends CI_Controller {
        

        function __construct(){
            
            parent::__construct();

            // load model
            $this->load->model('M_gallery');
        }

        public function index(){
            
            $tampilView = array(

                'namemodule'    => "gallery",
                'namefileview'  => "V_gallery",

                'gallery'    => $this->M_gallery->model_tampilgaleri()
            );
            $this->load->view('template/template_backend', $tampilView);
        }




        // tambah
        function tambah() {

            $tampilView = array(

                'namemodule'    => "gallery",
                'namefileview'  => "V_gallery_tambah"
            );  
            $this->load->view('template/template_backend', $tampilView);
        }



        // proses tambah
        function prosestambah() {

            $this->M_gallery->model_tambahgaleri();
        }




        // view edit
        function edit( $id_gallery = null ) {

            if ( $id_gallery ) {

                $tampilView = array(

                    'namemodule'    => "gallery",
                    'namefileview'  => "V_gallery_edit",
    
                    'gallery'    => $this->M_gallery->model_tampilgalleryById( $id_gallery )->row_array()
                );
                $this->load->view('template/template_backend', $tampilView);


            } else {

                show_404();
            }
        }


        // proses edit
        function prosesedit(){

            $this->M_gallery->model_prosesedit();
        }



        // hapus
        function hapus( $id_gallery ) {

            $this->M_gallery->model_hapus( $id_gallery );
        }
    
    }
    
    /* End of file Gallery.php */
    