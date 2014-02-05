<?php get_layout('layout/header'); ?>
	<div id="content" class="row">
		<div class="span12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID#</th>
						<th>Name</th>
						<th>Address</th>
						<th>Class Name</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($students as $student) { ?>
						<tr>
							<td><?php echo $student['id']; ?></td>
							<td><?php echo $student['name']; ?></td>
							<td><?php echo $student['address']; ?></td>
							<td><?php echo $student['class_name']; ?></td>
							<td><a href="<?php echo base_url() . '/detail/' . $student[
							'id']; ?>">Detail</a></td>
						</tr>	
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
<?php get_layout('layout/footer'); ?>