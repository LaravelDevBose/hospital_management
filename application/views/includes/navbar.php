<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Arup-->
<!-- * Date: 12/11/2018-->
<!-- * Time: 10:34 AM-->
<!-- */-->
<div class="page-header navbar navbar-fixed-top">
	<div class="page-header-inner ">
		<!-- logo start -->
		<div class="page-logo">
			<a href="index-2.html">
				<span class="logo-icon fa fa-stethoscope fa-rotate-45"></span>
				<span class="logo-default" >REDSTAR</span> </a>
		</div>
		<!-- logo end -->
		<ul class="nav navbar-nav navbar-left in">
			<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
		</ul>
		<form class="search-form-opened" action="#" method="GET">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search..." name="query">
				<span class="input-group-btn">
                          <a href="javascript:;" class="btn submit">
                             <i class="icon-magnifier"></i>
                           </a>
                        </span>
			</div>
		</form>
		<!-- start mobile menu -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
			<span></span>
		</a>
		<!-- end mobile menu -->
		<!-- start header menu -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<i class="fa fa-bell-o"></i>
						<span class="badge headerBadgeColor1"> 6 </span>
					</a>

				</li>
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
						<?php
							$avatar = base_url().'assets/img/dp.jpg';
							if($this->auth->avatar){
								$avatar = $this->auth->avatar;
								if(!file_exists($avatar) || !@getimagesize($avatar)){
									$avatar = base_url().'assets/img/dp.jpg';
								}
							}
						?>
						<img alt="" class="img-circle " src="<?= $avatar ?>" />
						<span class="username username-hide-on-mobile"> <?= ucfirst($this->auth->username) ?> </span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?= base_url('admin_profile')?>">
								<i class="icon-user"></i> Profile </a>
						</li>

						<li>
							<a href="<?= base_url('admin_logout')?>">
								<i class="icon-logout"></i> Log Out </a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
