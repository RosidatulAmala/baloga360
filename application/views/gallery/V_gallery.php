				<!--begin::Content-->
					
						<!--begin::Subheader-->
						<div class="subheader py-3 py-lg-8 subheader-transparent" id="kt_subheader">
							<div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h2 class="d-flex align-items-center text-dark font-weight-bold my-1 mr-3">Galeri Batu Love Garden</h2>
										<!--end::Page Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold my-2 p-0">
											<li class="breadcrumb-item text-muted">
												<a href="<?php echo base_url('dashboard') ?>" class="text-muted">Halaman Utama</a>
											</li>
											<li class="breadcrumb-item text-muted">
												<a href="" class="text-muted">Galeri Baloga</a>
											</li>
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->

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

								<!--begin::Card-->
								<div class="card card-custom">
									<div class="card-header flex-wrap py-5">
										<div class="card-title">
											<h3 class="card-label">Daftar Galeri Baloga
											<div class="text-muted pt-2 font-size-sm">Berikut adalah semua galeri yang telah disimpan</div></h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="<?php echo base_url('gallery/tambah') ?>" class="btn btn-primary font-weight-bolder">
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
											</span>Tambah Galeri Baloga</a>
											<!--end::Button-->
										</div>
									</div>
									<div class="card-body">
										<!--begin: Datatable-->
										<table class="table table-separate table-head-custom table-checkable" id="">
											<thead>
												<tr>
													<th width="5%">No</th>
													<th>Gambar</th>
													<th width="20%">Nama</th>
													<th width="30%">Caption</th>
													<th width="10%">Status Ditampilkan</th>
													<th width="15%">Pembuatan</th>
													<th>Opsi</th>
												</tr>
											</thead>
											<tbody>

												<?php if ( $gallery->num_rows() > 0 ) : ?>
                                                    <?php 
                                                        $nomor = 1;
                                                        foreach ( $gallery->result_array() AS $row ) : ?>

                                                        <tr>
                                                            <td><?php echo $nomor ?></td>
															<td>
																<?php
																
																	$img = "https://alppetro.co.id/dist/assets/images/default.jpg";

																	// cek gambar 
																	if ( $row['photo'] ) {

																		$img = base_url('assets/img/baloga-gallery/'. $row['photo']);
																	}
																?>
																<a href="<?php echo $img ?>" target="_blank">
																	<img src="<?php echo $img ?>" alt="Photo" style="width: 50px; height: 50px; object-fit: cover; border: 1px solid #e0e0e0; border-radius: 5px">
																</a>
															</td>
                                                            <td>
																<small class="text-muted">Nama foto</small> <br>
																<?php echo $row['name'] ?>
															</td>
                                                            <td>
																<small class="text-muted">Keterangan tambahan</small> <br>
																<?php echo $row['caption'] ?>
															</td>
                                                            <td>
																<small class="text-muted">Status Galeri</small> <br>
																<?php echo $row['status_ditampilkan'] ?>
															</td>
                                                            <td>
																<small class="text-muted">Dibuat pada</small> <br>
																<?php echo date('d M Y H.i A', strtotime($row['created_at'])) ?>
															</td>
                                                            <td>
                                                            
                                                                <a href="<?php echo base_url('gallery/edit/'. $row['id_gallery']) ?>" class="btn btn-sm btn-clean btn-icon" title="Edit details"><i class="la la-edit"></i></a>
                                                                <a href="javascript:;" data-toggle="modal" data-target="#hapus-<?php echo $row['id_gallery'] ?>" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="la la-trash"></i></a>
                                                            
                                                                

                                                                <!-- Modal-->
                                                                <div class="modal fade" id="hapus-<?php echo $row['id_gallery'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-body">
                                                                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <i aria-hidden="true" class="ki ki-close"></i>
                                                                                </button> -->

                                                                                <h4>Hapus Gallery Baloga</h4>
                                                                                <p>Apakah anda yakin ingin menghapus <br> gallery baloga bagian "<b><?php echo $row['name'] ?></b>"</p>


                                                                                <small>Data yang telah dihapus tidak akan <br>dipulihkan kembali</small>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-light-primary btn-sm font-weight-bold" data-dismiss="modal">Batal</button>
                                                                                <a href="<?php echo base_url('gallery/hapus/'. $row['id_gallery']) ?>" class="btn btn-primary btn-sm font-weight-bold">Hapus Sekarang</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            
                                                            </td>

                                                        </tr>

                                                    <?php $nomor++; endforeach; ?>
                                                <?php endif; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

					


						<!--begin::Page Vendors(used by this page)-->
						<script src="<?php echo base_url() ?>assets/dist/assets/plugins/custom/datatables/datatables.bundle.js"></script>
						<script>

							$('#kt_datatable').DataTable();
						
						</script>