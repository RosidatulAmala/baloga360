<!-- wrapper-->
<div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="parallax-section single-par" data-scrollax-parent="true">
                        <div class="bg par-elem "  data-bg="<?php echo base_url() ?>assets/front-user/images/bg/35.jpg" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="overlay op7"></div>
                        <div class="container">
                            <div class="section-title center-align big-title">
                                <h2><span>Galeri Batu Love Garden</span></h2>
                                <span class="section-separator"></span>
                                <div class="breadcrumbs fl-wrap">
                                <a href="<?php echo base_url() ?>">Halaman Utama</a>
                                <span>Galeri Baloga</span></div>
                            </div>
                        </div>
                        <div class="header-sec-link">
                            <a href="#sec1" class="custom-scroll-link"><i class="fal fa-angle-double-down"></i></a> 
                        </div>
                    </section>
                    <!--  section  end-->
                    <section class="gray-bg small-padding no-top-padding-sec" id="sec1">
                        <div class="container">
                            
                            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                            <div class="fl-wrap">
                                
                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                                    <?php foreach ( $gallery->result_array() AS $row ) : ?>
                                    
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">

                                                <?php
                                                
                                                    $img = base_url('assets/img/baloga-gallery/'. $row['photo']);
                                                ?>

                                                <a href="<?php echo $img ?>" class="geodir-category-img-wrap fl-wrap image-popup">
                                                <img src="<?php echo $img ?>" alt="<?php echo $row['name'] ?>" style="width: 100%; height: 200px"> 
                                                </a>
                                            </div>
                                            <div class="geodir-category-content fl-wrap title-sin_item">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="<?php echo base_url('main/gallery/'. $row['id_gallery']) ?>"><?php echo $row['name'] ?></a></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="<?php echo base_url('main/gallery/'. $row['id_gallery']) ?>"><?php echo $row['caption'] ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <!-- listing-item end -->     



                                    <?php endforeach; ?>                                                                                  
                                </div>
                                <!-- listing-item-container end -->
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->