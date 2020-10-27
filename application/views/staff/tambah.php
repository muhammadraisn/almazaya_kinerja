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
									<form>
										<div class="input-group">
											<input type="date" class="form-control" value="<?php echo date('l, d M Y') ?>" aria-label="Left Icon" aria-describedby="basic-addon11" >
										</div>
										<br>
										<div class="input-group">
											<input type="time" class="form-control" value="<?php echo date('H:i:s') ?>" aria-label="basic-addon11">
										</div>
										<br>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="icon-note"></i>
											</span>
											<input type="text" class="form-control" placeholder="Nama Kegiatan" aria-label="Amount (to the nearest dollar)">
										</div>
										<h6 class="mt-3">Foto</h6>
		                                <label class="custom-file">
		                                	<input type="file" id="file2" class="custom-file-input">
		                                	<span class="custom-file-control"></span>
		                                </label>
		                                <h6 class="mt-3">File</h6>
		                                <label class="custom-file">
		                                	<input name="userfile" type="file" accept="image/*" capture="camera, gallery" />
		                                	<span class="custom-file-control"></span>
		                                </label>
		                                <p>
		                                <div class="btn-demo">
			                                <button type="button" class="btn btn-primary">Simpan</button>
			                                <button type="button" class="btn btn-light">Batal</button>
		                            	</div>
	                            	</form>
								</div>
							</div>
						</div>