<?php require "../layout/header.php";  ?>
<?php require "../layout/head.php";  ?>
<div class="container">
 	<ol class="breadcrumb">
		<li><a href="<?php echo $base_url; ?>">Home</a></li>
		<li><a href="<?php echo $base_url; ?>/view/category.php">Category</a></li>
		<li class="active">software</li>
	</ol>
	<div class="row">
		<div class="col-md-2">
			<?php require "category_table.php";  ?>
		</div> <!--Span2-->
		<div class="col-md-10">
			<table class="table table-bordered">
				<tr class="info">
					<td>MOST POPULAR  HORROR</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/small.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">Sometimes We Ran-A Story From the Zombie Apocalypse</h4></a>
						<p class="text-info">
							by Stephen Drivick</br>
							List Price <strike>$37.99</strike>
							Our Price $35.12 </br>
							<a  href ="#" class="nav nav-pills">Learn More</a>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/small_002.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">Sometimes We Ran2-Community</h4></a>
						<p class="text-info">
							by Stephen Drivick</br>
							List Price <strike>$36.99</strike>
							Our Price $35.12 </br>
							<a  href ="#" class="nav nav-pills">Learn More</a>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/small_0034.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">''Neden korktuğuna dikkat et...''</h4></a>
						<p class="text-info">
							by C.C.DENGİZ</br>
							List Price <strike>$37.99</strike>
							Our Price $35.12 </br>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/small.png" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">Rose in Ice</h4>
							A Short Story Collection (Paperback)</h4>
							<p class="text-info">
								by Ellana Rose Thornton-Wheybrew</br>
								List Price <strike>$35.08</strike>
								Our Price 31.12 </br>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/small_0045h.jpg" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">Senate of Blood
								A weekly serial; complete in 70 parts</h4></a>
								<p class="text-info">
									by Ellana Rose Thornton-Wheybrew</br>
									List Price <strike>$35.08</strike>
									Our Price 31.12 </br>
									<a  href ="#" class="nav nav-pills">Learn More</a>
								</p>
							</td>
						</tr>
						
					</table> 
				</div><!--row fluid-->
			</div><!--container fluid-->
<?php require "../layout/footer.php";  ?>