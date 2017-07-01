<?php include("ilogin.php");?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Navigation Bar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 

      
    
  


    <style>
     
    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
			  </button>
			  <a class="navbar-brand" href="#">SKALA</a>
			</div>


          <div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="#"><span class="glyphicon glyphicon-home"> HOME</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-user"> Who WE ARE</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-unchecked">COLLABORATE</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-refresh">STAY CONNECTED</a></li>

				 <!-- <li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">STAY CONNECTED <span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="#">Function1</a></li>
					  <li><a href="#">Function2</a></li>
					  <li><a href="#">Function3</a></li>
					</ul>
				  </li> -->

				  
				</ul>

				<ul class="nav navbar-nav navbar-right">     

					<li class="dropdown">
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					<ul class="dropdown-menu">
					  <li><a href="#" data-toggle="modal" data-target="#login-modal">INSTITUTE</a></li>
					  <li><a href="#">GOVERNMENT</a></li>
					  <li><a href="#">SKALA</a></li>
					</ul>
					</li>
				  </li>
				</ul>                 
          
			</div>
		
			<!-- Login Form For Institute -->
			
			<!-- BEGIN # MODAL LOGIN -->
				<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header" align="center">
									<img class="img-circle" id="img_logo" src="images/login/institute.png">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button>
								</div>
								
								<!-- Begin # DIV Form -->
								<div id="div-forms">
								
									<!-- Begin # Login Form -->
									<form id="login-form" action="" method="POST">
										<div class="modal-body">
											<div id="div-login-msg">
												<div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
												<span id="text-login-msg">Type your Username and Password.</span>
											</div>
											<input id="login_username" name="username" class="form-control" type="text" placeholder="Username " required>
											<input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
											<div class="checkbox">
												<label>
													<input type="checkbox"> Remember me
												</label>
											</div>
										</div>
										<div class="modal-footer">
											<div>
												<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
											</div>
											<div>
												<button id="login_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
												<button id="login_register_btn" type="button" class="btn btn-link">Register</button>
											</div>
										</div>
									</form>

    
									<!-- End # Login Form -->
									
									<!-- Begin | Lost Password Form -->
									<form id="lost-form" style="display:none;">
										<div class="modal-body">
											<div id="div-lost-msg">
												<div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
												<span id="text-lost-msg">Type your e-mail.</span>
											</div>
											<input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
										</div>
										<div class="modal-footer">
											<div>
												<button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
											</div>
											<div>
												<button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
												<button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
											</div>
										</div>
									</form>
									<!-- End | Lost Password Form -->
									
									<!-- Begin | Register Form -->
									<form id="register-form" style="display:none;">
										<div class="modal-body">
											<div id="div-register-msg">
												<div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
												<span id="text-register-msg">Register an account.</span>
											</div>
											<input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
											<input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
											<input id="register_password" class="form-control" type="password" placeholder="Password" required>
										</div>
										<div class="modal-footer">
											<div>
												<button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
											</div>
											<div>
												<button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
												<button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
											</div>
										</div>
									</form>
									<!-- End | Register Form -->
									
								</div>
								<!-- End # DIV Form -->
								
							</div>
						</div>
					</div>
					<!-- END # MODAL LOGIN -->
				
				  <!-- End of Inst. Login -->
		
      </div>
    </nav>
  </body>
</html>