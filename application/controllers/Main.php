<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Main extends CI_Controller {
    
        function __construct(){

            parent::__construct();
            
        }

        public function index(){
            
            $data = array(

                'namemodule'    => "main",
                'namefileview'  => "V_halaman_utama"
            );
            $this->load->view('template/template_frontend', $data);
        }















        // fasilitas tour
        function tour() {

            $this->load->model('M_scene');
            $dataScene = $this->M_scene->model_tampilscene();

            if ( count($dataScene) > 0 ) {


                $id_scene_info = 0;
                foreach ( $dataScene AS $row ) {

                    $id_scene_info = $row['info_scene']['id_scene_info'];
                    break;
                }


                $key = ['id_scene_info' => $id_scene_info];
                $dataScene = $this->M_scene->model_tampilscene( $key );
                // $dataSpot  = $this->M_spot->model_tampilspot();

                $dataSceneDetail = $this->M_scene->getDataSceneDetail( $id_scene_info );


                $data = array(

                    'namemodule'    => "main",
                    'namefileview'  => "V_halaman_fasilitas",

                    'scene' => $dataScene[0],
                    'id_scene_info' => $id_scene_info,

                    'scene_detail' => $dataSceneDetail
                );
                $this->load->view('template/template_frontend', $data);
            } else {

                echo 'fasilitas belum siap';
            }
        }
    
    }
    
    /* End of file Main.php */
    