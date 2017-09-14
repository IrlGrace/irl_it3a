
	<h2>Log In</h2>


	<?php
	 	echo form_open('Login/checkLogin'); 
	?>
<!--
		<p><input type="text" name="email" placeholder="Email" /></p>
		<p><input type="password" name="password" placeholder="Password" /></p>
		<p><input type="submit" name="login" value="Login"/></p>
	</form>
-->
	<form id="login">
		<div class="form-group">
			
			<input type="text" placeholder="Email Address" class="form-control" id="email" name="email" />
			<br />
			<input type="password" placeholder="Password" class="form-control" id="pwd" name="password" />
			<br />
			<button class="submit-btn" type="submit"  name="login" >
				<span class="glyphicon glyphicon-log-in"></span> Login
			</button>
			<!--<p>
				<a class="pull-right" href="#" data-toggle="modal" data-target="#Register"> Register </a>
			</p>-->	
		</div>

	</form>
	<div class="text-danger"> 
	<?php
		echo validation_errors(); 
	?>
	</div>

