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
			<td>MOST POPULAR  MUSICS BOOK</td>
		</tr>
			<tr>
			<td>
			<div class="col-md-3">
			<img src="../img/small_004.jpg" class="img-polaroid">
			</div>
			<a href="detail.php"><h4 class="text-info">How to build a Home Entertainment Personal Computer</h4></a>
			<p class="text-info">
			by Sandeep Giri</br>
			List Price <strike>$26.08</strike>
			Our Price $22.12 </br>
			<a  href ="#" class="nav nav-pills">Learn More</a>
			</p>
			</td>
		</tr>
		<tr>
			<td>
			<div class="col-md-3">
			<img src="../img/smallms.png" class="img-polaroid">
			</div>
			<a href="detail.php"><h4 class="text-info">Prepare, Produce, Publish
			Your First Podcast, In 3 Easy Steps!</h4></a>
			<p class="text-info">
			by Derick Bailey</br>
			List Price <strike>$36.99</strike>
			Our Price $35.12 </br>
			<a  href ="#" class="nav nav-pills">Learn More</a>
			</p>
			</td>
		</tr>
		<tr>
			<td>
			<div class="col-md-3">
			<img src="../img/small_002ms.jpg" class="img-polaroid">
			</div>
			<a href="detail.php"><h4 class="text-info">Playing The Native American Flute</h4></a>
			<p class="text-info">
			by Lee Miles</br>
			List Price <strike>$37.99</strike>
			Our Price $35.12 </br>
			<a  href ="#" class="nav nav-pills">Learn More</a>
			</p>
			</td>
		</tr>
		<tr>
			<td>
			<div class="col-md-3">
			<img src="../img/small_002ms3.png" class="img-polaroid">
			</div>
			<a href="detail.php"><h4 class="text-info">Le Guide Ultime et Zen de Max for Live</h4></a>
			<p class="text-info">
			by Julien Bayle</br>
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