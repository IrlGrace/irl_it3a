<!--navigation-login-->
<div class="row">
    <!--HEADER-->           
            
  	<nav class="navbar navbar-inverse navbar-fixed-top">
    		<div class="container-fluid">
      		<div class="navbar-header">
              
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar" >
                 <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Shaarii Shaarii Store</a>
        			
      		</div>
          
      		<form class="navbar-form navbar-left" id="Search">
    				<div class="input-group">
      				<input type="text" class="form-control " placeholder="Search">
      				<div class="input-group-btn">
        				<button class="btn btn-default" type="submit">
          			<i class="glyphicon glyphicon-search"></i>
        					</button>
      				</div>
    				</div>
  			</form>
          <div class="collapse navbar-collapse" id="mainNavBar">
        		<ul class="nav navbar-nav navbar-right menu-header">
          			<li class="dropdown">
           			 	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Account
            			<span class="caret"></span></a>
            			<ul class="dropdown-menu">
              				<li ><a href="#"class="list"><span class="glyphicon glyphicon-cog"></span> Account Settings</a></li>
              				<li ><a href="<?php echo base_url('logout'); ?>"class="list"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            			</ul>
          			</li>
          			<li><a href="#"><span class="glyphicon glyphicon-bell"></span> Notification</a></li>
          			<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Help</a></li>
        		</ul>
          </div>
    		</div>
  	</nav><!--HEADER ENDS-->
  </div>