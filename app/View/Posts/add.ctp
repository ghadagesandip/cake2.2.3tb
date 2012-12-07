<div class="posts row">
<div class="actions span2">
	<ul class="nav nav-list">
        <li class="nav-header"><?php echo __('Actions'); ?></li>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index'));?></li>
	</ul>
</div>

<div class="posts span10">
<?php echo $this->Form->create('Post', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('0.Post.title');
		echo $this->Form->input('0.Post.message');
	?>
	<?php
		echo $this->Form->input('1.Post.title');
		echo $this->Form->input('1.Post.message');
	?>

		<div class="form-actions">
<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary','div'=>false));?>
<?php echo $this->Html->link(__('Cancel'),array('controller' => '', 'action' => 'index'),array('class'=>'btn btn-cancel'));?>
		</div>
		</fieldset>
<?php echo $this->Form->end();?>
</div>
</div>
