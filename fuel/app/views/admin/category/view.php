<h2>Viewing #<?php echo $category->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $category->name; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $category->slug; ?></p>

<?php echo Html::anchor('admin/category/edit/'.$category->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/category', 'Back'); ?>