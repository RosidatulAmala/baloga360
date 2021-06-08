<!-- wrapper-->
<div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="https://nusadaily.com/wp-content/uploads/2020/12/IMG-20201217-WA0000.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Profile Batu Love Garden</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap"><a href="<?php echo base_url() ?>">Halaman Utama</a>
                                <span>Tentang Profile Baloga</span></div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->               
                    <!--  section  -->
                    <section   id="sec1" data-scrollax-parent="true">
                        <div class="container">
                            <!--about-wrap -->
                            <div class="about-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ab_text-title fl-wrap">
                                            <h3>Kontak</h3>
                                            <span class="section-separator fl-sec-sep"></span>
                                        </div>
                                        <!--box-widget-item -->                                       
                                        <div class="box-widget-item fl-wrap block_box">
                                            <div class="box-widget">
                                                <div class="box-widget-content bwc-nopad">
                                                    <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                                        <ul class="no-list-style">
                                                            <li><span><i class="fal fa-map-marker"></i> Alamat :</span> <a href="#singleMap" class="custom-scroll-link">Jl. Raya Pandanrejo No.91, Pandanrejo, Kec. Bumiaji, Kota Batu, Jawa Timur 65332</a></li>
                                                            <li><span><i class="fal fa-phone"></i> Telepon :</span> <a href="#">(0341) 532888</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                                        <ul class="no-list-style">
                                                            <li><a href="https://www.facebook.com/balogaofficial/" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                                            <li><a href="https://www.instagram.com/balogaofficial/" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->  
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap" style="margin-top:20px;">
                                            <div class="banner-wdget fl-wrap">
                                                <div class="overlay op4"></div>
                                                <div class="bg"  data-bg="https://media.istockphoto.com/vectors/virtual-tour-vector-illustration-360-round-symbol-flat-tiny-person-vector-id1219076334?b=1&k=6&m=1219076334&s=612x612&w=0&h=ViBznuxSVw0KTV1bPUAb0Z9wJvauLUEYBteSSfRahls="></div>
                                                <div class="banner-wdget-content fl-wrap">
                                                    <h4>Penasaran tentang Batu Love Garden ? Yuk kita telusuri.</h4>
                                                    <a href="<?php echo base_url('main/tour') ?>" class="color-bg" > Tour Sekarang</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                                            
                                    </div>
                                    <div class="col-md-8">
                                        <div class="ab_text">
                                            <div class="ab_text-title fl-wrap">
                                                <h3>Hubungi Kami</h3>
                                                <span class="section-separator fl-sec-sep"></span>
                                            </div>
                                            <p>Batu Love Garden (BALOGA) merupakan one stop point yang menghadirkan berbagai jenis tanaman dalam berbagai wahana rekreasi. Setiap pengunjung akan disuguhkan dengan hawa sejuk Kota Batu serta hamparan luas kebun dan taman bunga. tidak hanya berhenti disitu BALOGA sebagai salah satu bagian dari Jawa Timur Park Group tetap mengusung konsep edukasi secara langsung maupun tidak langsung pada setiap pengunjung.</p>
                                            
                                            <?php echo $this->session->flashdata('msg') ?>
                                            
                                            <div id="contact-form">
                                                <div id="message"></div>
                                                <form  class="custom-form" action="<?php echo base_url('main/message') ?>" name="contactform" id="" method="POST">
                                                    <fieldset>
                                                        <label><i class="fal fa-user"></i></label>
                                                        <input type="text" name="name" id="name" placeholder="Your Name *" value="" required="" />
                                                        <div class="clearfix"></div>
                                                        <label><i class="fal fa-envelope"></i>  </label>
                                                        <input type="text"  name="email" id="email" placeholder="Email Address*" value="" required=""/>
                                                        <textarea name="comments"  id="comments" cols="40" rows="3" placeholder="Your Message:" required="" ></textarea>
                                                    </fieldset>
                                                    <button class="btn float-btn color2-bg" id="submit">Kirim Pesan<i class="fal fa-paper-plane"></i></button>
                                                </form>
                                            </div>
                                            <!-- contact form  end--> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- about-wrap end  --> 
                        </div>
                    </section>
                    <section class="no-padding-section">
                        <div class="map-container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.189080358217!2d112.5428419!3d-7.8639275!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc912577baebd778d!2sBatu%20Love%20Garden%20-%20BALOGA!5e0!3m2!1sen!2sid!4v1623049195100!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </section>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->