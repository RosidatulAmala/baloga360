<?php 

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_scene extends CI_Model {
        

        // menampilkan data spot pariwisata
        function model_tampilscene( $key = null ) {

            if ( $key ) {

                $dataScene_info = $this->db->where( $key );
            }

            $dataScene_info = $this->db->get('scene_info');
            
            $data = array();
            if ( $dataScene_info->num_rows() > 0 ) {

                
                foreach ( $dataScene_info->result_array() AS $rowInfo ) {

                    // load default
                    $default = "";

                    // data scene detail
                    $where_detail     = ['id_scene_info' => $rowInfo['id_scene_info']];
                    $dataSceneDetail  = array();


                    $this->db->select('scene_detail.*, spot.*')->from('scene_detail');
                    $this->db->join('spot', 'spot.id_spot = scene_detail.id_spot');

                    $this->db->where($where_detail);
                    $dataScene_detail = $this->db->get();

                    // scene
                    if ( $dataScene_detail->num_rows() > 0 ) {

                        
                        foreach ( $dataScene_detail->result_array() AS $rowSD ) {
                            
                            $coords = array();
                            $scenecoords = $this->db->get_where('scene_coords', ['id_scene_detail' => $rowSD['id_scene_detail']] );
                            
                            if ( $rowSD['scene_default'] == "iya" ) {

                                $default = $rowSD['id_scene_detail'];
                            }
                            
                            // push
                            array_push( $dataSceneDetail, array(

                                'detail'   => $rowSD,
                                'coords'   => $scenecoords->result_array()
                            ));
                        }
                    }














                    array_push( $data, array(

                        'info_scene'    => $rowInfo,
                        'info_detail'   => $dataSceneDetail,
                        'default'       => $default
                    ) );
                }
            }


            return $data;
        }


        
        function insertDataSceneInfo(){

            $data = array(

                'author'            => $this->input->post('author'),
                'scene_rotate'      => $this->input->post('rotation'),
                'scene_fade_duration' => $this->input->post('fade'),
                'scene_autoload'      => $this->input->post('autoload'),
                'scene_status'        => $this->input->post('status'),
            );


            // pemberitahuan
            $html = $this->pesan( "Menambahkan scene baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // execute query insert
            $this->db->insert('scene_info', $data);


            // redirect
            redirect('scene');
        }




        // ubah setting default scene
        function updateDefaultDataScene( $id_scene_info ) {

            // ubah settingan "scene_default" menjadi "tidak"
            $this->db->where('id_scene_info', $id_scene_info)->update('scene_detail', ['scene_default' => "tidak"]);

            $newSetting = array(

                'scene_default' => "iya"
            );

            $kondisiUpdate = array(

                'id_scene_info' => $id_scene_info,
                'id_spot'       => $this->input->post('id_spot')
            );
            $this->db->where( $kondisiUpdate )->update('scene_detail', ['scene_default' => "iya"]);
            
            // redirect
            redirect('scene/composition/'. $id_scene_info);

        }



        function model_updatescene( $id_scene_info ) {


            $data = array(

                'author'            => $this->input->post('author'),
                'scene_rotate'      => $this->input->post('rotation'),
                'scene_fade_duration' => $this->input->post('fade'),
                'scene_autoload'      => $this->input->post('autoload'),
                'scene_status'        => $this->input->post('status'),
            );


            // pemberitahuan
            $html = $this->pesan( "Menyunting scene baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // execute query update
            $this->db->where('id_scene_info', $id_scene_info);
            $this->db->update('scene_info', $data);


            // redirect
            redirect('scene');
        }




         // proses hapus
         function model_hapusscene( $id_scene_info ) {


            $getDataSceneDetail = $this->db->get_where('scene_detail', ['id_scene_info' => $id_scene_info])->row_array();
            $id_scene_detail = $getDataSceneDetail['id_scene_detail'];

            // coords
            $this->db->where('id_scene_detail', $id_scene_detail);
            $this->db->delete('scene_coords');

            // details
            $this->db->where('id_scene_detail', $id_scene_detail);
            $this->db->delete('scene_detail');



            // hapus parent
            $this->db->where('id_scene_info', $id_scene_info);
            $this->db->delete('scene_info');


            // pemberitahuan
            $html = $this->pesan( "Hapus scene baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // redirect
            redirect('scene');
        }












        /** 
         *  
         *   Detail Scene
         * 
         */


        function getDataSceneDetail( $id_scene_info ) {

            $this->db->select('scene_detail.*, spot.*')->from('scene_detail')->join('spot', 'spot.id_spot = scene_detail.id_spot');
            $this->db->where('id_scene_info', $id_scene_info);

            $query = $this->db->get();
            return $query;
        }



        // scene detail
        function getDataSceneDetailById( $id_scene_detail ) {

            $this->db->select('scene_detail.*, spot.*')->from('scene_detail')->join('spot', 'spot.id_spot = scene_detail.id_spot');
            $this->db->where('id_scene_detail', $id_scene_detail);

            $query = $this->db->get();
            return $query;
        }




        // get data scene coords
        function getDataSceneCoords( $id_scene_detail ) {

            $this->db->select('scene_detail.*, scene_coords.*, spot.*')->from('scene_coords');
            $this->db->join('scene_detail', 'scene_detail.id_scene_detail = scene_coords.id_scene_detail', 'LEFT');
            $this->db->join('spot', 'spot.id_spot = scene_detail.id_spot', 'LEFT');

            $this->db->where(['scene_coords.id_scene_detail' => $id_scene_detail]);
            return $this->db->get();

            // return $this->db->get_where('scene_coords', ['id_scene_detail' => $id_scene_detail]);
        }
        

        function insertDataSceneDetail( $id_scene_info ) {

            
            $scene_default = $this->input->post('default');

            // perubahan default scene apabila : iya
            if ( $scene_default == "iya" ) {

                $where = ['scene_default' => "iya"];
                $this->db->where( $where );
                $dataSceneDetail = $this->db->get('scene_detail');

                if ( $dataSceneDetail->num_rows() == 1 ) {

                    $id_scene_detail = $dataSceneDetail->row()->id_scene_detail;
                    $this->db->where('id_scene_detail', $id_scene_detail)->update('scene_detail', ['scene_default' => "tidak"]);
                }
            }

            
            $data = array(

                'id_scene_info' => $id_scene_info,
                'id_spot'       => $this->input->post('id_spot'),
                'scene_default' => $scene_default,
            );

            // pemberitahuan
            $html = $this->pesan( "Menambahkan scene baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // execute query insert
            $this->db->insert('scene_detail', $data);


            // redirect
            redirect('scene/composition/'. $id_scene_info);
            
        }



        // delete detail scene
        function deleteDataSceneDetail( $id_scene_info, $id_scene_detail ) {

            
            $this->db->where('id_scene_detail', $id_scene_detail)->delete('scene_coords');
            $this->db->where('id_scene_detail', $id_scene_detail)->delete('scene_detail');

            // pemberitahuan
            $html = $this->pesan( "Hapus scene baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);
  
 
            // redirect
            redirect('scene/composition/'. $id_scene_info);
        }







        // coords
        function model_prosesinsertdatacoord( $id_scene_info, $id_scene_detail ) {

            $data = array(

                'id_scene_detail'   => $id_scene_detail,
                'pitch' => $this->input->post('pitch'),
                'yaw'   => $this->input->post('yaw'),
                'type'  => $this->input->post('tipe'),
                'description'   => $this->input->post('kt-tinymce-2'),
                'scene_anchor'  => $this->input->post('id_spot'),
            );


            // pemberitahuan
            $html = $this->pesan( "Menambahkan scene baloga 360 berhasil" );
            $this->session->set_flashdata('msg', $html);


            // execute query insert
            $this->db->insert('scene_coords', $data);


            // redirect
            redirect('scene/builder/'. $id_scene_info.'/'. $id_scene_detail);
        }




        // delete
        function model_prosesdeletedatacoord( $id_scene_info, $id_scene_detail, $id_scene_coords ) {

            $this->db->where('id_scene_coords', $id_scene_coords)->delete('scene_coords');

            // redirect
            redirect('scene/builder/'. $id_scene_info.'/'. $id_scene_detail);
        }



        // end detail scene










        // alert pesan
        function pesan( $pesan ) {

            $html = '<div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon">
                            <span class="svg-icon svg-icon-primary svg-icon-xl">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                        <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <div class="alert-text"><b>Pemberitahuan</b> '.$pesan.'</div>
                    </div>';

            return $html;

        }
    
    }
    
    /* End of file M_scene.php */
    