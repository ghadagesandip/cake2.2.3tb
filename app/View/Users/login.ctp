    
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    
                </ul>
                <a class="brand" href="index.html"><span class="first"></span> <span class="second">Sandip Ghadage</span></a>
            </div>
        </div>
    </div>
    

    <div class="container-fluid">
        
        <div class="row-fluid">

    <div class="dialog span4">
                <center>   <?php  echo $this->Session->flash('flash'); ?><br/></center>
        <div class="block">
            <div class="block-heading">Sign In</div>
            <div class="block-body">
            
              <?php 
                    echo $this->Form->create('User');
                    
                    
                     echo $this->Form->input('email_address',array('class'=>'span12'));
                     echo $this->Form->input('password',array('class'=>'span12'));
                    

                     
                    echo $this->Form->submit('Login',array('type'=>'submit','class'=>'btn btn-primary pull-right'));
               ?>
                    
                  
                    <div class="clearfix"></div>
             
               
            </div>
        </div>
        
        
        <p><a class="pull-right" href="reset-password.html">Forgot your password?</a></p>
    </div>
</div>


    

    

    
    
  
