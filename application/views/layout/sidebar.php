			<div class="side_bar dark_blue side_bg_img scroll_auto">
				 <ul id="dc_accordion" class="sidebar-menu tree">
					<li class="menu_title">Main</li>

					<?php if($this->session->userdata('level') == 'staff'){ ?>
					<li class="menu_sub">
						<a href="<?=site_url('staff');?>"> <i class="fa fa-home"></i> <span>Dashboard</span></a>
					</li>
					<li class="menu_sub">
						<a href="#"> <i class="fa fa-newspaper-o"></i> <span>Kegiatan </span> <span class="icon-arrow-down styleicon"></span> </a>
						<ul class="down_menu">
							<li>
								<a href="<?=site_url('staff/tambah');?>">Tambah Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('staff/semua');?>">Semua Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('staff/day');?>">Kegiatan Hari Ini</a>
							</li>
							<li>
								<a href="<?=site_url('staff/month');?>">Kegiatan Bulan Ini</a>
							</li>
						</ul>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('staff/progress');?>"> <i class="fa fa-bar-chart text-aqua"></i> <span>Progress</span></a>
					</li>
					<!-- <li class="menu_sub">
						<a href="<?=site_url('staff/calender');?>"> <i class="fa fa-calendar"></i> <span>Kalender </span> </a>
					</li> -->

					<?php } else if($this->session->userdata('level') == 'kepala'){ ?>
					<li class="menu_sub">
						<a href="<?=site_url('kepala');?>"> <i class="fa fa-home"></i> <span>Dashboard</span></a>
					</li>
					<li class="menu_sub">
						<a href="#"> <i class="fa fa-newspaper-o"></i> <span>Kegiatan </span> <span class="icon-arrow-down styleicon"></span> </a>
						<ul class="down_menu">
							<li>
								<a href="<?=site_url('kepala/tambah');?>">Tambah Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('kepala/semua');?>">Semua Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('kepala/day');?>">Kegiatan Hari Ini</a>
							</li>
							<li>
								<a href="<?=site_url('kepala/month');?>">Kegiatan Bulan Ini</a>
							</li>
						</ul>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('kepala/progress');?>"> <i class="fa fa-bar-chart text-aqua"></i> <span>Progress</span></a>
					</li>
					<li class="menu_sub">
						<a href="#"> <i class="fa fa-newspaper-o"></i> <span>Monitoring </span> <span class="icon-arrow-down styleicon"></span> </a>
						<ul class="down_menu">
							<li>
								<a href="<?=site_url('kepala/tambah_tugas');?>">Beri Tugas</a>
							</li>
							<li>
								<a href="<?=site_url('kepala/semua_unit');?>">Semua Kegiatan Unit</a>
							</li>
							<li>
								<a href="<?=site_url('kepala/day_unit');?>">Kegiatan Unit Hari Ini</a>
							</li>
							<li>
								<a href="<?=site_url('kepala/month_unit');?>">Kegiatan Unit Bulan Ini</a>
							</li>
						</ul>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('kepala/progress_unit');?>"> <i class="fa fa-bar-chart text-aqua"></i> <span>Progress dalam Unit</span></a>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('kepala/karyawan');?>"> <i class="fa fa-group text-aqua"></i> <span>Daftar Karyawan</span></a>
					</li>
					<!-- <li class="menu_sub">
						<a href="<?=site_url('kepala/calender');?>"> <i class="fa fa-calendar"></i> <span>Kalender </span> </a>
					</li> -->

					<?php } else if($this->session->userdata('level') == 'pimpinan'){ ?>
					<!-- <li class="menu_sub">
						<a href="<?=site_url('pimpinan');?>"> <i class="fa fa-home"></i> <span>Dashboard</span></a>
					</li>
					<li class="menu_sub">
						<a href="#"> <i class="fa fa-newspaper-o"></i> <span>Monitoring </span> <span class="icon-arrow-down styleicon"></span> </a>
						<ul class="down_menu">
							<li>
								<a href="<?=site_url('pimpinan/tambah_tugas');?>">Beri Tugas</a>
							</li>
							<li>
								<a href="<?=site_url('pimpinan/semua_unit');?>">Semua Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('pimpinan/day_unit');?>">Kegiatan Hari Ini</a>
							</li>
							<li>
								<a href="<?=site_url('pimpinan/month_unit');?>">Kegiatan Bulan Ini</a>
							</li>
						</ul>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('pimpinan/progress_unit');?>"> <i class="fa fa-bar-chart text-aqua"></i> <span>Progress</span></a>
					</li> -->
					<li class="menu_sub">
						<a href="<?=site_url('pimpinan/karyawan');?>"> <i class="fa fa-group text-aqua"></i> <span>Daftar Ranking Karyawan</span></a>
					</li>
					<!-- <li class="menu_sub">
						<a href="<?=site_url('pimpinan/calender');?>"> <i class="fa fa-calendar"></i> <span>Kalender </span> </a>
					</li> -->

					<?php } else if($this->session->userdata('level') == 'admin'){ ?>
					<li class="menu_sub">
						<a href="<?=site_url('admin');?>"> <i class="fa fa-home"></i> <span>Dashboard</span></a>
					</li>
					<li class="menu_sub">
						<a href="#"> <i class="fa fa-newspaper-o"></i> <span>Kegiatan </span> <span class="icon-arrow-down styleicon"></span> </a>
						<ul class="down_menu">
							<li>
								<a href="<?=site_url('admin/tambah');?>">Tambah Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('admin/semua');?>">Semua Kegiatan</a>
							</li>
							<li>
								<a href="<?=site_url('admin/cetak');?>">Cetak Kegiatan</a>
							</li>
						</ul>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('admin/progress');?>"> <i class="fa fa-bar-chart text-aqua"></i> <span>Progress</span></a>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('admin/calender');?>"> <i class="fa fa-calendar"></i> <span>Kalender </span> </a>
					</li>

					<?php } else { ?>
					<li class="menu_sub">
						<a href="#"> <i class="fa fa-home"></i> <span>Dashboard</span></a>
					</li>
					<?php } ?>
				</ul>
			</div>