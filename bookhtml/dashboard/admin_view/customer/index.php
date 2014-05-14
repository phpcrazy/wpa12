<?php require "../../layout/header.php";  ?>
<?php require "../../layout/slidebar.php";  ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">All Customer</h3>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- Content Start -->
	<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
				<thead>
					<tr>
						<th  style="text-align: center;" >
							<input type="checkbox">
						</th>
						<th>ID</th>
						<th>Name</th>
						<th>Email Address</th>
						<th>Category</th>
						<th>Book Name</th>
						<th>Author</th>
						<th>Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td  style="text-align: center;" >
							<input type="checkbox">
						</td>
						<td>1</td>
						<td>Mike</td>
						<td>mike@gmail.com</td>
						<td>Software</td>
						<td>A Year With Symfony Writing healthy, reusable Symfony2 code</td>
						<td>Matthias Noback</td>
						<td>2014/2/21</td>
						<td><a href="detail.php">detail</a></td>
					</tr>
					<tr>
						<td  style="text-align: center;" >
							<input type="checkbox">
						</td>
						<td>2</td>
						<td>Nicky</td>
						<td>nicky@gmail.com</td>
						<td>Humor</td>
						<td>Gyrovagues An Anthology of Interest</td>
						<td>Jaap Kemp</td>
						<td>2014/2/19</td>
						<td><a href="detail.php">detail</a></td>
					</tr>
					<tr>
						<td  style="text-align: center;" >
							<input type="checkbox">
						</td>
						<td>3</td>
						<td>Cherry</td>
						<td>cherry@gmail.com</td>
						<td>Cook</td>
						<td>Our Best Bites: Mormon Moms in the Kitchen Cookbook (Hardcover)</td>
						<td>Sara Wells, Kate Jones</td>
						<td>2014/2/20</td>
						<td><a href="detail.php">detail</a></td>
					</tr>
				</tbody>
			</table>				
			</div>
		</div>    
</div>
<!-- /#wrapper -->
<?php require "../../layout/footer.php";  ?>
