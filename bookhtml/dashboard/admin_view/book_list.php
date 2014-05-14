<?php require "../layout/header.php";  ?>
<?php require "../layout/slidebar.php";  ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<div class="row">
					<div class="col-md-9">
					<h3>All Books</h3>	
					</div>
					<div class="col-md-3" style="margin-top:20px;">
						<div class="col-md-8">					
							<select class="form-control">
								<option>Disable</option>
								<option>Edit</option>
								<option>Delete</option>								
							</select>
						</div>
							<button class="btn btn-primary col-md-4" type="button">Submit</button>
					</div>
				</div>				
			</div>
		<!-- /.col-lg-12 -->
		
	</div>
	<!-- Content Start -->
	<div class="row">			
		<div class="col-md-12">			
			<div class="row">
				<div class="col-md-12">
												
					<table class="table table-striped table-bordered table-hover table-striped tablesorter" >
							<thead>
								<tr role="row">
									<th  style="text-align: center;" >
										<input type="checkbox">
									</th>
									<th>IBSN</th>
									<th>Book Title</th>
									<th>Author</th>
									<th>Price</th>
									<th></th>
								</tr>
							</thead>
							<tbody>									
								<tr>
									<td  style="text-align: center;">
										<input type="checkbox">
									</td>
									<td>9780007485871</td>
									<td>The Romney Family Table (Hardcover)</td>
									<td>Ann Romney</td>
									<td>$20.09</td>
									<td><a href="add_book.php">Detail</a></td>
								</tr>
								<tr>
									<td  style="text-align: center;">
										<input type="checkbox">
									</td>
									<td>9780007847421</td>
									<td>A Year With Symfony</td>
									<td>Matthias Noback</td>
									<td>$22.12</td>
									<td><a href="add_book.php">Detail</a></td>
								</tr>
								<tr>
									<td style="text-align: center;">
										<input type="checkbox">
									</td>
									<td>3</td>
									<td>Larry</td>
									<td>the Bird</td>
									<td>@twitter</td>
									<td><a href="add_book.php">Detail</a></td>
								</tr>
							</tbody>
						</table>	
				</div>
			</div>	
		</div>			
	</div>   
	<!-- Content End -->
</div>
<!-- /#wrapper -->
<?php require "../layout/footer.php";  ?>
