<div class="posts index row">
<div class="actions span2 bs-docs-sidebar">
	<ul class="nav nav-list bs-docs-sidenav affix">
        <li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->Html->link(__('New Post'), array('action' => 'add')); ?></li>
	</ul>
</div>
<div class="span10 hero-unit">
<a href="#" rel="tooltip" id="element" data-placement="top" data-original-title="Tooltip on top">Tooltip on top</a>

	<h2><?php echo __('Posts');?></h2>
	<table class="table table-striped table-bordered table-hover" style="white-space:nowrap;">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
//print_r($posts); exit;
	foreach ($posts as $post): ?>
	<tr>
		<td><?php echo h($post['Post']['id']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['title']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['message']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['created']); ?>&nbsp;</td>
		<td><?php echo h($post['Post']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $post['Post']['id']), array('class' => 'btn btn-mini')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-mini')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $post['Post']['id'])); ?>
				</div>
			</div>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <div class="well">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>

	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('next') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
	</div>
</div>
</div>

<?php

echo $this->GoogleChart->create()
	->setType('bar', array('vertical', 'grouped'))
	->setSize(500, 400)
	->setMargins(5, 5, 5, 5)
	->addData(array(1200.48, 432.3, 647.21, 635.2))
	->addMarker('value', array('format' => 'f1', 'placement' => 'c'))
	->addData(array(20, 42.3, 65.21, 95.2))
	->addMarker('value', array('size' => 14, 'color' => '000000'))
	->addAxis('x', array('labels' => array('jan 2012', 'feb 2012')))
	->addAxis('y', array('axis_or_tick' => 'l', 'size' => 12));

?>

