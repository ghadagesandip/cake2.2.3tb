<!--

<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('email_address');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login')); ?>
</div>

-->
    
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
            </div>
        </div>
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">
    <div class="dialog span4">
        <div class="block">
            <div class="block-heading">Sign In</div>
            <div class="block-body">
            
              <?php 
                    echo $this->Form->create('User');
                    
                    
                     echo $this->Form->input('email_address',array('class'=>'span12'));
                     echo $this->Form->input('password',array('class'=>'span12'));
                    
                     echo $this->Session->flash('flash'); 
                     
                    echo $this->Form->submit('Login',array('type'=>'submit','class'=>'btn btn-primary pull-right'));
               ?>
                    
                  
                    <div class="clearfix"></div>
             
               
            </div>
        </div>
        
        
        <p><a class="pull-right" href="reset-password.html">Forgot your password?</a></p>
    </div>
</div>


    

    

    
    
  