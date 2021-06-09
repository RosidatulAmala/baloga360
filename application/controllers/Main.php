<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Main extends CI_Controller {
    
        function __construct(){

            parent::__construct();
            
            $this->load->model('M_gallery');
        }

        public function index(){
            
            $data = array(

                'title' => "Halaman Utama | Baloga",

                'namemodule'    => "main",
                'namefileview'  => "V_halaman_utama"
            );
            $this->load->view('template/template_frontend', $data);
        }















        // fasilitas tour
        function tour() {

            $this->load->model('M_scene');
            $dataScene = $this->M_scene->model_tampilscene();
            $allScene = $this->M_scene->model_allscene();

            if ( count($dataScene) > 0 ) {


                // tampil di frame
                $id_scene_info = 0;
                foreach ( $dataScene AS $row ) {

                    $id_scene_info = $row['info_scene']['id_scene_info'];
                    break;
                }




                // change scene info
                $scene = $this->input->get('scene');
                if ( $scene ) {

                    $id_scene_info = $scene;
                }




                $key = ['id_scene_info' => $id_scene_info];
                $dataScene = $this->M_scene->model_tampilscene( $key );
                // $dataSpot  = $this->M_spot->model_tampilspot();

                $dataSceneDetail = $this->M_scene->getDataSceneDetail( $id_scene_info );



                // scene info default



                $data = array(

                    'title' => "Tour | Batu Love Garden",

                    'namemodule'    => "main",
                    'namefileview'  => "V_halaman_fasilitas",

                    'scene' => $dataScene[0],
                    'id_scene_info' => $id_scene_info,

                    'scene_detail' => $dataSceneDetail,
                    // 'all_scene'    => $allScene

                    'all_scene_created' => $this->M_scene->model_scene_info()
                    
                );

                // print_r( $data['scene'] );
                $this->load->view('template/template_frontend', $data);
            } else {

                echo 'fasilitas belum siap';
            }
        }














        // fasilitas galeri
        function gallery( $id = null ) {


            if ( $id ) {

                $this->gallery_detail( $id );

            } else {


                $where = ['status_ditampilkan' => "iya"];
                $data = array(

                    'title'         => "Halaman Galeri Baloga",

                    'namemodule'    => "main",
                    'namefileview'  => "V_halaman_gallery",

                    'gallery'   => $this->M_gallery->model_tampilgaleri( $where )
                );
                $this->load->view('template/template_frontend', $data);
            }
        }


        // gallery detail
        function gallery_detail( $id ) {

            $dataGallery = $this->M_gallery->model_tampilgalleryById( $id );


            if ( $dataGallery->num_rows() > 0 ) {

                $where = ['status_ditampilkan' => "iya"];

                $data = array(

                    'title'         => "Halaman Galeri Baloga Detail",
    
                    'namemodule'    => "main",
                    'namefileview'  => "V_halaman_gallery_detail",
    
                    'gallery'   => $dataGallery->row_array(),
                    'gallery_all'   => $this->M_gallery->model_tampilgaleri( $where )
                );
                $this->load->view('template/template_frontend', $data);
            } else {

                // id random tidak diizinkan
                show_404();
            }
        }














        // fasilitas profile
        function profile() {

            $data = array(

                'title'         => "Profile Baloga",

                'namemodule'    => "main",
                'namefileview'  => "V_halaman_profile",
            );
            $this->load->view('template/template_frontend', $data);
        }


        // profile message
        function message() {

            $this->load->model('M_message');
            $this->M_message->model_prosestambah();
        }
    
    }
    
    /* End of file Main.php */
    