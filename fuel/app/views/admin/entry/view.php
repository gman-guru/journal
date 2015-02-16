<h2>Viewing #<?php echo $entry->id; ?></h2>

<p>
	<strong>Name:</strong>
	<?php echo $entry->name; ?></p>
<p>
	<strong>Slug:</strong>
	<?php echo $entry->slug; ?></p>
<p>
	<strong>Excerpt:</strong>
	<?php echo $entry->excerpt; ?></p>
<p>
	<strong>Content:</strong>
	<?php echo $entry->content; ?></p>
<p>
	<strong>Published at:</strong>
	<?php echo $entry->published_at; ?></p>
<p>
	<strong>User id:</strong>
	<?php echo $entry->user_id; ?></p>

<?php echo Html::anchor('admin/entry/edit/'.$entry->id, 'Edit'); ?> |
<?php echo Html::anchor('admin/entry', 'Back'); ?>