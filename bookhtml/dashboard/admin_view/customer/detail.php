<?php require "../../layout/header.php";  ?>
<?php require "../../layout/slidebar.php" ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
			<div class="page-header">
				<div class="row">
					<div class="col-md-9">
					<h3>Customer Details </h3>	
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
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- Content Start -->	
	<div class="row">		
		<div class="col-md-12">
			<table class="table table-bordered">
			<tbody>
				<tr>
					<td>ID</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Name</td>
					<td>Mike</td>
				</tr>
				<tr>
					<td>Email Address</td>
					<td>mike@gmail.com</td>
				</tr>						
					<td>Book Name</td>
					<td>Sometimes We Ran-A Story From the Zombie Apocalypse</td>
				</tr>
				<tr>
					<td>Author</td>
					<td>Stephen Drivick</td>
				</tr>
			</tbody>
			</table>	
		</div>		
	</div>
	<!-- Body EndHere -->
<?php require "../../layout/footer.php";  ?>
