
<div class="span9">
    <h1 class="page-title">Users</h1>
	<div class="btn-toolbar">
	    <?php echo $this->Html->link(__('New Company'), array('action' => 'add'),array('class'=>'btn btn-primary')); ?>
	    <div class="btn-group">
	    </div>
	</div>
	
	<div class="well">
	    <table class="table">
	      <thead>
	        <tr>
		        <th><?php echo $this->Paginator->sort('id');?></th>
				<th><?php echo $this->Paginator->sort('company_name');?></th>
				<th><?php echo $this->Paginator->sort('slug');?></th>
				<th><?php echo $this->Paginator->sort('created');?></th>
				<th><?php echo $this->Paginator->sort('modified');?></th>
				<th class="actions"><?php echo __('Actions');?></th>
	          <th style="width: 26px;"></th>
	        </tr>
	      </thead>
	      
	      <tbody>
			<?php foreach ($companies as $company): ?>
				<tr>
					<td><?php echo h($company['Company']['id']); ?>&nbsp;</td>
					<td><?php echo h($company['Company']['company_name']); ?>&nbsp;</td>
					<td><?php echo h($company['Company']['slug']); ?>&nbsp;</td>
					<td><?php echo h($company['Company']['created']); ?>&nbsp;</td>
					<td><?php echo h($company['Company']['modified']); ?>&nbsp;</td>
					<td class="actions">
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php echo $this->Html->link(__('View'), array('action' => 'view', $company['Company']['id']), array('class' => 'btn btn-mini')); ?>
								<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $company['Company']['id']), array('class' => 'btn btn-mini')); ?>
								<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $company['Company']['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $company['Company']['id'])); ?>
							</div>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
	      </tbody>
	    </table>
	</div>
	
	
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
