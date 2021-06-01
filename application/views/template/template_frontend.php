
<!DOCTYPE HTML>
<html lang="en">
    
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/front-user/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/front-user/css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/front-user/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/front-user/css/color.css">

        <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/front-user/css/dashboard-style.css">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/front-user/images/favicon.ico">



        <script src="<?php echo base_url() ?>assets/front-user/js/jquery.min.js"></script>



        <!-- Plugins -->
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/modal-cross/prowl.css') ?>" />
        

        <style>
        
            .text-main{

                color: #616161 
            }

            .text-muted{

                color: #9e9e9e;
            }

            .text-center{

                text-align: center;
            }



            /* alert */
            .alert{

                padding: 16px;
                border-radius: 5px;
                margin-bottom: 32px; 
                text-align: left;
            }


            /* Alert Danger */
            .alert-danger{

                background-color: #ffebee; 
                border: 1px solid #ffcdd2;
                color: #b71c1c;
            }


            /* Alert Success */
            .alert-success{

                background-color: #e8f5e9; 
                border: 1px solid #c8e6c9;
                color: #33691e;
            }
            
            /* Alert Warning */
            .alert-warning{

                background-color: #fffde7; 
                border: 1px solid #ffe082;
                color: #ff9800;
            }

        </style>
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <!-- header -->
            <header class="main-header">
                <!-- logo-->
                <a href="index.html" class="logo-holder">
                    <!-- <img src="https://jtp.id/batulovegarden/images/logo_wahana.png" alt="" style="width: 75px; height: auto"> -->
                </a>
                <!-- logo end-->

                
                <a href="<?php echo base_url('find') ?>" class="add-list color-bg">Tour Baloga <span><i class="fal fa-layer-plus"></i></span></a>
                
                <!-- header opt end--> 

                <!-- header opt --> 
                <div class="header-user-menu">
                    <div class="header-user-name">
                        <span><img src="<?php echo base_url('assets/img/component/animation_500_ko74t4ep.gif') ?>" alt=""></span>
                        Halo Selamat Datang
                    </div>
                    <ul>
                        <li><a href="<?php echo base_url('user/profile') ?>"> Profile Saya</a></li>
                        <li><a href="dashboard-review.html"> Reviews </a></li>
                        <li><a href="<?php echo base_url('login/processlogout') ?>">Log Out</a></li>
                    </ul>
                </div>
                <!-- header opt end-->
                
                <!-- nav-button-wrap--> 
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  navigation --> 
                <div class="nav-holder main-menu">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a href="<?php echo base_url() ?>" class="act-link">Halaman Utama</a>
                            </li>
                            <li>
                                <a href="#">Fasilitas</a>
                            </li>
                            <li>
                                <a href="#">Galeri</a>
                            </li>
                            <li>
                                <a href="blog.html">Profil </a>
                            </li>
                            <li>
                                <a href="blog.html">FAQ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
               
            </header>
            <!-- header end-->







            <?php 

                $menu = $this->uri->segment(1);

                $this->load->view( $namemodule.'/'.$namefileview );
                
            ?>






            <!--footer -->
            <footer class="main-footer fl-wrap">
                <!--footer-inner-->
                <div class="footer-inner   fl-wrap">
                    <div class="container">
                        <div class="row">
                            <!-- footer-widget-->
                            <div class="col-md-6">
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-logo"><a href="<?php echo base_url() ?>"></a>
                                        <!-- <img src="<?php echo base_url() ?>assets/front-user/images/logo.png" alt=""></a> -->
                                        <h1>Belum Ada Logo</h1>
                                    </div>
                                    <div class="footer-contacts-widget fl-wrap">
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.   </p>
                                       
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget end-->
                            <!-- footer-widget  -->
                            <div class="col-md-6">
                                <div class="footer-widget fl-wrap ">
                                    <h3>Our  Twitter</h3>
                                    <div class="footer-contacts-widget fl-wrap">
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.   </p>
                                        <ul  class="footer-contacts fl-wrap no-list-style">
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                            <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                        </ul>
                                        <div class="footer-social">
                                            <span>Find  us on: </span>
                                            <ul class="no-list-style">
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget end-->
                        </div>
                    </div>
                    <!-- footer bg-->
                    <div class="footer-bg" data-ran="4"></div>
                    <div class="footer-wave">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                        </svg>
                    </div>
                    <!-- footer bg  end-->
                </div>
                <!--footer-inner end -->
                <!--sub-footer-->
                <div class="sub-footer  fl-wrap">
                    <div class="container">
                        <div class="copyright"> &#169; Match Futsal <?php echo date('Y') ?> .  All rights reserved.</div>
                        <div class="subfooter-nav">
                            <ul class="no-list-style">
                                <li><a href="#">Terms of use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--sub-footer end -->
            </footer>
            <!--footer end -->  
            <!--map-modal -->
            <div class="map-modal-wrap">
                <div class="map-modal-wrap-overlay"></div>
                <div class="map-modal-item">
                    <div class="map-modal-container fl-wrap">
                        <div class="map-modal fl-wrap">
                            <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
                        </div>
                        <h3><span>Location for : </span><a href="#">Listing Title</a></h3>
                        <div class="map-modal-close"><i class="fal fa-times"></i></div>
                    </div>
                </div>
            </div>
            <!--map-modal end -->                
            <!--register form -->
            <div class="main-register-wrap modal">
                <div class="reg-overlay"></div>
                <div class="main-register-holder tabs-act">
                    <div class="main-register fl-wrap  modal_main">
                        <div class="main-register_title">Selamat Datang <span><strong>Futsalers</strong></span></div>
                        <div class="close-reg"><i class="fal fa-times"></i></div>
                        <ul class="tabs-menu fl-wrap no-list-style">
                            <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Masuk</a></li>
                            <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Daftar</a></li>
                        </ul>
                        <!--tabs -->                       
                        <div class="tabs-container">
                            <div class="tab">
                                <!--tab -->
                                <div id="tab-1" class="tab-content first-tab">

                                    <?php echo $this->session->flashdata('msg') ?>

                                    <div class="custom-form">
                                        
                                        <form action="<?php echo base_url('login/proseslogin') ?>" method="POST" name="registerform">
                                            <?php
                                            
                                                $username = "";

                                                if ( $this->input->get('username') ){

                                                    $username = $this->input->get('username');
                                                }
                                            ?>
                                            <label>Username <span>*</span> </label>
                                            <input name="username" type="text" onClick="this.select()" value="<?php echo $username ?>" required="">
                                            
                                            <label >Password <span>*</span> </label>
                                            <input name="password" type="password" name="password"  onClick="this.select()" required="" >
                                            <button type="submit"  class="btn float-btn color2-bg"> Log In <i class="fas fa-caret-right"></i></button>
                                            
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a3" type="checkbox" name="check">
                                                <label for="check-a3">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                                <!--tab -->
                                <div class="tab">
                                    <div id="tab-2" class="tab-content">
                                        <div class="custom-form">
                                            <form action="<?php echo base_url('register/prosesregister') ?>" method="post"  name="registerform" class="main-register-form" id="main-register-form2">
                                                <label >Nama Lengkap <span>*</span> </label>
                                                <input name="name" type="text"   onClick="this.select()" value="" placeholder="Masukkan nama lengkap">
                                                

                                                <label>Email <span>*</span></label>
                                                <input name="email" type="email" placeholder="Masukkan email aktif"  onClick="this.select()" value="" required="" />
                                                

                                                <label>Username <span>*</span></label>
                                                <input name="username" type="text" placeholder="Masukkan username aktif"  onClick="this.select()" value="" required="" />

                                                <label>Kata Sandi <span>*</span></label>
                                                <input name="password" type="password" placeholder="Masukkan kata sandi" onClick="this.select()" value="" >
                                                
                                                
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a2" type="checkbox" name="check">
                                                    <label for="check-a2">I agree to the <a href="#">Privacy Policy</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="filter-tags ft-list">
                                                    <input id="check-a" type="checkbox" name="check">
                                                    <label for="check-a">I agree to the <a href="#">Terms and Conditions</a></label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit"     class="btn float-btn color2-bg"> Register  <i class="fas fa-caret-right"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--tab end -->
                            </div>
                            <!--tabs end -->
                            <div class="wave-bg">
                                <div class='wave -one'></div>
                                <div class='wave -two'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
            <a class="to-top"><i class="fas fa-caret-up"></i></a>     
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        
        <script src="<?php echo base_url() ?>assets/front-user/js/plugins.js"></script>
        <script src="<?php echo base_url() ?>assets/front-user/js/scripts.js"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAz75BNA0oYrDLhu4MxK-yut4XzfYAeY6I&amp;libraries=places&amp;callback=initAutocomplete"></script>         -->
        
        <!-- <script src="<?php echo base_url() ?>assets/front-user/js/map-single.js"></script>              -->
        <script src="<?php echo base_url('assets/plugins/modal-cross/prowl.js') ?>"></script>
        
        <script>

            $(function() {

                <?php if ( $this->input->get('page') && $this->input->get('page') == "starter" ) : ?>
                
                $('.modal , .reg-overlay').fadeIn(200);
                $(".modal_main").addClass("vis_mr");
                $("html, body").addClass("hid-body");
                
                <?php endif; ?>


                $('.close-reg , .reg-overlay').on("click", function () {
                    modal.hide();
                });
            })
        
        </script>             
    </body>

</html>