<?php require "../layout/header.php";  ?>
<?php require "../layout/head.php";  ?>
	<!-- Body Start Here --> 
	<div class="container">
		<div class="row customer-profile-container">
			<div class="col-md-3">
				<div class="panel-group" id="accordion">  <!-- Accordion Multi Level List Group [ Boosnipp ] -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<span class="glyphicon glyphicon-user">
								</span>My Account
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in">
							<ul class="list-group">
								<li class="list-group-item"><span class="glyphicon glyphicon-comment text-success"></span><a href="profile.php">Account Information</a></li>
								<li class="list-group-item"><span class="glyphicon glyphicon-wrench text-success"></span><a href="reset_password.php">Reset Password</a></li>
								<li class="list-group-item"><span class="glyphicon glyphicon-list-alt text-primary"></span><a href="order_history.php">My orders</a></li>
							</ul>
						</div>
					</div>	 
				</div> 
			</div>	
			<div class="col-md-9">
				<h1 class="text-danger">My Account</h1>
				<hr/>
				<p>'My Waterstones account' allows you to manage your account preferences. Under 'Personal details' you can update your billing details, amend your email address and password. Use the 'My orders' area to check on the progress of your goods, and the 'Account details' area to check the balance of your 'e-wallet' or update a 'Wish list'</p>		
			</div>				  
		</div>
	</div>
<!-- Body EndHere -->
<?php require "../layout/footer.php";  ?>
