<!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
                    

                        <iframe src="<?php echo base_url('scene/iframepanorama/'. $id_scene_info) ?>    " style="width: 100%; height: 500px" frameborder="0"></iframe>
                        
                    
                    <!-- Map end -->  
                    <div class="clearfix"></div>
                    <section class="gray-bg small-padding no-top-padding-sec">
                        <div class="container">
                            <!-- list-main-wrap-header-->
                            <div class="list-main-wrap-header fl-wrap   block_box no-vis-shadow no-bg-header fixed-listing-header">
                                <!-- list-main-wrap-title-->
                                <div class="list-main-wrap-title">
                                    <h2><span>Tour Baloga</span></h2>
                                </div>
                                <!-- list-main-wrap-title end-->
                                <!-- list-main-wrap-opt-->
                                <div class="list-main-wrap-opt">
                                    <!-- price-opt end-->
                                    <!-- price-opt-->
                                    <div class="grid-opt">
                                        <ul class="no-list-style">
                                            <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                            <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                                        </ul>
                                    </div>
                                    <!-- price-opt end-->
                                </div>
                            </div>
                            <!-- list-main-wrap-header end-->   
                            <div class="fl-wrap">
                                <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search ntm fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
                                <div class="mob-nav-content-btn mncb_half color2-bg schm ntm fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
                               
                                <!-- listing-item-container -->
                                <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic three-columns-grid">
                                    
                                    
                                    <?php foreach ( $all_scene_created AS $scene ) : ?>
                                    <!-- listing-item  -->
                                    <div class="listing-item">
                                        <article class="geodir-category-listing fl-wrap">
                                            <div class="geodir-category-img">
                                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                                <a href="<?php echo base_url('main/tour?scene='. $scene['info']['id_scene_info']) ?>" class="geodir-category-img-wrap fl-wrap">
                                                <?php
                                                    
                                                    // if (  )
                                                    // print_r( $scene['detail'] );
                                                    $scene_detail = $scene['detail'][0];

                                                    $spot_item = base_url('assets/img/baloga-spot/'. $scene_detail['foto']);
                                                ?>
                                                
                                                <img src="<?php echo $spot_item ?>" alt=""> 
                                                </a>
                                                <div class="listing-avatar"><a href="author-single.html"><img src="<?php echo base_url('assets/img/component/animation_500_ko74t4ep.gif') ?>" alt=""></a>
                                                    <span class="avatar-tooltip">Add by  <strong>Admin Baloga</strong></span>
                                                </div>
                                                <?php
                                                
                                                    $status = "";
                                                    $status_text = "";
                                                    $status_icon = "";
                                                    if ( $scene_detail['status_ditampilkan'] == "iya" ) {

                                                        $status = "open";
                                                        $status_text = "Tersedia";
                                                        $status_icon = "-open";
                                                    } else {

                                                        $status = "close";
                                                        $status_text = "Tidak Tersedia";
                                                    }
                                                ?>
                                                <div class="geodir_status_date gsd_<?php echo $status ?>"><i class="fal fa-lock<?php echo $status_icon ?>"></i><?php echo $status_text ?></div>
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating-count-wrap">
                                                        <div class="review-score">4.8</div>
                                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                        <br>
                                                        <div class="reviews-count">12 reviews</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="geodir-category-content fl-wrap">
                                                <div class="geodir-category-content-title fl-wrap">
                                                    <div class="geodir-category-content-title-item">
                                                        <h3 class="title-sin_map"><a href="listing-single.html"><?php echo $scene_detail['nama'] ?></a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                                        <div class="geodir-category-location fl-wrap"><a href="#1" class="map-item"><i class="fas fa-map-marker-alt"></i> Dibuat pada <?php echo date('d F Y H.i A', strtotime( $scene_detail['created_at'] )) ?></a></div>
                                                    </div>
                                                </div>
                                                <div class="geodir-category-text fl-wrap">
                                                    <p class="small-text"><?php
                                                    
                                                        $text = "";

                                                        if ( strlen($scene_detail['deskripsi']) > 200 ) {

                                                            $text = substr($scene_detail['deskripsi'], 0, 200). '..';
                                                        } else {

                                                            $text = $scene_detail['deskripsi'];
                                                        }

                                                        echo $text;
                                                    
                                                    ?>.</p>
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


            <script>
            
            function autoResize(iframe) {
                // $(iframe).height($(iframe).contents().find('html').height());
            }
            
            </script>