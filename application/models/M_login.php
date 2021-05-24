<?php 


    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class M_login extends CI_Model {
    
        
        // get query profile
        function getDataProfile( $username ) {

            $query = "SELECT * FROM profile WHERE username = '$username'";
            
            // eksekusi
            return $this->db->query( $query );
        }
    }
    
    /* End of file M_login.php */
    