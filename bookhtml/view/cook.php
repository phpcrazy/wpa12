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
					<td>MOST POPULAR  COOK</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/50531914_Our_Best_Bites_list.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">Our Best Bites: Mormon Moms in the Kitchen Cookbook (Hardcover)</h4></a>
						<p class="text-info">
							by Sara Wells, Kate Jones</br>
							List Price <strike>$44.08</strike>
							Our Price $35.12 </br>
							<a  href ="#" class="nav nav-pills">Learn More</a>
						</p>
					</td>
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
						<img src="../img/Savoring_the_Seasons_list.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">Savoring the Seasons with Our Best Bites Cookbook (Hardcover)</h4></a>
					<p class="text-info">
						by Sara Wells, Kate Jones</br>
						List Price <strike>$36.08</strike>
						Our Price 35.12 </br>
						<a  href ="#" class="nav nav-pills">Learn More</a>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3">
						<img src="../img/food_list.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">The Food Nanny Rescues Dinner Again! </h4>
						Cookbook (Paperback)</h4>
						<p class="text-info">
							by Liz Edmunds</br>
							List Price <strike>$35.08</strike>
							Our Price 31.12 </br>
							<a  href ="#" class="nav nav-pills">Learn More</a>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/SixSistersStuffCookbook_list.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">Six Sisters' Stuff (Paperback)</h4></a>
						<p class="text-info">
							by Six Sisters' Stuff</br>
							List Price <strike>$35.08</strike>
							Our Price 31.12 </br>
							<a  href ="#" class="nav nav-pills">Learn More</a>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/cast_list.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">The Cast Iron Skillet Cookbook: 2nd Edition (Paperback)</h4></a>
						<p class="text-info">
							by Sharon Kramis, Julie Kramis-Hearne</br>
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