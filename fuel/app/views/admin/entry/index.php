<h2>Listing Entries</h2>
<br>
<?php if ($entries): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Slug</th>
			<th>Excerpt</th>
			<th>Content</th>
			<th>Published at</th>
			<th>User id</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($entries as $item): ?>		<tr>

			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->slug; ?></td>
			<td><?php echo $item->excerpt; ?></td>
			<td><?php echo $item->content; ?></td>
			<td><?php echo $item->published_at; ?></td>
			<td><?php echo $item->user_id; ?></td>
			<td>
				<?php echo Html::anchor('admin/entry/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('admin/entry/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/entry/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Entries.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/entry/create', 'Add new Entry', array('class' => 'btn btn-success')); ?>

</p>
