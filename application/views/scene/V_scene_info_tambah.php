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
												<a href="" class="text-muted">Tambah Scene Baloga</a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center flex-wrap">
									<!--begin::Button-->
									<a href="<?php echo base_url('scene/index') ?>" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"/>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-12.000000, -12.000000) " x="11" y="5" width="2" height="14" rx="1"/>
													<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/>
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
										<span class="d-none d-md-inline">Kembali</span>
									</a>
									<!--end::Button-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">

                            <form action="<?php echo base_url('scene/prosestambahscene') ?>" method="POST" enctype="multipart/form-data">
								<div class="row justify-content-center">
									
									<div class="col-md-8">

										<?php echo $this->session->flashdata('msg') ?>

										<!--begin::Card-->
										<div class="card card-custom gutter-b example example-compact">
											<div class="card-header">
												<h3 class="card-title">Form Tambah Scene Baloga 360</h3>
												<div class="card-toolbar">
													<div class="example-tools justify-content-center">
														<a href="">
															<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\General\Update.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24"/>
																	<path d="M8.43296491,7.17429118 L9.40782327,7.85689436 C9.49616631,7.91875282 9.56214077,8.00751728 9.5959027,8.10994332 C9.68235021,8.37220548 9.53982427,8.65489052 9.27756211,8.74133803 L5.89079566,9.85769242 C5.84469033,9.87288977 5.79661753,9.8812917 5.74809064,9.88263369 C5.4720538,9.8902674 5.24209339,9.67268366 5.23445968,9.39664682 L5.13610134,5.83998177 C5.13313425,5.73269078 5.16477113,5.62729274 5.22633424,5.53937151 C5.384723,5.31316892 5.69649589,5.25819495 5.92269848,5.4165837 L6.72910242,5.98123382 C8.16546398,4.72182424 10.0239806,4 12,4 C16.418278,4 20,7.581722 20,12 C20,16.418278 16.418278,20 12,20 C7.581722,20 4,16.418278 4,12 L6,12 C6,15.3137085 8.6862915,18 12,18 C15.3137085,18 18,15.3137085 18,12 C18,8.6862915 15.3137085,6 12,6 C10.6885336,6 9.44767246,6.42282109 8.43296491,7.17429118 Z" fill="#000000" fill-rule="nonzero"/>
																</g>
															</svg><!--end::Svg Icon--></span>
														</a>
													</div>
												</div>
											</div>
											<!--begin::Form-->
											<form class="form">
												<div class="card-body">
													<div class="form-group">
														<label>Author:</label>
														<input type="text" name="author" class="form-control" placeholder="Masukkan nama author atau sub-baloga . . ." required="" />
														<span class="form-text text-muted">Berisi nama author baloga</span>
													</div>

                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Komposisi Rotasi</label>
                                                                <input type="number" name="rotation" class="form-control" placeholder="Masukkan jumlah rotasi 360 . . ." required="" />
                                                                <span class="form-text text-muted">Rotation of scene</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label>Durasi Perpindahan</label>
                                                                <input type="number" name="fade" class="form-control" placeholder="Masukkan Durasi m/s . . ." required="" />
                                                                <span class="form-text text-muted">1000 m/s = 1 detik</span>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                        
                                                            <div class="form-group">
																<label>Autoload</label>
																<div class="radio-inline">
																	<label class="radio">
																	<input type="radio" name="autoload" value="true" required=""/>
																	<span></span>True</label>
																	<label class="radio">
																	<input type="radio" name="autoload" value="false" required=""/>
																	<span></span>False</label>
																</div>
																<span class="form-text text-muted">Status Autoload</span>
															</div>
                                                        
                                                        </div>
                                                    </div>


													<div class="row">
													
														<div class="col-md-12">
															<div class="form-group">
																<label>Status</label>
																<div class="radio-inline">
																	<label class="radio">
																	<input type="radio" name="status" value="aktif" required=""/>
																	<span></span>Ditampilkan</label>
																	<label class="radio">
																	<input type="radio" name="status" value="nonaktif" required=""/>
																	<span></span>Disembunyikan</label>
																</div>
																<span class="form-text text-muted">Status gambar baloga</span>
															</div>
														</div>
													
													</div>

												</div>
												<div class="card-footer">
													<button type="submit" class="btn btn-primary mr-2">Tambahkan dan Simpan</button>
													<button type="reset" class="btn btn-secondary">Reset</button>
												</div>
											</form>
											<!--end::Form-->
										</div>
										<!--end::Card-->

                                    </div>
								</div>
								</form>

                            </div>
                        </div>