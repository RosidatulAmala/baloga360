<!--begin::Content-->
					
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Scene Spot Baloga 360</h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item text-muted">
												<a href="<?php echo base_url('dashboard') ?>" class="text-muted">Halaman Utama</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="<?php echo base_url('scene') ?>" class="text-muted">Scene Baloga</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Tambah Scene Komposisi Baloga</a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center flex-wrap">
									
									<!--begin::Dropdown-->
									<div class="dropdown dropdown-inline" data-toggle="tooltip" title="Klik untuk melihat website utama" data-placement="left">
										<a href="#" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<span class="svg-icon svg-icon-lg">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<rect fill="#000000" x="6" y="11" width="9" height="2" rx="1" />
														<rect fill="#000000" x="6" y="15" width="5" height="2" rx="1" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>
											<span class="d-none d-md-inline">Lihat Dalam 360</span>
										</a>
									</div>
									<!--end::Dropdown-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

                            <?php if ( $this->session->flashdata('msg') ) {

                                echo $this->session->flashdata('msg');
                            } else { ?>
                            <!--begin::Notice-->
                            <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                            <div class="alert-icon">
                                <span class="svg-icon svg-icon-xl svg-icon-primary">
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
                            <div class="alert-text">Semua daftar baloga yang telah disimpan akan ditampilkan pada halaman utama aplikasi Pariwisata Baloga 360
                            <a class="font-weight-bold" href="<?php echo base_url() ?>" target="_blank">klik untuk mengunjungi</a>.</div>
                            </div>
                            <!--end::Notice-->
                            <?php } ?>




                                <div class="row">
                                
                                
                                    <div class="col-md-3">
                                    
                                        <div class="form-group">
                                            <!--begin::Button-->
											<button  data-toggle="modal" data-target="#tambah-baru" type="button" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>Tambah Scene Baru</button>
											<!--end::Button-->

											<!-- Modal-->
											<div class="modal fade" id="tambah-baru" data-backdrop="static"
												tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
													<div class="modal-content">

                                                        <form action="<?php echo base_url('scene/tambah_detail_scene/'. $id_scene_info) ?>" method="POST">

														<div class="modal-body">
															<h4>Tambah Bagian Baru</h4>
                                                            <small>Masukkan form dibawah ini</small> <br><br>

                                                            <div class="form-group">
                                                                <label>Bagian Spot : </label>
                                                                <select name="id_spot" class="form-control" id="" required="">
                                                                    <option value="">Pilih salah satu</option>
                                                                    
                                                                    <?php foreach ( $spot->result_array() AS $row ) : ?>
                                                                    <option value="<?php echo $row['id_spot'] ?>"><?php echo $row['nama'] ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <span class="form-text text-muted">Berisi spot baloga</span>
                                                            </div>

                                                            <div class="form-group">
																<label>Default Scene</label>
																<div class="radio-inline">
																	<label class="radio">
																	<input type="radio" name="default" value="iya" required=""/>
																	<span></span>True</label>
																	<label class="radio">
																	<input type="radio" name="default" value="tidak" required=""/>
																	<span></span>False</label>
																</div>
																<span class="form-text text-muted">Status default scene</span>
															</div>
															
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light-primary btn-sm font-weight-bold" data-dismiss="modal">Batal</button>
															<button class="btn btn-primary btn-sm font-weight-bold">Tambah Sekarang</button>
														</div>


                                                        </form>
													</div>
												</div>
											</div>

                                        </div>

















                                        <?php
                                        
                                            if ( $scene_detail->num_rows() > 0 ) :
                                            
                                                foreach ( $scene_detail->result_array() AS $rowSceneDet ) :
                                            
                                        ?>
                                        <a href="<?php echo base_url('scene/builder/'. $id_scene_info.'/'. $rowSceneDet['id_scene_detail'] ) ?>">
                                        <div class="form-group">
											
											<?php

												$colorStatus = "";
												$statusText = "";
												if ( $rowSceneDet['scene_default'] == "iya" ) {

													$colorStatus = "#ef5350";
													$statusText = '<span class="font-weight-bold text-success"><span class="label label-success label-dot mr-2"></span> Scene Utama</span>';
												} else {

													$colorStatus = "#ffcdd2";
												}
											?>
                                            <div class="card card-body" style="border: 1px solid #e0e0e0; border-left: 5px solid <?php echo $colorStatus ?>">
                                                <h4><?php echo $rowSceneDet['nama'] ?></h4>
												<?php echo $statusText ?>
												
                                                <small>Klik untuk mengubah</small>
                                            </div>
                                        
                                        </div>
                                        </a>
                                        <?php endforeach; endif; ?>
                                    
                                    </div>






















                                    <div class="col-md-9">

                                        <?php if ( $scene_detail->num_rows() > 0 ) { ?>

										
										<!--begin::Button-->
										<div class="text-right">
										<button  data-toggle="modal" data-target="#default-setting" type="button" class="btn btn-light-success font-weight-bold">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Code\Puzzle.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"/>
														<path d="M19,11 L20,11 C21.6568542,11 23,12.3431458 23,14 C23,15.6568542 21.6568542,17 20,17 L19,17 L19,20 C19,21.1045695 18.1045695,22 17,22 L5,22 C3.8954305,22 3,21.1045695 3,20 L3,17 L5,17 C6.65685425,17 8,15.6568542 8,14 C8,12.3431458 6.65685425,11 5,11 L3,11 L3,8 C3,6.8954305 3.8954305,6 5,6 L8,6 L8,5 C8,3.34314575 9.34314575,2 11,2 C12.6568542,2 14,3.34314575 14,5 L14,6 L17,6 C18.1045695,6 19,6.8954305 19,8 L19,11 Z" fill="#000000" opacity="0.3"/>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>Pengaturan</button>
											<!--end::Button-->
										</div>


                                        <h5>Hasil komposisi dari sebuah scene</h5>
                                        <label for="">Klik untuk mendetail dari hasil yang</label>
                                        <a class="font-weight-bold" href="<?php echo base_url() ?>" target="_blank"> telah dimodfikasi</a>

                                        <iframe src="<?php echo base_url('scene/iframepanorama/'. $id_scene_info) ?>" style="width: 100%; height: 400px; border: 2px solid #e0e0e0; border-radius: 5px"></iframe>
                                        



										
										<!-- Modal-->
										<div class="modal fade" id="default-setting" data-backdrop="static"
												tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
													<div class="modal-content">

                                                        <form action="<?php echo base_url('scene/sunting_detail_scene/'. $id_scene_info ) ?>" method="POST">

														<div class="modal-body">
															<h4>Ubah Bagian</h4>
                                                            <small>Pilih pengaturan dibawah ini</small> <br><br>

                                                            <div class="form-group">
                                                                <label>Ubah Scene Utama : </label>
                                                                <select name="id_spot" class="form-control" id="" required="">
                                                                    <option value="">Pilih salah satu</option>
                                                                    
                                                                    <?php foreach ( $scene_detail->result_array() AS $row ) : ?>
                                                                    <option value="<?php echo $row['id_spot'] ?>" <?php if ( $row['scene_default'] == "iya" ) echo 'selected="selected"' ?>>
																		<?php echo $row['nama'] ?>
																	</option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <span class="form-text text-muted">Scene utama saat ini</span>
                                                            </div>
															
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-light-primary btn-sm font-weight-bold" data-dismiss="modal">Batal</button>
															<button class="btn btn-primary btn-sm font-weight-bold">Perbarui Sekarang</button>
														</div>


                                                        </form>
													</div>
												</div>
											</div>



                                        <?php } else {
                                            
                                            echo svg();
                                        }?>
                                    </div>

                                </div>


                            </div>
                        </div>



                        <?php
                        
                                            
                            function svg() {


                                return '<svg style="width: 400px" id="b579c747-9e6c-4f72-9ce0-e35231108700" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 939.81117 456.60073"><ellipse cx="564.24916" cy="304.60073" rx="135" ry="7" fill="#f0f0f0"/><ellipse cx="147.24916" cy="449.60073" rx="45" ry="7" fill="#f0f0f0"/><rect x="761.17635" y="189.86378" width="5.13321" height="98.99767" transform="translate(318.13467 753.22315) rotate(-84.18477)" fill="#e6e6e6"/><circle cx="557.44851" cy="9.53384" r="9.53311" fill="#e6e6e6"/><rect x="761.17635" y="217.86378" width="5.13321" height="98.99767" transform="translate(290.27876 778.38616) rotate(-84.18477)" fill="#e4e4e4"/><circle cx="557.44851" cy="37.53384" r="9.53311" fill="#e4e4e4"/><rect x="761.17635" y="245.86378" width="5.13321" height="98.99767" transform="translate(262.42285 803.54918) rotate(-84.18477)" fill="#f64e60"/><circle cx="557.44851" cy="65.53384" r="9.53311" fill="#f64e60"/><polygon points="19.924 166.829 74.249 125.601 73.806 205.874 22.589 248.125 19.924 166.829" fill="#e4e4e4"/><polygon points="256.922 16.745 362.661 1.81 364.249 93.905 257.852 111.524 256.922 16.745" fill="#f64e60"/><polygon points="870.249 173.491 870.249 254.894 922.822 305.421 925.276 222.902 870.249 173.491" fill="#f64e60"/><g id="f1012d9b-0a3f-4e62-89ec-f75ec41b1f18" data-name="Group 123"><path id="f1db56c4-d40a-4b97-925d-862f8518bc4b" data-name="Path 1733" d="M1000.65558,322.07677v12.01l36.63,29.76,1.72-10.3Z" transform="translate(-130.09442 -221.69963)" fill="#f64e60"/></g><path id="a03c9d69-04e1-44a9-b627-9efaf6e70c5d" data-name="Path 1735" d="M1001.2356,342.67678l-.58,12.02,69.25,65.23-1.14-13.73Z" transform="translate(-130.09442 -221.69963)" fill="#e6e6e6"/><path id="f49e7db1-285b-4bca-9b97-2387afac8e22" data-name="Path 1736" d="M1000.65558,364.99679v11.44l69.25,66.39v-14.88Z" transform="translate(-130.09442 -221.69963)" fill="#e6e6e6"/><polygon points="149.849 441.23 144.362 441.23 141.751 420.063 149.85 420.063 149.849 441.23" fill="#9e616a"/><path d="M281.34325,668.24883l-17.69456-.00066v-.2238a6.8876,6.8876,0,0,1,6.88722-6.88711h.00044l10.80723.00044Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><polygon points="169.309 435.789 164.236 437.882 153.748 419.313 161.234 416.223 169.309 435.789" fill="#9e616a"/><path d="M302.72669,661.87166,286.37035,668.622l-.08539-.20688a6.88756,6.88756,0,0,1,3.73863-8.9938l.0004-.00017,9.98991-4.12285Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><path d="M283.55878,503.74645s20.36206,9.64972,6.83261,53.85182l-1.02946,34.96981-6.74837,64.28769-10.98-.69935-4.856-61.88755-16.186-51.11662,3.212-24.68933Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><path d="M252.48249,524.98689l1.65576-32.09473c-11.26025-18.90918.281-29.71191,1.21875-30.541l10.31787-15.0669,9.02735-2.478a11.89523,11.89523,0,0,1,15.0437,11.5625l-.40479,52.58691Z" transform="translate(-130.09442 -221.69963)" fill="#f64e60"/><polygon points="142.984 381.916 154.331 428.978 167.334 423.693 149.713 381.096 142.984 381.916" fill="#2f2e41"/><path d="M255.77738,541.63329a5.71,5.71,0,0,0,2.55729-8.37388l11.50486-16.29311-9.58505-.5492-10.19519,15.35172a5.741,5.741,0,0,0,5.71809,9.86447Z" transform="translate(-130.09442 -221.69963)" fill="#9e616a"/><polygon points="129.675 241.325 134.705 276.81 120.497 303.566 132.386 311.008 152.869 280.727 144.292 237.823 129.675 241.325" fill="#f64e60"/><circle id="aaba450f-0f04-490f-b553-501192395cc8" data-name="Ellipse 360" cx="140.10743" cy="202.03381" r="15.18" fill="#9e616a"/><path d="M293.0904,480.33821c.56714-8.49255,4.12256-16.44623,6.98877-24.46057,2.866-8.01441,5.09131-16.737,2.92432-24.968a38.37815,38.37815,0,0,0-5.886-11.79681c-4.7417-6.87683-10.78711-13.27106-18.62109-16.16931-7.834-2.8982-17.70655-1.45343-22.86035,5.12a12.7433,12.7433,0,0,0-2.876,8.2041,9.149,9.149,0,0,0,4.14648,7.44147c1.43116.86621,3.13282,1.27271,4.43555,2.32208,1.30274,1.04944,2.01563,3.183.83057,4.36383l.47314.233c4.24561.91491,6.61426,5.72711,6.57813,10.06994s-1.80225,8.45459-2.89551,12.65772c-1.09326,4.20318-1.41309,9.02362,1.11133,12.55767,2.50927,3.51355,7.35986,5.05939,9.1914,8.96949,2.499,5.33587-2.03027,11.44433-1.48681,17.3114.522,5.63263,5.80127,9.886,11.32617,11.10022,5.5249,1.21417,11.26318.06537,16.80224-1.0827C295.73542,498.258,292.52326,488.8307,293.0904,480.33821Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><path d="M644.68733,402.43233l.74121-24.66346-3.29248-22.93652-4.92627.334-4.145,24.134,4.63134,25.876a6.99547,6.99547,0,1,0,6.99122-2.744Z" transform="translate(-130.09442 -221.69963)" fill="#9e616a"/><polygon points="513.97 238.601 500.162 297.058 510.566 297.797 530.506 241.219 513.97 238.601" fill="#9e616a"/><polygon points="538.584 234.759 557.64 291.722 566.872 286.869 552.249 229.601 538.584 234.759" fill="#9e616a"/><path d="M643.3462,407.39644s-6.61624,7.31635,4.80108,21.36014l-14.8037,77.54379,11,4,20-52,18,45,14-6-19.12444-68.54379,2.12444-17.45621-5.28735-4.88583Z" transform="translate(-130.09442 -221.69963)" fill="#e4e4e4"/><path d="M657.08626,328.45644s-20.02166,7.84393-18.02166,19.84393l4.9252,47.43587-5.06565,16.45057s33.78386,5.42576,39.96215-.73034l1.1783-52.1561,2.21294-20.615-10.70129-4.329-2.67-3.96Z" transform="translate(-130.09442 -221.69963)" fill="#3f3d56"/><polygon points="512.042 120.652 504.74 137.093 515.596 141.297 512.042 120.652" fill="#3f3d56"/><path d="M696.86994,409.26045l-8.80517-47.004-14.0083-1.16992,3.94824,23.5957,9.53857,26.69861a7.0029,7.0029,0,1,0,9.32666-2.12036Z" transform="translate(-130.09442 -221.69963)" fill="#9e616a"/><path d="M666.34732,344.43029l8.079,22.93615,15.63832-2.06607s3.42587-21.23-7.78706-26.615Z" transform="translate(-130.09442 -221.69963)" fill="#3f3d56"/><path id="aadf75e6-ac14-4c0d-b07b-d38ba10ebdab" data-name="Path 1770" d="M677.31824,310.95981c-.40748,19.63512-30.652,16.28216-26.64422-3.00847C653.75974,292.60023,677.73029,295.32874,677.31824,310.95981Z" transform="translate(-130.09442 -221.69963)" fill="#9e616a"/><path id="e2c3cfee-80d7-4301-b109-7608295bf7e0" data-name="Path 1784" d="M669.94825,292.89981c-9.4821,1.61639-24.16725-2.18534-23.879,12.66035-.97254,1.45384-2.04149,3.04658-1.35075,4.86972,3.34472,4.07892,5.09246,10.39583,9.45868,13.26085,3.89158-.02883,8.97148.51448,11.58125-2.88061,1.10884-2.78394-.853-6.17778.81979-8.79037,2.19295-.69977,4.33336,2.1073,5.19-1.89047a5.43994,5.43994,0,0,1,2.23009-5.08945C677.43193,301.10783,675.09209,293.8623,669.94825,292.89981Z" transform="translate(-130.09442 -221.69963)" fill="#3f3d56"/><path d="M627.56208,517.301l16.35086-.00066h.00066a10.42059,10.42059,0,0,1,10.42005,10.41988v.33861l-26.77107.001Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><path d="M683.72909,510.24285l15.98349-3.44654.00065-.00014a10.42061,10.42061,0,0,1,12.382,7.98987l.07136.331-26.1696,5.64289Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><polygon points="621.563 299.657 626.846 299.657 629.359 279.281 621.562 279.281 621.563 299.657" fill="#ffb6b6"/><path d="M750.31011,519.63185l10.40327-.00042h.00042a6.63015,6.63015,0,0,1,6.62978,6.62967v.21545l-17.03315.00063Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><polygon points="594.563 299.657 599.846 299.657 602.359 279.281 594.562 279.281 594.563 299.657" fill="#ffb6b6"/><path d="M723.31011,519.63185l10.40327-.00042h.00042a6.63015,6.63015,0,0,1,6.62978,6.62967v.21545l-17.03315.00063Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><path d="M786.34358,294.30037a6,6,0,1,0-11.54932,2.27905l-12.13965,19.20667-7.55713,15.2301,6.23633,5.535,4.79932-5.05115,15.69629-31.3927A5.99665,5.99665,0,0,0,786.34358,294.30037Z" transform="translate(-130.09442 -221.69963)" fill="#ffb6b6"/><path d="M723.34358,357.30037l-11.89942-1.84424-2.83472,21.52759-15.44409,33.23413a6.003,6.003,0,1,0,8.2732,1.9248l16.1477-29.15844Z" transform="translate(-130.09442 -221.69963)" fill="#ffb6b6"/><path d="M729.93768,393.163s-10.46415,9.67623-9.13442,34.00664l2.93141,37.58661-.73927,52.39445,10.74783-.84457,9.38977-87.80608,9,36-3.23087,47.956,10.35291.24022,10.878-54.1962-2.57832-40.17392L763.22355,393.163Z" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><path d="M741.133,336.50006l-25,7,12.71159,38.08609-1.9,14.57,38.54669.24969-8.92708-28.16167s5.00976-10.30194-.71071-17.523Z" transform="translate(-130.09442 -221.69963)" fill="#e4e4e4"/><path d="M738.133,342.50006l3-6s-.09683-1.50781,6.95158-2.2539l8.27024-8.21985,7.56979,7.54454L751.133,352.50006Z" transform="translate(-130.09442 -221.69963)" fill="#e4e4e4"/><path d="M726.133,348.50006s-9-10-14-5-2.43641,20.89895-2.43641,20.89895l15.57331,2.41656Z" transform="translate(-130.09442 -221.69963)" fill="#e4e4e4"/><path id="bf97ead5-a8ed-4eb0-acc5-869eed05cf08" data-name="Ellipse 358" d="M730.69791,310.0607c15.32721.06879,15.32591,23.37334-.00072,23.44C715.3707,333.43191,715.372,310.12737,730.69791,310.0607Z" transform="translate(-130.09442 -221.69963)" fill="#ffb6b6"/><path d="M732.40421,321.00606c2.07178,1.22006,4.22463,2.468,6.61469,2.72959s5.096-.74435,6.055-2.94915a6.80354,6.80354,0,0,0,.4695-2.39647,15.93022,15.93022,0,0,0-4.0325-11.41526,14.44626,14.44626,0,0,0-11.086-4.68724c-3.96029.17215-7.62,2.04685-11.13425,3.88088-3.23174,1.68659-6.644,3.545-8.4,6.73957-2.602,4.73379-.70535,10.52951-.2,15.90759a29.96846,29.96846,0,0,1-7.22483,22.29l21.80746,2.0663a25.52412,25.52412,0,0,0,7.9619-.08105,12.726,12.726,0,0,0,6.05225-21.5879c-3.09541-2.98007-8.07337-5.08984-8.19565-9.38489" transform="translate(-130.09442 -221.69963)" fill="#2f2e41"/><polygon points="0 152.075 79.881 93.598 79.249 98.601 0.249 157.601 0 152.075" fill="#f64e60"/><path id="e675ae52-c925-4d34-8b81-f405477c3ca7" data-name="Ellipse 365" d="M547.04436,644.75768c22.02626-.09067,22.02646,4.771-.00053,4.68C525.0181,649.52835,525.0179,644.66663,547.04436,644.75768Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path id="e3c5ec81-3296-48b2-bdc0-fdf32bb949c4" data-name="Ellipse 365" d="M226.04436,642.75768c22.02626-.09067,22.02646,4.771-.00053,4.68C204.0181,647.52835,204.0179,642.66663,226.04436,642.75768Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path id="a417f11e-12d9-4890-9c52-a0b47cfebf3d" data-name="Ellipse 365" d="M842.04436,557.75768c22.02626-.09067,22.02646,4.771-.00053,4.68C820.0181,562.52835,820.0179,557.66663,842.04436,557.75768Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M840.28534,554.20471c.0448-2.13446-1.48663-4.45325-3.62146-4.46759a3.77441,3.77441,0,0,0-3.46887,3.16675,6.17425,6.17425,0,0,0,1.39587,4.753,18.30648,18.30648,0,0,0,3.80005,3.37915l.37683-1.37457a4.39653,4.39653,0,0,1-.8352.40967C839.081,558.27136,840.24054,556.33917,840.28534,554.20471Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M838.76776,559.66144a4.874,4.874,0,0,0,.89716-.74286c-.24683.04962-.49018.11548-.73773.16125Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M854.796,542.95306a7.31875,7.31875,0,0,0-7.07617-1.10046,8.54471,8.54471,0,0,0-4.98059,5.27179c-.77222,2.2951-.6131,4.78815-.988,7.18042a8.57141,8.57141,0,0,1-2.0863,4.61377,48.20588,48.20588,0,0,0,11.08917-3.65582c2.55572-1.20819,5.20056-2.87195,6.08716-5.55628A6.411,6.411,0,0,0,854.796,542.95306Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M547.28534,641.20471c.0448-2.13446-1.48663-4.45325-3.62146-4.46759a3.77441,3.77441,0,0,0-3.46887,3.16675,6.17425,6.17425,0,0,0,1.39587,4.753,18.30648,18.30648,0,0,0,3.80005,3.37915l.37683-1.37457a4.39653,4.39653,0,0,1-.8352.40967C546.081,645.27136,547.24054,643.33917,547.28534,641.20471Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M545.76776,646.66144a4.874,4.874,0,0,0,.89716-.74286c-.24683.04962-.49018.11548-.73773.16125Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M561.796,629.95306a7.31875,7.31875,0,0,0-7.07617-1.10046,8.54471,8.54471,0,0,0-4.98059,5.27179c-.77222,2.2951-.6131,4.78815-.988,7.18042a8.57141,8.57141,0,0,1-2.0863,4.61377,48.20588,48.20588,0,0,0,11.08917-3.65582c2.55572-1.20819,5.20056-2.87195,6.08716-5.55628A6.411,6.411,0,0,0,561.796,629.95306Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M226.28534,639.20471c.0448-2.13446-1.48663-4.45325-3.62146-4.46759a3.77441,3.77441,0,0,0-3.46887,3.16675,6.17425,6.17425,0,0,0,1.39587,4.753,18.30648,18.30648,0,0,0,3.8,3.37915l.37683-1.37457a4.39653,4.39653,0,0,1-.8352.40967C225.081,643.27136,226.24054,641.33917,226.28534,639.20471Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M224.76776,644.66144a4.874,4.874,0,0,0,.89716-.74286c-.24683.04962-.49018.11548-.73773.16125Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/><path d="M240.796,627.95306a7.31875,7.31875,0,0,0-7.07617-1.10046,8.54471,8.54471,0,0,0-4.98059,5.27179c-.77222,2.2951-.6131,4.78815-.988,7.18042a8.57141,8.57141,0,0,1-2.0863,4.61377,48.20588,48.20588,0,0,0,11.08917-3.65582c2.55572-1.20819,5.20056-2.87195,6.08716-5.55628A6.411,6.411,0,0,0,240.796,627.95306Z" transform="translate(-130.09442 -221.69963)" fill="#f0f0f0"/></svg>';
                            }
                        
                        
                        ?>