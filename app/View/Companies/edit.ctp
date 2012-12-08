<div class="colleges row">
<div class="actions span2">
	<ul class="nav nav-list">
        <li class="nav-header"><?php echo __('Actions'); ?></li>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Company.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Company.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Companies'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="colleges span10">
<?php echo $this->Form->create('Company', array('class' => 'form-horizontal'));?>
	<fieldset>
		<legend><?php echo __('Edit Company'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('college_name');
		echo $this->Form->input('slug');
		
	?>
	<?php
		$i = 0;
		foreach ($company['Department'] as $department): 
			echo $this->Form->input('Department.'.$i.'.id');
			echo $this->Form->input('Department.'.$i.'.department_name');
			$i++;
		?>
		
		<?php endforeach; ?>
		<div id='newitems'></div>
	    
	    <input type="hidden" value="<?php echo $i++;?>" id="items"><br/>
	     <button type='button' class='btn btn-info'> <i class="icon-plus-sign"></i> Department</button>
	    
		<div class="form-actions">
<?php echo $this->Form->submit(__('Submit'),array('class'=>'btn btn-primary','div'=>false));?>
<?php echo $this->Html->link(__('Cancel'),array('controller' => 'departments', 'action' => 'index'),array('class'=>'btn btn-cancel'));?>
		</div>
		</fieldset>
<?php echo $this->Form->end();?>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
	
	$('button').click(function(){
		var no = $("#items").val();
		$('#newitems').append( '<div class="input text required">'
							 + '<label for="Department'+no+'DepartmentName">Department Name</label>'
							 + '<input type="text" id="Department'+no+'DepartmentName" maxlength="100" name="data[Department]['+no+'][department_name]"/>'
							 + '<a href="#" class="remove"><i class="icon-remove-sign"></i>remove</a>'
							 +'</div>');
							 return false;
		$("#items").attr('value',parseInt(no)+1);
	});
	
	$('.remove').live('click', function(){
		 $(this).parent().remove();
		return false;
	});
	
});
</script>