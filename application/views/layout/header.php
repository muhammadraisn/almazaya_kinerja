<header class="main-header">
			<div class="container_header">
				<div class="logo d-flex align-items-center">
					<a href="#"> <strong class="logo_icon"> <img src="<?php echo base_url()?>assets/images/small-logo.png" alt=""> </strong> <span class="logo-default">
							<img src="<?php echo base_url()?>assets/images/logo1.png" alt=""> </span> </a>
					<div class="icon_menu full_menu">
						<a href="#!" class="menu-toggler sidebar-toggler"></a>
					</div>
				</div>
				<div class="right_detail">
					<div class="row d-flex align-items-center min-h pos-md-r">
						<div class="col-3 search_col ">
							<div class="top_function">

								<div class="search">
									<a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view collapsed"
									 href="javascript:void(0);" aria-expanded="false"> <i class=" icon-magnifier"></i> </a>
									<form id="search_form" role="search" class="search-form collapse" action="#">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search...">
											<button type="button" class="btn" data-target="#search_form" data-toggle="collapse" aria-label="Close">
												<i class="ion-android-search"></i>
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class=" col-9 d-flex justify-content-end">
							<div class="right_bar_top d-flex align-items-center">

								<!-- DropDown_Inbox -->
								<!-- <div class="dropdown dropdown-inbox">
									<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
										<i class="fa fa-envelope-o"></i> <span class="badge_coun"> 2 </span> </a>
									<ul class="dropdown-menu scroll_auto height_fixed">
										<li class="bigger">
											<h3><span class="bold">Messages</span></h3>
											<span class="notification-label">New 2</span>
										</li>
										<li>
											<ul class="dropdown-menu-list">
												<li>
													<a href="#"> <span class="photo"> <img src="<?php echo base_url()?>assets/images/about-1.jpg" class="img-circle" alt=""> </span>
														<span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span>
														<span class="message"> Jatin I found you on LinkedIn... </span> </a>
												</li>
												<li>
													<a href="#"> <span class="photo"> <img src="<?php echo base_url()?>assets/images/about-1.jpg" class="img-circle" alt=""> </span>
														<span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span>
														<span class="message"> Jatin I found you on LinkedIn... </span> </a>
												</li>
												<li>
													<a href="#"> <span class="photo"> <img src="<?php echo base_url()?>assets/images/about-1.jpg" class="img-circle" alt=""> </span>
														<span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span>
														<span class="message"> Jatin I found you on LinkedIn... </span> </a>
												</li>
												<li>
													<a href="#"> <span class="photo"> <img src="<?php echo base_url()?>assets/images/about-1.jpg" class="img-circle" alt=""> </span>
														<span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span>
														<span class="message"> Jatin I found you on LinkedIn... </span> </a>
												</li>
												<li>
													<a href="#"> <span class="photo"> <img src="<?php echo base_url()?>assets/images/about-1.jpg" class="img-circle" alt=""> </span>
														<span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span>
														<span class="message"> Jatin I found you on LinkedIn... </span> </a>
												</li>
												<li>
													<a href="#"> <span class="photo"> <img src="<?php echo base_url()?>assets/images/about-1.jpg" class="img-circle" alt=""> </span>
														<span class="subject"> <span class="from"> Sarah Smith </span> <span class="time">Just Now </span> </span>
														<span class="message"> Jatin I found you on LinkedIn... </span> </a>
												</li>
											</ul>
										</li>
									</ul>
								</div> -->
								<!--DropDown_Inbox_End -->
								<!-- Dropdown_User -->
								<div class="dropdown dropdown-user">
									<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"
									 aria-expanded="true"> 
									 <?php if ($this->session->userdata('foto')==NULL): ?>
									 <!-- <img class="img-circle pro_pic" src="<?php echo base_url() ?> upload/foto_user/user5.png" alt=""> </a> -->
									 <?php else: ?>
									 <img class="img-circle pro_pic" src="<?php echo base_url().'upload/foto_user/'.$this->session->userdata('foto') ?>" alt=""> </a>
									<?php endif ?>
									<ul class="dropdown-menu dropdown-menu-default">
										<li>
											<a> <?= $this->session->userdata('nama') ?> </a>
										</li>
										<li>
											<a href="#"> <i class="icon-user"></i> Ubah Foto </a>
										</li>
										<li>
											<a href="#"> <i class="icon-settings"></i> Ubah Password </a>
										</li>
										<!-- <li>
											<a href="#"> <i class="icon-directions"></i> Help </a>
										</li>
										<li class="divider"></li>
										<li>
											<a href="https://theembazaar.com/?password-protected=login&amp;redirect_to=https%3A%2F%2Ftheembazaar.com%2Fdemo%2Fthemesfolios%2Fintellir-mobile%2Fv1%2Flock_screen.html"> <i class="icon-lock"></i> Lock </a>
										</li> -->
										<li>
											<a href="<?php echo base_url()?>auth/logout"> <i class="icon-logout"></i> Log Out </a>
										</li>
									</ul>
								</div>
								<!-- Dropdown_User_End -->
							</div>
						</div>
					</div>
				</div>
			</div>

		</header>