<h2>Listing Categories</h2>
<br>
<?php if ($categories): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Slug</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($categories as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td>
				<?php echo Html::anchor('admin/category/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/category/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/category/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Categories.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/category/create', 'Add new Category', array('class' => 'btn btn-success')); ?>

</p>
