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
					<td>MOST POPULAR  HUMOR</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/small_002hu.jpg" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">Gyrovagues
							An Anthology of Interest</h4></a>
							<p class="text-info">
								by Jaap Kemp</br>
								List Price <strike>$37.99</strike>
								Our Price $35.12 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/smallhu.jpg" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">Приключения большой девочки в плоском городе</h4></a>
							<p class="text-info">
								by Юля Пилявская</br>
								List Price <strike>$36.99</strike>
								Our Price $35.12 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/smallhu2.png" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">The Light of the Dragons</h4></a>
							<p class="text-info">
								by Brynn Charity</br>
								List Price <strike>$37.99</strike>
								Our Price $35.12 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
				</table> 
			</div><!--row fluid-->
		</div><!--container fluid-->
<?php require "../layout/footer.php";  ?>