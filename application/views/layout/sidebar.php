			<div class="side_bar dark_blue side_bg_img scroll_auto">
				 <ul id="dc_accordion" class="sidebar-menu tree">
					<li class="menu_title">Main</li>
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
								<a href="<?=site_url('staff/cetak');?>">Cetak Kegiatan</a>
							</li>
						</ul>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('staff/progress');?>"> <i class="fa fa-bar-chart text-aqua"></i> <span>Progress</span></a>
					</li>
					<li class="menu_sub">
						<a href="<?=site_url('staff/calender');?>"> <i class="fa fa-calendar"></i> <span>Kalender </span> </a>
					</li>
				</ul>
			</div>