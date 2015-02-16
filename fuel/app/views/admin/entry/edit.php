<h2>Editing Entry</h2>
<br>

<?php echo render('admin/entry/_form'); ?>
<p>
	<?php echo Html::anchor('admin/entry/view/'.$entry->id, 'View'); ?> |
	<?php echo Html::anchor('admin/entry', 'Back'); ?></p>
