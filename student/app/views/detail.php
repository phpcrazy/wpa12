<?php get_layout('layout/header'); ?>
 		<div id="content" class="row">
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
<?php get_layout('layout/footer'); ?>