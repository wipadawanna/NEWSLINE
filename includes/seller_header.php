<?php
	$user2 = User::getUser();
	$uid= $user2['user_id'];
?>
<html>
<head>
<meta charset="utf-8">
<script src ="<?php echo resolveURL("js/jquery-1.9.1.js"); ?>"></script>
<link rel="stylesheet" href="<?php echo resolveURL("css/bootstrap.min.css");?>">
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo resolveURL("js/bootstrap.min.js");?>"></script>
<script type="text/javascript" src="<?php echo resolveURL("js/jquery.form.js"); ?>"></script>
<link href="<?php echo resolveURL("css/non-responsive.css");?>" rel="stylesheet">
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top"> 
	<div style="margin-left:150px;margin-right:150px">
		<nav role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=".">ShoPPy</a>
			</div>
			
			
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li id="menu_register_seller"><a href="<?php echo resolveURL("regis_seller.php");?>">Register Seller</a></li>
					<li id="menu_create_item"><a href="<?php echo resolveURL("create_item.php");?>">Create Item</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo resolveURL("cat.php?cat=1");?>">Products</a></li>
							<li><a href="<?php echo resolveURL("change_profile_ui.php");?>">Change My Profile</a></li>
							<li><a href="<?php echo resolveURL("send_item_ui.php");?>">Send Items</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
					<a>
					<?php
						$user = User::getUser();
						echo $user['full_name'];
					?>
					</a>
					</li>
					<li><a href="<?php echo resolveURL("logout.php");?>">Log out</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
<div style="height:60px">
</div>
</body>
</html>
