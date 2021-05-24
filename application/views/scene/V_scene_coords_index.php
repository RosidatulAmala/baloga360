                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
                        
                        <!--begin::Subheade    r-->
                        <div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Kustomisasi Scene</h2>
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
												<a href="<?php echo base_url('scene/composition/'. $id_scene_info) ?>" class="text-muted">Tambah Scene Komposisi Baloga</a>
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
									<a href="<?php echo base_url('scene/composition/'. $id_scene_info) ?>" class="btn button-color btn-fixed-height font-weight-bold px-2 px-lg-5 mr-2">
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

                            <?php if ( $this->session->flashdata('msg') ) {

                                echo $this->session->flashdata('msg');
                            } ?>
                           


                                <div id="panorama" style="border: 1px solid #e0e0e0; border-radius: 5px"></div>


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
                                <div class="alert-text">Klik tombol dibawah ini untuk melakukan penambahan koordinat.</div>
                                </div>
                                <!--end::Notice-->



                                <!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap py-5">
										<div class="card-title">
											<h3 class="card-label">Daftar Scene Baloga
											<div class="text-muted pt-2 font-size-sm">Berikut adalah semua scene yang telah disimpan</div></h3>
										</div>
										<div class="card-toolbar">
											
                                            <?php
                                            
                                                $status_coord = $this->input->get('tambah');
                                                $colorBtn = "default";
                                                $textBtn = "Aktifkan Posisi Scene Baloga";
                                                $event   = "active";

                                                if ( $status_coord == "active" ) {

                                                    $colorBtn = "primary";
                                                    $textBtn  = "Nonaktifkan Perubahan";
                                                    $event    = "";
                                                }
                                            ?>



                                            <!--begin::Button-->
											<a href="<?php echo base_url('scene/hapus_detail_scene/'. $id_scene_info.'/'. $id_scene_detail) ?>" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo5\dist/../src/media/svg/icons\Files\Deleted-file.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24"/>
                                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                                        <path d="M10.5857864,13 L9.17157288,11.5857864 C8.78104858,11.1952621 8.78104858,10.5620972 9.17157288,10.1715729 C9.56209717,9.78104858 10.1952621,9.78104858 10.5857864,10.1715729 L12,11.5857864 L13.4142136,10.1715729 C13.8047379,9.78104858 14.4379028,9.78104858 14.8284271,10.1715729 C15.2189514,10.5620972 15.2189514,11.1952621 14.8284271,11.5857864 L13.4142136,13 L14.8284271,14.4142136 C15.2189514,14.8047379 15.2189514,15.4379028 14.8284271,15.8284271 C14.4379028,16.2189514 13.8047379,16.2189514 13.4142136,15.8284271 L12,14.4142136 L10.5857864,15.8284271 C10.1952621,16.2189514 9.56209717,16.2189514 9.17157288,15.8284271 C8.78104858,15.4379028 8.78104858,14.8047379 9.17157288,14.4142136 L10.5857864,13 Z" fill="#000000"/>
                                                    </g>
                                                </svg><!--end::Svg Icon-->
											</span>Hapus Daftar Scene</a>&nbsp;
											<!--end::Button-->


											<!--begin::Button-->
											<a href="?tambah=<?php echo $event ?>" class="btn btn-<?php echo $colorBtn ?> font-weight-bolder">
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
											</span><?php echo $textBtn ?></a>
											<!--end::Button-->
                                            
                                            <!-- Modal-->
											<div class="modal fade" id="tambah-baru" data-backdrop="static"
												tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
												<div class="modal-dialog modal-dialog-centered modal-md" role="document">
													<div class="modal-content">

                                                        <form action="<?php echo base_url('scene/prosestambahcoords/'. $id_scene_info.'/'.$id_scene_detail) ?>" method="POST">

														<div class="modal-body">
															<h4>Tambah Bagian Baru</h4>
                                                            <small>Masukkan form dibawah ini</small> <br><br>

                                                            <div class="row">
                                                            
                                                                <div class="col-md-5">

                                                                    <div class="form-group">
                                                                        <label for="">Tipe Titik</label>

                                                                        <div class="radio-inline">
                                                                            <label class="radio">
                                                                            <input type="radio" name="tipe" value="scene" required=""/>
                                                                            <span></span>Scene</label>
                                                                            <label class="radio">
                                                                            <input type="radio" name="tipe" value="info" required=""/>
                                                                            <span></span>Info</label>
                                                                        </div>
                                                                        <span class="form-text text-muted">Tipe yang digunakan</span>
                                                                    </div>
                                                                
                                                                </div>
                                                                <div class="col-md-7">
                                                                    <label>Bagian Spot : </label>
                                                                    <select name="id_spot" class="form-control" id="">
                                                                        <option value="">Pilih salah satu</option>
                                                                        
                                                                        <?php foreach ( $spot->result_array() AS $row ) :
                                                                            
                                                                            
                                                                            if ( $row['id_scene_detail'] != $scene_detail['id_scene_detail'] ) {
                                                                        ?>
                                                                        <option value="<?php echo $row['id_scene_detail'] ?>"><?php echo $row['nama'] ?></option>
                                                                        <?php  } endforeach; ?>
                                                                    </select>
                                                                    <span class="form-text text-muted">Pilih apabila memilih "scene"</span>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                            
                                                                <div class="col-md-6">
                                                                
                                                                    <div class="form-group">
                                                                        <label for="">Pitch</label>
                                                                        <input type="text" name="pitch" class="form-control" readonly>
                                                                        <span class="form-text text-muted">Koordinat Pitch</span>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                
                                                                    <div class="form-group">
                                                                        <label for="">Yaw</label>
                                                                        <input type="text" name="yaw" class="form-control" readonly>
                                                                        <span class="form-text text-muted">Koordinat Yaw</span>
                                                                    </div>

                                                                </div>
                                                            
                                                            </div>

                                                            <div class="form-group">
																<label>Deskripsi</label>
																<!-- <textarea name="deskripsi" class="form-control" placeholder="Masukkan catatan atau deskripsi" cols="30" rows="10" required=""></textarea> -->
                                                                <textarea id="kt-tinymce-2" name="kt-tinymce-2" class="tox-target"></textarea>
																<span class="form-text text-muted">Masukkan deskripsi</span>
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
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="">
											<thead>
												<tr>
													<th width="5%">No</th>
													<th width="15%">Type</th>
													<th width="20%">Pitch</th>
													<th width="30%">Yaw</th>
                                                    <th>Next Scene</th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tbody>
                                                
                                                <?php 
                                                
                                                $nomor = 1;
                                                foreach ( $scene_coords->result_array() AS $rowCoord ) : ?>

                                                <tr>
                                                    
                                                    <td><?php echo $nomor ?></td>
                                                    <td><?php echo $rowCoord['type'] ?></td>
                                                    <td><?php echo $rowCoord['pitch'] ?></td>
                                                    <td><?php echo $rowCoord['yaw'] ?></td>
                                                    <td><?php echo $rowCoord['nama'] ?></td>
                                                    <td>
                                                        <!-- <a href="<?php echo base_url('scene/edit/'. $rowCoord['id_scene_coords']) ?>" class="btn btn-sm btn-clean btn-icon" title="Edit details"><i class="la la-edit"></i></a> -->
                                                        <a href="javascript:;" data-toggle="modal" data-target="#hapus-<?php echo $rowCoord['id_scene_coords'] ?>" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i> Hapus </a>


                                                        <!-- Modal-->
														<div class="modal fade" id="hapus-<?php echo $rowCoord['id_scene_coords'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
															<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
																<div class="modal-content">
																	<div class="modal-body">
																		<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
																			<i aria-hidden="true" class="ki ki-close"></i>
																		</button> -->

																		<h4>Hapus Titik Pitch dan Yaw</h4>
																		<p>Apakah anda yakin ingin menghapus bagian ini</p>


																		<small>Data yang telah dihapus tidak akan <br>dipulihkan kembali</small>
																	</div>
																	<div class="modal-footer">
																		<button type="button" class="btn btn-light-primary btn-sm font-weight-bold" data-dismiss="modal">Batal</button>
																		<a href="<?php echo base_url('scene/proseshapuscoords/'. $id_scene_info.'/'.$id_scene_detail.'/'.$rowCoord['id_scene_coords']) ?>" class="btn btn-primary btn-sm font-weight-bold">Hapus Sekarang</a>
																	</div>
																</div>
															</div>
														</div>

                                                    </td>
                                                
                                                </tr>
                                                <?php $nomor++; endforeach; ?>

                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>


                            </div>
                        </div>




                        
                        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
                        <!--begin::Page Vendors(used by this page)-->
                        <script src="<?php echo base_url() ?>assets/dist/assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
                        <!--end::Page Vendors-->
                        <!--begin::Page Scripts(used by this page)-->
                        <script src="<?php echo base_url() ?>assets/dist/assets/js/pages/crud/forms/editors/tinymce.js"></script>
                        <!--end::Page Scripts-->

                        <script>

                        viewer = pannellum.viewer('panorama', {
                        	"default": {
                                "firstScene": "<?php echo $scene_detail['id_scene_detail'] ?>",
                                "type": "equirectangular",
                                "panorama": "<?php echo base_url('assets/img/baloga-spot/'. $scene_detail['foto']) ?>",
                                "title": "<?php echo $scene_detail['nama'] ?>",
                                "author": "<?php echo $scene['info_scene']['author'] ?>",
                                "autoLoad": <?php echo $scene['info_scene']['scene_autoload'] ?>,
                                "autoRotate": <?php echo $scene['info_scene']['scene_rotate'] ?>,
                            },
                            
                            "scenes": {

                                "<?php echo $scene_detail['id_scene_detail'] ?>": {  // sceneId
                                    "title": "<?php echo $scene_detail['nama'] ?>",
                                    // "hfov": 110,
                                    // "pitch": -3,
                                    // "yaw": 117,
                                    "type": "equirectangular",
                                    "panorama": "<?php echo base_url('assets/img/baloga-spot/'. $scene_detail['foto']) ?>",
                                    "hotSpots": [

                                        <?php foreach ( $scene_coords->result_array() AS $rowCoord ) : ?>

                                        <?php if ( $rowCoord['type'] == "info" ) { // only info ?>
                                        {
                                            "pitch": <?php echo $rowCoord['pitch'] ?>,
                                            "yaw": <?php echo $rowCoord['yaw'] ?>,
                                            "type": "info",
                                            "text": '<?php echo preg_replace("/[\r\n]*/","",$rowCoord['description']) ?>',
                                            
                                        },

                                        <?php } else { ?>
                                        {
                                            "pitch": <?php echo $rowCoord['pitch'] ?>,
                                            "yaw": <?php echo $rowCoord['yaw'] ?>,
                                            "type": "scene",
                                            "text": '<?php echo preg_replace("/[\r\n]*/","",$rowCoord['description']) ?>',
                                            "sceneId": '<?php echo $id_scene_detail ?>'
                                        },
                                        <?php } ?>

                                        <?php endforeach; ?>
                                    ]
                                },
                                
                            }
                        });


                        <?php if ( $status_coord == "active" ) : ?>
                        viewer.on('mousedown', function (event) {

                        	// For pitch and yaw of center of viewer
                        	// console.log(viewer.getPitch(), viewer.getYaw()); // get position

                        	// For pitch and yaw of mouse location
                        	// console.log(viewer.mouseEventToCoords(event));

                            $('input[name="pitch"]').val( viewer.mouseEventToCoords(event)[0] );
                            $('input[name="yaw"]').val( viewer.mouseEventToCoords(event)[1] );

                            $('#tambah-baru').modal('show');
                        });
                        <?php endif; ?>
                        
                        </script>