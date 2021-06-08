<!-- wrapper-->
<div id="wrapper">
                <!-- content-->
                <div class="content">
                    <section class="gray-bg no-top-padding-sec" id="sec1">
                        <div class="container">
                            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="<?php echo base_url() ?>">Halaman Utama</a><a href="<?php echo base_url('main/gallery') ?>">Galeri</a> <span>Info <?php echo $gallery['name'] ?></span> 
                                
                                
                                <div class="brd-show-share color2-bg">
                                    <a style="color: #f5f5f5" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo base_url('main/gallery/'. $gallery['id_gallery']) ?>">
                                        <i class="fas fa-share"></i> Bagikan 
                                    </a>
                                </div>

                            </div>
                            <div class="share-holder hid-share sing-page-share top_sing-page-share">
                                <div class="share-container  isShare"></div>
                            </div>
                            <div class="post-container fl-wrap">
                                <div class="row">
                                    <!-- blog content-->
                                    <div class="col-md-8">
                                        <!-- article> --> 
                                        <article class="post-article single-post-article">
                                            <div class="list-single-main-media fl-wrap">
                                                <div class="single-slider-wrap">
                                                    <div class="single-slider fl-wrap">
                                                        <div class="">
                                                            <div class="lightgallery">
                                                                <?php

                                                                    $img = "https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png";
                                                                    if ( $gallery['photo'] ) {

                                                                        $img = base_url('assets/img/baloga-gallery/'. $gallery['photo']);
                                                                    }
                                                                
                                                                ?>
                                                                <img src="<?php echo $img ?>" alt="<?php echo $gallery['name'] ?>"><a href="<?php echo $img ?>" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="listing-carousel_pagination">
                                                        <div class="listing-carousel_pagination-wrap">
                                                            <div class="ss-slider-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="list-single-main-item fl-wrap block_box">
                                                <h2 class="post-opt-title"><a href="blog-single.html"><?php echo $gallery['name'] ?>.</a></h2>
                                                <div class="post-author"><a href="#"><img src="<?php echo base_url('assets/img/component/animation_500_ko74t4ep.gif') ?>" alt=""><span>By , Admin Baloga</span></a></div>
                                                <div class="post-opt">
                                                    <ul class="no-list-style">
                                                        <li><i class="fal fa-calendar"></i> <span><?php echo date('d F Y', strtotime($gallery['created_at'])) ?></span></li>
                                                    </ul>
                                                </div>
                                                <span class="fw-separator"></span> 
                                                <div class="clearfix"></div>
                                                <?php echo $gallery['description'] ?>
                                                <span class="fw-separator"></span> 
                                                <div class="list-single-tags tags-stylwrap">
                                                    <span class="tags-title"><i class="fas fa-tag"></i> Tags : </span>
                                                    <a href="#">Baloga</a>
                                                    <a href="#">Pariwisata</a>
                                                    <a href="#">Indonesia</a>
                                                </div>
                                            </div>
                                        </article>
                                        <!-- article end --> 
                                                                                                      
                                    </div>
                                    <!-- blog conten end-->
                                    <!-- blog sidebar -->
                                    <div class="col-md-4">
                                        <div class="box-widget-wrap fl-wrap fixed-bar">
                                            
                                            <!--box-widget-item -->
                                            <div class="box-widget-item fl-wrap block_box">
                                                <div class="box-widget-item-header">
                                                    <h3>Galeri yang lain</h3>
                                                </div>
                                                <div class="box-widget  fl-wrap">
                                                    <div class="box-widget-content">
                                                        <!--widget-posts-->
                                                        <div class="widget-posts  fl-wrap">
                                                            <ul class="no-list-style">
                                                                
                                                                <?php $no = 0; foreach ( $gallery_all->result_array() as $row ) : if ( $no > 5 ) break;  $no++;
                                                                
                                                                
                                                                    $img_recommend = "https://pertaniansehat.com/v01/wp-content/uploads/2015/08/default-placeholder.png";
                                                                    if ( $row['photo'] ) {

                                                                        $img_recommend = base_url('assets/img/baloga-gallery/'. $row['photo']);
                                                                    }


                                                                    if ( $row['id_gallery'] != $gallery['id_gallery'] ) {
                                                                ?>
                                                                <li>
                                                                    <div class="widget-posts-img"><a href="<?php echo base_url('main/gallery/'. $row['id_gallery']) ?>"><img src="<?php echo $img_recommend ?>" alt=""></a></div>
                                                                    <div class="widget-posts-descr">
                                                                        <h4><a href="<?php echo base_url('main/gallery/'. $row['id_gallery']) ?>"><?php echo $row['name'] ?></a></h4>
                                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fal fa-calendar"></i> <?php echo date('d F Y', strtotime( $row['created_at'] )) ?></a></div>
                                                                    </div>
                                                                </li>
                                                                <?php } endforeach; ?>
                                                            </ul>
                                                        </div>
                                                        <!-- widget-posts end-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--box-widget-item end -->                                     
                                            <!--box-widget-item -->
                                            <div class="box-widget-item fl-wrap">
                                                <div class="banner-wdget fl-wrap">
                                                    <div class="overlay"></div>
                                                    <div class="bg"  data-bg="https://media.istockphoto.com/vectors/virtual-tour-vector-illustration-360-round-symbol-flat-tiny-person-vector-id1219076334?b=1&k=6&m=1219076334&s=612x612&w=0&h=ViBznuxSVw0KTV1bPUAb0Z9wJvauLUEYBteSSfRahls="></div>
                                                    <div class="banner-wdget-content fl-wrap">
                                                        <h4>Penasaran tentang Batu Love Garden ? Yuk kita telusuri.</h4>
                                                        <a href="<?php echo base_url('main/tour') ?>" class="custom-scroll-link color-bg" > Tour Sekarang</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--box-widget-item end -->                          
                                        </div>
                                    </div>
                                    <!-- blog sidebar end -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->