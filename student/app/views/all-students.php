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
	</div> <!-- end of menu -->	
	<div id="content" class="row">
		<div class="span12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($students as $student) { ?>
						<tr>
							<td><?php echo $student['id']; ?></td>
							<td><?php echo $student['name']; ?></td>
							<td><?php echo $student['address']; ?></td>
							<td><a href="<?php echo 'http://wpa12.local/index.php?page=detail&id=' . $student[
							'id']; ?>">Detail</a></td>
						</tr>	
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
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