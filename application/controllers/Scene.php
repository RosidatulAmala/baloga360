<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Scene extends CI_Controller {
        

        function __construct(){
            
            parent::__construct();

            // load model
            $this->load->model('M_scene');
            $this->load->model('M_spot');
        }

        public function index(){

            $dataScene = $this->M_scene->model_tampilscene();
            
            $tampilView = array(

                'namemodule'    => "scene",
                'namefileview'  => "V_scene",

                'scene' => $dataScene
            );
            $this->load->view('template/template_backend', $tampilView);
        }







        // represent output visual
        function iframepanorama( $id_scene_info ) {


            $where = ['id_scene_info' => $id_scene_info];
            $data['scene'] = $this->M_scene->model_tampilscene( $where )[0];

            // print_r( $data['scene'] );

            $this->load->view('scene/V_scene_representation', $data);
        }







        // tambah scene baru 
        function tambah() {

            $tampilView = array(

                'namemodule'    => "scene",
                'namefileview'  => "V_scene_info_tambah",
            );
            $this->load->view('template/template_backend', $tampilView); 
        }



        // proses tambah scene
        function prosestambahscene() {

            $this->M_scene->insertDataSceneInfo();
        }



        // hapus
        function hapus( $id_scene_info ) {

            $this->M_scene->model_hapusscene( $id_scene_info );
        }




        // view edit
        function edit( $id_scene_info = null ) {

            if ( $id_scene_info ) {

                $key = ['id_scene_info' => $id_scene_info];
                $dataScene = $this->M_scene->model_tampilscene( $key );

                if ( count($dataScene) > 0 ) {

                    
                    $tampilView = array(

                        'namemodule'    => "scene",
                        'namefileview'  => "V_scene_info_update",
                        'scene' => $dataScene[0]
                    );
                    $this->load->view('template/template_backend', $tampilView); 
                }

            } else {

                show_404();
            }
        }


        // update
        function update( $id_scene_info ){

            $this->M_scene->model_updatescene( $id_scene_info );
        }
























        // tambah scene detail
        function composition( $id_scene_info = null ) {

            if ( $id_scene_info ) {

                $key = ['id_scene_info' => $id_scene_info];
                $dataScene = $this->M_scene->model_tampilscene( $key );
                $dataSpot  = $this->M_spot->model_tampilspot();

                $dataSceneDetail = $this->M_scene->getDataSceneDetail( $id_scene_info );

                if ( count($dataScene) > 0 ) {

                    $tampilView = array(

                        'namemodule'    => "scene",
                        'namefileview'  => "V_scene_detail",
                        
                        'scene' => $dataScene[0],
                        'spot'  => $dataSpot,
                        'id_scene_info' => $id_scene_info,

                        'scene_detail' => $dataSceneDetail

                    );
                    $this->load->view('template/template_backend', $tampilView); 
                }
                
            } else {

                show_404();
            }
        }











        // tambah detail scene
        function tambah_detail_scene( $id_scene_info ) {

            $this->M_scene->insertDataSceneDetail( $id_scene_info );
        }



        // hapus detail scene
        function hapus_detail_scene( $id_scene_info, $id_scene_detail ) {

            $this->M_scene->deleteDataSceneDetail( $id_scene_info, $id_scene_detail );
        }




        // ubah setting an default utama
        function sunting_detail_scene( $id_scene_info ) {

            $this->M_scene->updateDefaultDataScene( $id_scene_info );
        }








        // tambah coords scene
        function builder( $id_scene_info = null, $id_scene_detail = null ) {

            if ( $id_scene_info && $id_scene_detail ) {

                $key = ['id_scene_info' => $id_scene_info];
                $dataScene = $this->M_scene->model_tampilscene( $key );
                $dataSpot  = $this->M_scene->getDataSceneDetail( $id_scene_info );

                $dataSceneDetail = $this->M_scene->getDataSceneDetailById( $id_scene_detail );
                $dataSceneCoords = $this->M_scene->getDataSceneCoords( $id_scene_detail );
                
                // cek apakah scene id valid
                if ( count($dataScene) > 0 ) {

                    $tampilView = array(

                        'namemodule'    => "scene",
                        'namefileview'  => "V_scene_coords_index",
                        
                        'scene' => $dataScene[0],
                        'spot'  => $dataSpot,
                        'id_scene_info'     => $id_scene_info,
                        'id_scene_detail'   => $id_scene_detail,

                        'scene_detail' => $dataSceneDetail->row_array(),
                        'scene_coords' => $dataSceneCoords

                    );

                    $this->load->view('template/template_backend', $tampilView); 
                }
                
            } else {

                show_404();
            }
        }


        




        // proses tambah coords
        function prosestambahcoords( $id_scene_info, $id_scene_detail ) {

            $this->M_scene->model_prosesinsertdatacoord( $id_scene_info, $id_scene_detail );
        }



        function proseshapuscoords( $id_scene_info, $id_scene_detail, $id_scene_coords ) {

            $this->M_scene->model_prosesdeletedatacoord( $id_scene_info, $id_scene_detail, $id_scene_coords );
        }

    
    }
    
    /* End of file Scene.php */
    