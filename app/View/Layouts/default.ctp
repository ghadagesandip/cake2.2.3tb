<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */


?>
<?php echo $this->Html->docType();?>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>

		<?php echo $title_for_layout; ?>
	</title>
	
	 <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="">
     <meta name="author" content="">
	<?php
	/*
				echo $this->Html->meta('icon');
		        echo $this->fetch('meta');
				echo $this->fetch('css');
				echo $this->fetch('script');
		
                echo $this->Html->script(array('jquery','bootstrap.min','bootstrap-dropdown','bootstrap-tooltip'));
                echo $this->Html->css(array('bootstrap','bootstrap-responsive'));
				echo $this->Html->css('custom_css');
				echo $this->Html->script(array('jquery.validationEngine','jquery.validationEngine-en')); 
  */
	
			echo $this->Html->meta('icon');
	
			echo $this->Html->css(array('bootstrap.min','bootstrap-responsive','theme'));
	
			echo $this->Html->script('jquery');
			echo $this->Html->script('bootstrap.min');
	
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
                


	?>
	
	 <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>

<body>
	
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <ul class="nav pull-right">
                    
                    <li id="fat-menu" class="dropdown">
                        <a href="http://portnine.com/bootstrap/WintertideAdmin/build/users.html#" id="drop3" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="http://portnine.com/bootstrap/WintertideAdmin/build/users.html#">Settings</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="<?php echo $this->Html->url(array('controller'=>'users','action'=>'logout'))?>">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="http://portnine.com/bootstrap/WintertideAdmin/build/index.html"><span class="first">Your</span> <span class="second">Company</span></a>
            </div>
        </div>
    </div>
    

    
    
<div class="container-fluid">
        
   <div class="row-fluid">
        <div class="span3">
             <div class="sidebar-nav">
                
                  <div class="nav-header" data-toggle="collapse" data-target="#dashboard-menu"><i class="icon-dashboard"></i>Dashboard</div>
                    <ul id="dashboard-menu" class="nav nav-list collapse in">
                        <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/index.html">Home</a></li>
                        <li class="active"><a href="./ table view _files/ table view .html">Sample List</a></li>
                        <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/user.html">Sample Item</a></li>
                        <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/gallery.html">Gallery</a></li>
                        <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/calendar.html">Calendar</a></li>
                        <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/faq.html">Faq</a></li>
                        <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/help.html">Help</a></li>
                        
                    </ul>
	                <div class="nav-header" data-toggle="collapse" data-target="#accounts-menu"><i class="icon-briefcase"></i>Account<span class="label label-info">+10</span></div>
	                <ul id="accounts-menu" class="nav nav-list collapse in">
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/sign-in.html">Sign In</a></li>
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/sign-up.html">Sign Up</a></li>
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/reset-password.html">Reset Password</a></li>
	                </ul>

	                <div class="nav-header" data-toggle="collapse" data-target="#settings-menu"><i class="icon-exclamation-sign"></i>Error Pages</div>
	                <ul id="settings-menu" class="nav nav-list collapse in">
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/403.html">403 page</a></li>
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/404.html">404 page</a></li>
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/500.html">500 page</a></li>
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/503.html">503 page</a></li>
	                </ul>

	                <div class="nav-header" data-toggle="collapse" data-target="#legal-menu"><i class="icon-legal"></i>Legal</div>
	                <ul id="legal-menu" class="nav nav-list collapse in">
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/privacy-policy.html">Privacy Policy</a></li>
	                  <li><a href="http://portnine.com/bootstrap/WintertideAdmin/build/terms-and-conditions.html">Terms and Conditions</a></li>
	                </ul>
               </div>
         </div>
       
		<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <h3 id="myModalLabel">Delete Confirmation</h3>
		    </div>
		    <div class="modal-body">
		        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
		    </div>
		    <div class="modal-footer">
		        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
		    </div>
		</div>
		
			 <center>   <?php  echo $this->Session->flash('flash'); ?><br/></center>
			 <?php echo $this->fetch('content'); ?>
			 <?php  echo $this->Js->writeBuffer(); ?>
	

    </div>
    
 </div>
    

    
    <footer>
        <hr>
        <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
        <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com/" target="_blank">Portnine</a></p>
        
        
        <p>© 2012 <a href="http://www.portnine.com/">Portnine</a></p>
    </footer>
    

   
    
</div>
  
    
</body>
</html>
