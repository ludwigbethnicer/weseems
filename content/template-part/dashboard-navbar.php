<?php
	include_once "../../inc/xsession.php";
?>

<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
	<i class="fas fa-bars"></i>
</a>

<!-- sidebar-wrapper  -->
<nav id="sidebar" class="sidebar-wrapper">
	<div class="sidebar-content">
		<div class="sidebar-brand">
			<a href="../../">Visit Site</a>
			<div id="close-sidebar">
				<i class="fas fa-times"></i>
			</div>
		</div>

		<!-- Current User Profile -->
		<div class="sidebar-header">
			<div class="user-pic">
				<img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture">
			</div>
			<div class="user-info">
				<span class="user-name"><?php echo $givename; ?>
					<strong><?php echo $lastname; ?></strong>
				</span>
				<span class="user-role"><?php echo $ptitle; ?></span>
				<span class="user-status">
					<i class="fa fa-circle"></i>
					<span>Online</span>
				</span>
			</div>
		</div>
		<!-- Current User Profile  -->

		<!-- Menu  -->
		<div class="sidebar-menu">
			<ul>
				<li class="header-menu">
					<span>System</span>
				</li>
				<li>
					<a href="../../routes/dashboard">
						<i class="fas fa-server"></i>
						<span>Dashboard</span>
						<span class="badge badge-pill badge-primary">Main</span>
					</a>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fas fa-users"></i>
						<span>User</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">All User</a>
							</li>
							<li>
								<a href="#">Add New</a>
							</li>
							<li>
								<a href="#">Profile</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fas fa-cogs"></i>
						<span>Setting</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">General</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Writing</a>
							</li>
							<li>
								<a href="#">Reading</a>
							</li>
							<li>
								<a href="#">Discussion</a>
							</li>
							<li>
								<a href="#">Privacy</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="sidebar-dropdown">
					<a href="#">
						<i class="fas fa-palette"></i>
						<span>Apperance</span>
					</a>
					<div class="sidebar-submenu">
						<ul>
							<li>
								<a href="#">Theme</a>
							</li>
							<li>
								<a href="#">Color</a>
							</li>
							<li>
								<a href="#">Banner</a>
							</li>
						</ul>
					</div>
				</li>

				<li class="header-menu">
					<span>Extra</span>
				</li>
				<li>
					<a href="../../routes/crud" title="Create Read Update Delete Search">
						<i class="fa fa-book"></i>
						<span>CRUDs</span>
						<span class="badge badge-pill badge-secondary">Sample</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- Menu  -->
	</div>

	<!-- Notification  -->
	<div class="sidebar-footer">
		<a href="#" title="Notification">
			<i class="fa fa-bell"></i>
			<span class="badge badge-pill badge-warning notification">3</span>
		</a>
		<a href="#" title="Message">
			<i class="fa fa-envelope"></i>
			<span class="badge badge-pill badge-success notification">7</span>
		</a>
		<a href="#" title="Settings">
			<i class="fa fa-cog"></i>
			<span class="badge-sonar"></span>
		</a>
		<a href="" title="Refresh">
			<i class="fas fa-sync"></i>
		</a>
		<a href="../../inc/logout" title="Logout">
			<i class="fa fa-power-off"></i>
		</a>
	</div>
	<!-- Notification  -->
</nav>
<!-- sidebar-wrapper  -->