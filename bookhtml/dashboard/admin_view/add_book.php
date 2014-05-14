<?php require "../layout/header.php";  ?>
<?php require "../layout/slidebar.php";  ?>
      <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Add Books</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- Content Start -->
<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail1" class="col-lg-2 control-label">Category</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="addcategory" placeholder="Add Category">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-lg-2 control-label">BookName</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="addcategory" placeholder="Add Category">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-lg-2 control-label">Author</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="addcategory" placeholder="Add Category">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-lg-2 control-label">price</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="addcategory" placeholder="Add Category">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-lg-2 control-label">Image</label>
					<div class="col-lg-10">
						<input type="file" id="exampleInputFile">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword1" class="col-lg-2 control-label">Description</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group input-append date" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy">
					<label for="inputPassword1" class="col-lg-2 control-label">Publisher Date</label>
					<div class="col-lg-10">
						<input  class="form-control" data-date-format="mm/dd/yy" id="dp2">
					</div>
				</div>				 	 				
				<div class="form-group">
					<div class="col-lg-offset-2 col-lg-10">
						<button type="submit" class="btn btn-default">submit</button>
					</div>
				</div>
			</form>
		</div>
            <!-- Content End -->
    </div>
    <!-- /#wrapper -->
<?php require "../layout/footer.php";  ?>




