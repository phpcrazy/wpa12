 <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Student Information System</title>
 	<link rel="stylesheet" href="css/bootstrap.min.css">
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<div class="container">
 		<div id="header" class="row">
 			<div class="span12">
 				<h1>Student Information System</h1>
 			</div>
 		</div> <!-- end of header -->
 		<div id="menu" class="row">
 			<div class="span12">
 				<div class="navbar">
 					<div class="navbar-inner">
 						<a class="brand" href="#">SIS</a>
 						<ul class="nav">
 							<li><a href="#">Home</a></li>
 							<li><a href="#">All Students</a></li>
 							<li><a href="#">PHP Foundation</a></li>
 							<li><a href="#">PHP Advanced</a></li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div> <!-- end of menu -->	<div id="content" class="row">
 		<div class="span12">
 		<?php if($students != null) : ?>
 			<table class="table table-striped">
 				<tr>
 					<td>ID#</td>
 				<td><?php echo $students['id']; ?></td>
 				</tr>
 				<tr>
 					<td>Name</td>
 					<td><?php echo $students['name']; ?></td>
 				</tr>
 				<tr>
 					<td>Address</td>
 					<td><?php echo $students['address']; ?></td>
 				</tr>
 				<tr>
 					<td>Class</td>
 					<td><?php echo $students['class']; ?></td>
 				</tr>
 				<tr>
 					<td>Interest - Script</td>
 					<td>
 						<?php foreach($students['interest']['script'] as $script) : ?>
 							<?php echo $script . ', '; ?>
 						<?php endforeach; ?>
 					</td>
 					</tr>
 					<tr>
 						<td>Interest - Language</td>
 						<td>
 							<?php foreach($students['interest']['language'] as $language) : ?>
 							<?php echo $language . ', '; ?>
 						<?php endforeach; ?>
 						</td>
 						</tr>
 					</table>
 					<h3>Experience</h3>
 					<table class="table table-striped">
 						<tr>
 							<td>Myanmar Tutorials</td>
 							<td>From - 1993  To - 2013</td>
 						</tr>
 						<tr>
 							<td>Myanmar Tutors</td>
 							<td>From - 2012  To - 2013</td>
 						</tr>
 					</table>
 				<?php else : ?>
 					<h1>Not found</h1>
 				<?php endif; ?>
 				</div>
 			</div> <!-- end of content -->
 			<div id="footer" class="row">
 				<div class="span12">
 					<div class="navbar">
 						<ul class="nav">
 							<li><a href="http://thiha.me/studentinfosys">Home</a></li>
 							<li><a href="#">About Us</a></li>
 							<li><a href="#">Contact Us</a></li>
 						</ul>
 					</div>
 				</div>
 			</div>
 		</div> <!-- end container -->
 	</body>
 	</html>