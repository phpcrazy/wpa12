<div class="row">
	<div class="col-md-12 ">
		<nav class=" navbar-default navbar-xs" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse  pull-right" style="margin-right:16px;">
			             <ul class="nav navbar-nav">
			      		<li><a href=""><i class="glyphicon glyphicon-home"></i></a></li>
			      		<li><a href="<?php echo $base_url; ?>/layout/checkout.php"><i class="glyphicon glyphicon-shopping-cart"></i></a></li>
			      		<li><a href="<?php echo $base_url; ?>/layout/profile.php"><i class="glyphicon glyphicon-user"></i></a></li>
			      		<li><a href="<?php echo $base_url; ?>/layout/login.php"><i class="glyphicon glyphicon-log-in"></i></a></li>
			    	</ul>
			</div>
		</div>
		</nav>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h1 class="text-danger logo"><a class="text-success" href="<?php echo $base_url; ?>">WPA 12 BookShop</a></h1>
		</div>
		<div class="col-md-6">
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12 ">
		<nav class="navbar " role="navigation">
		<div class="container">
			<ul class="nav navbar-nav">
			      <li class="dropdown">
			        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Books By Category <b class="caret"></b></a>
			        <ul class="dropdown-menu">
			          <li><a href="<?php echo $base_url; ?>/view/software.php">Software</a></li>
			          <li><a href="<?php echo $base_url; ?>/view/cook.php">Cook</a></li>
			          <li><a href="<?php echo $base_url; ?>/view/horror.php">Horror</a></li>
			          <li><a href="<?php echo $base_url; ?>/view/humor.php">Humor</a></li>
          			          <li><a href="<?php echo $base_url; ?>/view/music.php">Musics</a></li>
			        </ul>
			      </li>
			</ul>
			<ul class="nav navbar-nav">					
				<li><a href="<?php echo $base_url; ?>/view/category.php">New books</a></li>
				<li><a href="<?php echo $base_url; ?>/view/music.php">Bestsellers</a></li>
				<li><a href="<?php echo $base_url; ?>/view/software.php">Used Books</a></li>
			</ul>	
			<div class="input-group custom-search-form col-md-5 pull-right" style="margin-right:16px;">
			              <input type="text" class="form-control">
			              <span class="input-group-btn">
				              <button class="btn btn-default" type="button">
				              <span class="glyphicon glyphicon-search"></span>
			             </button>
			             </span>
			</div><!-- /input-group -->
		</div>

		</nav>
	</div>
</div>
<body>
