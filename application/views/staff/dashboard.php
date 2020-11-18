			
				<div class="container-fluid">
					<!-- breadcrumb -->
					<div class="page-heading">
						<div class="row d-flex align-items-center">
							<div class="col-12">
								<div class="page-breadcrumb">
									<h1>Dashboard</h1>
								</div>
							</div>
							<div class="col-12  d-md-flex">
								<div class="breadcrumb_nav">
									<ol class="breadcrumb">
										<li>
											<i class="fa fa-home"></i>
											<a class="parent-item" href="#">Home</a>
											<i class="fa fa-angle-right"></i>
										</li>
										<li class="active">
											Dashboard
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
					<!-- breadcrumb_End -->

					<!-- Section -->
					<section class="chart_section">

						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="info_items bg_green d-flex align-items-center">
									<span class="info_items_icon">
										<i class="fa fa-pie-chart"></i>
									</span>
									<div class="info_item_content">
										<span class="info_items_text">Masih Proses</span>
										<span class="info_items_number"><?= count($progress) ?></span>
										<!-- <div class="progress">
											<div class="progress-bar width-45"></div>
										</div>
										<span class="progress-description"> 45% Increase in 28 Days </span> -->
									</div>
								</div>
							</div>
							<!-- /info-box-content -->
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="info_items bg_yellow d-flex align-items-center">
									<span class="info_items_icon">
										<i class="fa fa-newspaper-o"></i>
									</span>
									<div class="info_item_content">
										<span class="info_items_text">Hari Ini</span>
										<span class="info_items_number"><?= count($day) ?></span>
										<!-- <div class="progress">
											<div class="progress-bar width-40"></div>
										</div>
										<span class="progress-description"> 40% Increase in 28 Days </span> -->
									</div>
								</div>
							</div>
							<!-- /info-box-content -->
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="info_items bg_blue d-flex align-items-center">
									<span class="info_items_icon">
										<i class="fa fa-list"></i>
										<!-- <i class="ion-ios-book"></i> -->
									</span>
									<div class="info_item_content">
										<span class="info_items_text">Bulan Ini</span>
										<span class="info_items_number"><?= count($month) ?></span>
										<!-- <div class="progress">
											<div class="progress-bar width-85"></div>
										</div>
										<span class="progress-description"> 85% Increase in 28 Days </span> -->
									</div>
								</div>
							</div>
							<!-- /info-box-content -->
							<div class="col-lg-3 col-md-6 col-sm-12">
								<div class="bg_pink info_items d-flex align-items-center">
									<span class="info_items_icon">
										<i class="ion-ios-book"></i>
										<!-- <i class="fa fa-list"></i> -->
									</span>
									<div class="info_item_content">
										<span class="info_items_text">Total Kegiatan</span>
										<span class="info_items_number"><?= count($data) ?></span>
										<!-- <span>$</span>
										<div class="progress">
											<div class="progress-bar width-50"></div>
										</div>
										<span class="progress-description"> 50% Increase in 28 Days </span> -->
									</div>
									<!-- /.info-box-content -->
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-12">
								<div class="card card-shadow mb-4">
									<div class="card-header">
										<div class="card-title">
											Area Chart
										</div>
									</div>
									<div class="card-body">
										<div id="area-chart" class="height_wp"></div>
									</div>
								</div>
							</div>
						</div>
						

					</section>
					<!-- Section_End -->
				<a href="<?=site_url('staff/tambah');?>" class="act-btn">
					+
				</a>		
				</div>