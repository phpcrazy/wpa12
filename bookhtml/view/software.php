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
			<td>MOST POPULAR SOFTWARE BOOKS</td>
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
						List Price <strike>$26.08</strike>
						Our Price $22.12 </br>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-md-3">
						<img src="../img/small_016.jpg" class="img-polaroid">
					</div>
					<a href="detail.php"><h4 class="text-info">Laravel: Code Happy
						Application development with the Laravel for beginners.</h4></a>
						<p class="text-info">
							by Dayle Rees</br>
							List Price <strike>$36.08</strike>
							Our Price 35.12 </br>
						</p>
					</td>
				</tr>
				<tr>
					<td>
						<div class="col-md-3">
							<img src="../img/small_040.png" class="img-polaroid">
						</div>
						<a href="detail.php"><h4 class="text-info">.Software Architecture for Developers
							A developer-friendly guide</h4></a>
							<p class="text-info">
								by Simon Brown</br>
								List Price <strike>$35.08</strike>
								Our Price 31.12 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/small_021.png" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">Principles of Object-Oriented Programming in JavaScript</h4></a>
							<p class="text-info">
								by Nicholas C. Zakas</br>
								List Price <strike>$35.08</strike>
								Our Price 31.12 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/small_018.jpg" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">Laravel 4 Cookbook</h4></a>
							<p class="text-info">
								by Christopher Pitt and Taylor Otwell</br>
								List Price <strike>$35.08</strike>
								Our Price 31.12 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/small_007.jpg" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">Webentwicklung mit Zend Framework 2</h4></a>
							<p class="text-info">
								by Michael Romer</br>
								List Price <strike>$39.08</strike>
								Our Price 36.02 </br>
								<a  href ="#" class="nav nav-pills">Learn More</a>
							</p>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-md-3">
								<img src="../img/small_011.png" class="img-polaroid">
							</div>
							<a href="detail.php"><h4 class="text-info">Rapid Prototyping with JS
								Agile JavaScript Development </h4></a>
								<p class="text-info">
									by Azat Mardanov</br>
									List Price <strike>$39.08</strike>
									Our Price 36.02 </br>
									<a  href ="#" class="nav nav-pills">Learn More</a>
								</p>
							</td>
						</tr>

					</table> 
	</div><!--row fluid-->
</div><!--container fluid-->
<?php require "../layout/footer.php";  ?>