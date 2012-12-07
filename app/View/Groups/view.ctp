<div class="groups view row">
	<div class="actions span2">
		<ul class="nav nav-list">
			<li class="nav-header"><?php echo __('Actions'); ?></li>
					<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<div class="span10">
		<h2><?php  echo __('Group');?></h2>
		<dl>
					<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['group_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
		</dl>
	</div>
</div>
	<div class="row">
		<div class="related span10 offset2">
			<hr>
			<h3><?php echo __('Related Users');?></h3>
			<div class="btn-toolbar">
			<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class'=>'btn btn-mini'));?>			</div>
	<?php if (!empty($group['User'])):?>
			<table class="table">
				<tr>
							<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
					<th class="actions"><?php echo __('Actions');?></th>
				</tr>
					<?php
		$i = 0;
		foreach ($group['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['group_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id']), array('class' => 'btn btn-mini')); ?>
				</div>
				<div class="btn-group">
				<?php echo $this->Html->link(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $user['id'])); ?>
				</div>
			</div>
			</td>
		</tr>
	<?php endforeach; ?>
			</table>
	<?php endif; ?>

		</div>
	</div>
