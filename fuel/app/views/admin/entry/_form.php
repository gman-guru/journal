<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Name', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($entry) ? $entry->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Name')); ?>

		</div>
<!--		<div class="form-group">
			<?php // echo Form::label('Slug', 'slug', array('class'=>'control-label')); ?>

				<?php // echo Form::input('slug', Input::post('slug', isset($entry) ? $entry->slug : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Slug')); ?>

		</div>-->
		<div class="form-group">
			<?php echo Form::label('Excerpt', 'excerpt', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('excerpt', Input::post('excerpt', isset($entry) ? $entry->excerpt : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Excerpt')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Content', 'content', array('class'=>'control-label')); ?>

				<?php echo Form::textarea('content', Input::post('content', isset($entry) ? $entry->content : ''), array('class' => 'col-md-8 form-control', 'rows' => 8, 'placeholder'=>'Content')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Published at', 'published_at', array('class'=>'control-label')); ?>

				<?php echo Form::input('published_at', Input::post('published_at', isset($entry) ? $entry->published_at : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Published at')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('User id', 'user_id', array('class'=>'control-label')); ?>

				<?php echo Form::input('user_id', Input::post('user_id', isset($entry) ? $entry->user_id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'User id')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>