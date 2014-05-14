<?php get_layout('layout/header'); ?>
<div id="content" class="row">	

	<div class="span3">
		<div style="max-width: 163px; padding: 8px 0;" class="well">
			<ul class="nav nav-list">
				<li class="nav-header">Dashboard</li>
				<li class="divider"></li>
				<li class="active"><a href="<?php echo base_url(); ?>/add-student">Add Student</a></li>
				<li><a href="<?php echo base_url(); ?>/add-interest">Add Interest</a></li>
				<li><a href="<?php echo base_url(); ?>/add-experience">Add Experience</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url(); ?>/logout">Logout</a></li>
			</ul>
		</div>
	</div>
	<div class="span9">
		<form method="POST" action="<?php echo base_url(); ?>/add-student" accept-charset="UTF-8">	
			<table class="table table-striped">
				<h1>Add Student</h1>
				<tr>
					<td>
						<label for="name">Name</label>
					</td>
					<td>
						<input name="name" type="text" id="name">
					</td>
				</tr>
				<tr>
					<td>
						<label for="address">Address</label>
					</td>
					<td>
						<textarea id="address" rows="10" cols="50" name="address" style="width: 488px; height: 124px;"></textarea>
					</td>
				</tr>
				<tr>
					<td><label for="class">Class</label></td>
					<td><select id="class" name="class"><option value="1">PHP Foundation</option><option value="2">PHP Advanced</option></select></td>
				</tr>
				<tr>
					<td><label for="registerdate">Register Date</label></td>
					<td>
						<input class="datepicker" id="dp2" data-date-format="yyyy-mm-dd" name="registered_date" type="text" value="">			</td>
					</tr>
					<tr>
						<td></td>
						<td ><input class="btn btn-info" type="submit" value="Add Student"> <input class="btn btn-warning" type="submit" value="Clear"></td>
					</tr>
				</table>
			</form></div>
		</div> <!-- end of content -->
		<?php get_layout('layout/footer'); ?>