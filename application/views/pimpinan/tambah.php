						<div class="page-heading">
							<div class="container-fluid">
								<div class="row d-flex align-items-center">
									<div class="col-12">
										<div class="page-breadcrumb">
											<h1>Form Input Group</h1>
										</div>
									</div>
									<div class="col-12  d-md-flex">
										<div class="breadcrumb_nav">
											<ol class="breadcrumb">
												<li>
													<i class="fa fa-home"></i>
													<a class="parent-item" href="index-2.html">Home</a>
													<i class="fa fa-angle-right"></i>
												</li>
												<li class="active">
													Form Input Group
												</li>
											</ol>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class=" col-12">
							<div class="card card-shadow mb-4">
								<div class="card-header">
									<div class="card-title">
										Iconic Input Group
									</div>
								</div>
								<div class="card-body">
									<form action="<?= base_url() ?>staff/simpan" method="POST" enctype="multipart/form-data">
										<div class="input-group">
											<input disabled="" name="tanggal" type="text" class="form-control" value="<?php echo date('l, d M Y') ?>" aria-label="Left Icon" aria-describedby="basic-addon11" >
											<span class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</span>
										</div>
										<br>
										<div class="input-group">
											<input disabled="" name="waktu" type="time" class="form-control" value="<?php echo date('H:i:s') ?>" aria-label="basic-addon11">
											<span class="input-group-addon">
												<i class="ion-android-time"></i>
											</span>
										</div>
										<br>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="icon-note"></i>
											</span>
											<input name="kegiatan" type="text" class="form-control" placeholder="Nama Kegiatan" aria-label="Amount (to the nearest dollar)">
										</div>
										<h6 class="mt-3">Foto</h6>
		                                <!-- <div class="custom-file"> -->
		                                	<input name="gambar" type="file" accept="image/*" capture="camera, gallery">
		                                	<!-- <span class="custom-file-control"></span> -->
		                                <!-- </div> -->
		                                <h6 class="mt-3">File</h6>
		                                <!-- <div class="custom-file"> -->
		                                	<input name="dokumen" type="file" id="file2">
		                                	<!-- <span class="custom-file-control"></span> -->
		                                <!-- </div> -->
		                                <p>
		                                <div class="btn-demo">
			                                <button type="submit" class="btn btn-primary">Simpan</button>
			                                <!-- <button type="button" class="btn btn-light">Batal</button> -->
		                            	</div>
	                            	</form>
								</div>
							</div>
						</div>