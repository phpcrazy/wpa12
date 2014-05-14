<?php require "../layout/header.php";  ?>
<?php require "../layout/head.php";  ?>
<!-- Body Start Here --> 
<div class="container">
 	<ol class="breadcrumb">
                      <li><a href="<?php echo $base_url; ?>">Home</a></li>
                      <li><a href="<?php echo $base_url; ?>/view/category.php">Category</a></li>
                      <li class="active">all product by category</li>
             </ol>
	<div class="row">
		<div class="col-md-2">
			<?php require "category_table.php";  ?>
			<!--Sidebar content-->			    
		</div><!--Span2-->
		<div class="col-md-10">
			<table class="table table-bordered">
				<tr class="info">
					<td>MOST POPULAR BOOKS</td>
				</tr>
				<tr>
					<td><div class="col-md-3">
						<img src="../img/RomneyTableCkbk_list.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">The Romney Family Table (Hardcover)</h4></a>
					<p class="text-info">
						by Ann Romney</br>
						Last Price <strike>$29.99</strike>
						Our Price $20.09 </br>
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
						Last Price <strike>$37.99</strike>
						Our Price $35.12 </br>
						<a  href ="#" class="nav nav-pills">Learn More</a>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3">
						<img src="../img/small.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">Sometimes We Ran-A Story From the Zombie Apocalypse</h4></a>
					<p class="text-info">
						by Stephen Drivick</br>
						Last Price <strike>$37.99</strike>
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
						Last Price <strike>$36.99</strike>
						Our Price $35.12 </br>
						<a  href ="#" class="nav nav-pills">Learn More</a>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3">
						<img src="../img/small_004.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">How to build a Home Entertainment Personal Computer</h4></a>
					<p class="text-info">
						by Sandeep Giri</br>
						Last Price <strike>$26.08</strike>
						Our Price $22.12 </br>
						<a  href ="#" class="nav nav-pills">Learn More</a>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3">
						<img src="../img/small_011.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">A Year With Symfony
						Writing healthy, reusable Symfony2 code</h4></a>
						<p class="text-info">
							by Matthias Noback</br>
							Last Price <strike>$26.08</strike>
							Our Price $22.12 </br>
							<a  href ="#" class="nav nav-pills">Learn More</a>
						</p>
					</td>
				</tr>

			</table> 
		</div> 
	</div>
</div>
<!-- Body EndHere -->
<?php require "../layout/footer.php";  ?>