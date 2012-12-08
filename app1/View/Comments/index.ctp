<div class="comments index row">
<div class="actions span2 bs-docs-sidebar">
	<ul class="nav nav-list bs-docs-sidenav affix">
        <li class="nav-header"><?php echo __('Actions'); ?></li>
		<li><?php echo $this->MyHtml->link(__('New Comment'), array('action' => 'add')); ?></li>
	</ul>
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
            <li><a tabindex="-1" href="#">Action</a></li>
            <li><a tabindex="-1" href="#">Another action</a></li>
            <li><a tabindex="-1" href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a tabindex="-1" href="#">Separated link</a></li>
         </ul>
</div>
<div class="span10 hero-unit">
	<h2><?php echo __('Comments');?></h2>
	<table class="table table-striped table-bordered table-hover" style="white-space:nowrap;">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('comments');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($comments as $comment): ?>
	<tr>
		<td><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['comments']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['created']); ?>&nbsp;</td>
		<td><?php echo h($comment['Comment']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<div class="btn-toolbar">
				<div class="btn-group">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['id']), array('class' => 'btn btn-mini')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['id']), array('class' => 'btn btn-mini')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['id']), array('class' => 'btn btn-danger btn-mini'), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>
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
	?>
    </div>

	<div class="paging btn-group">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array('class' => 'prev btn'), null, array('class' => 'prev disabled btn'));
		echo $this->Paginator->numbers(array('separator' => '', 'class' => 'btn', 'currentClass' => 'active'));
		echo $this->Paginator->next(__('next') . ' >', array('class' => 'next btn'), null, array('class' => 'next disabled btn'));
	?>
            
	</div
       
</div
<div>
   <div id="show_hide" style="display:none">
         <?php echo $this->Form->create('Comment', array('default'=>false,'class' => 'form-horizontal'));?>

	<?php
            echo $this->Form->input('add_comments');
	?>
        <?php 
            echo $this->Form->submit(__('Add'),array('class'=>'btn btn-primary','div'=>false));
            echo $this->Form->button('Cancel', array('id'=>'hide','type' => 'button','class'=>'btn btn-danger'));
        ?>
    </div>

    <a id="add">Add New</a>
    
    
</div>
</div>
<script>
  $(document).ready(function(){
   $("#add").click(function(){
    $("#show_hide").show();
    $("#add").hide();
  });
  $("#hide").click(function(){
      $("#show_hide").hide();
      $("#add").show();
  });

  $(".btn-primary").click(function(){
      var comment=$("#CommentAddComments").val();
      $.ajax({
      url: '<?php echo $this->html->url(array('controller'=>'comments','action'=>'add_ajax'))?>',
      cache: false,
      type:"GET",
      dataType: 'json',
      data:{ c : comment},
      contentType: "application/json",
      beforeSend:function(){
          
      },
      success: function(data){
        
         $(".table").append("<tr><td>"+data.Comment.id+"</td>"+
                                 "<td>"+data.Comment.comments+"</td>"+
                                 "<td>"+data.Comment.created+"</td>"+
                                 "<td>"+data.Comment.modified+"</td>"+
                                 "<td class='actions'><div class='btn-toolbar'><div class='btn-group'>"+
                                 "<a class='btn btn-mini' href='/cakephp2.2.3tb/comments/view/"+data.Comment.id+"'>View</a>"+
                                 "<a class='btn btn-mini' href='/cakephp2.2.3tb/comments/edit/"+data.Comment.id+"'>Edit</a>"+
                                 "<a class='btn btn-danger btn-mini' onclick='if (confirm('Are you sure you want to delete ?')) { document.post_508fa97e586b4.submit(); } event.returnValue = false; return false;' href='/cakephp2.2.3tb/comments/delete/"+data.Comment.id+"'>Delete</a>"+
                                 "</tr>").show(100);
        
        
      },
      statusCode: {
        404: function() {
          alert("page not found");
        }
      }
    });
  });
});
</script>
