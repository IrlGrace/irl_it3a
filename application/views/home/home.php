	<!--<div class="jumbotron" id="HOME">	
		<div class="container-fluid" id="contents">
			<div class="row d-block">
				<div class="col-sm-4">
					<img src="img/try1.png" alt="Paris" class="img-responsive ">
					<h4><strong>Inventory Control</strong></h4>
					<h5>Improve stock and inventory tracking through automatically updated stock levels whenever sales and purchases are made.</h5>
				</div>
				<div class="col-sm-4">
					<img src="img/try2.png" alt="New York" class="img-responsive">
					<h4><strong>Accurate Reports</strong></h4>
					<h5>Allow users to access and generate accurate sales reports, inventory reports and the purchased products reports, all in real time.</h5>
				</div>
				<div class="col-sm-4">
					<img src="img/try3.png" alt="San Francisco" img="img-responsive"> <br />
					<h4><strong>Order Management</strong></h4>
					<h5>Synchronize orders with this inventory management system and access sales reports, all in real time.</h5>
				</div>
			</div>
		</div>
	</div>-->

<div class="row">
	
	<div class="col-sm-4 col-sm-offset-7">
		<div class="well">
			<?php
				include 'login.php';
			?>
		<!--<p>Want to have easy shopping experience?-->
		<!--<p><a class="pull-right" href="#" data-toggle="modal" data-target="#Register"> Register </a>
		</p>-->
		</div>
	</div>

<div class="row">
	<div class="modal fade" id="Register" role="dialog">
		<div class="modal-dialog modal-md" >
			<div class ="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times; </button>
					<h3 class="text-center"> Register </h3>
				</div>
				<div class="modal-body">
					<form class="col-md-12 center-block">
						<div class="form-group">
							<input type="text" class="form-control input-md" placeholder="First Name" name="fname">
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-md" placeholder="Last Name" name="lname">
						</div>
						<div class="form-group">
							<input type="text" class="form-control input-md" placeholder="Email Address" name="email">
						</div>			
						<div class="form-group">
							<input type="password" class="form-control input-md" placeholder="Password" name="pwd">
						</div>
						<div class="form-group">
							<input type="password" class="form-control input-md" placeholder="Confirm Password" name="cpwd">
						</div>																				
					</form>
				</div>	
				<div class="modal-footer">
					<button type="submit" class="btn btn-default" data-dismiss="modal"> Submit </button>
					<button type="button" class="btn btn-default" data-dismiss="modal"> Cancel </button>
				</div>
			</div>	
		</div>		
	</div>	
