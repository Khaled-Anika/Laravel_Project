<!DOCTYPE html>
<html lang="en">
<head>
  <title>Medical Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body, html{
	     height: 100%;
	 	background-repeat: no-repeat;
	 	background-color: #d3d3d3;
	 	font-family: 'Oxygen', sans-serif;
	}

	.main{
	 	margin-top: 5px;
	}

	h1.title { 
		font-size: 50px;
		font-family: 'Passion One', cursive; 
		font-weight: 400; 
	}

	hr{
		width: 10%;
		color: #fff;
	}

	.form-group{
		margin-bottom: 15px;
	}

	label{
		margin-bottom: 15px;
	}

	input,
	input::-webkit-input-placeholder {
	    font-size: 11px;
	    padding-top: 3px;
	}

	.main-login{
	 	background-color: #fff;
	    /* shadows and rounded borders */
	    -moz-border-radius: 2px;
	    -webkit-border-radius: 2px;
	    border-radius: 2px;
	    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

	}

	.main-center{
	 	margin-top: 30px;
	 	margin: 0 auto;
	 	max-width: 330px;
	    padding: 40px 40px;

	}

	.login-button{
		margin-top: 5px;
	}

	.login-register{
		font-size: 11px;
		text-align: center;
	}

	.bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
 	}

	 .container-fluid-1 {
	      padding-top: 60px;
	      padding-bottom: 60px;
	  }
	
	.bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
	}
	.container-fluid-2 {
	      padding-top: 25px;
	      padding-bottom: 25px;
	}
	
	.container-fluid-3 {
	      padding-top: 80px;
	      padding-bottom: 80px;
	}

	.navbar {
      padding-top: 25px;
      padding-bottom: 25px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 15px;
      letter-spacing: 5px;
	 }
	 .navbar-nav  li a:hover {
	  color: #1abc9c !important;
	}

  </style>
</head>

<body>
	<nav class="navbar navbar-default">
	  <div class="container">
	    <div class="navbar-header">
	    <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>-->
	      <a class="navbar-brand" href="home">HOME</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="login">LOGIN</a></li>
	        <li><a href="registration">REGISTRATION</a></li>
	        <li><a href="#">SEARCH</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<!-- First Container -->
	<div class="container-fluid-2">
			<div class="row main">
				<div class="panel-heading">
	               <div class="text-center">
	               		<h1 class="title">SHEBA</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="/registration">
						@if (session()->has('success_message'))
	                	<div class="alert alert-success text-success">
	                    	<label><b>{{ session()->get('success_message') }}</b></label>
	                	</div>
	           		 	@endif
						@if($errors->any())
						<ul>
							@foreach($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
						@endif
						<div class="form-group">
							<label for="name" class="cols-sm-5 control-label">Your Name</label>
							<div class="cols-sm-15">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-5 control-label">Your Email</label>
							<div class="cols-sm-15">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-5 control-label">Username</label>
							<div class="cols-sm-15">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-5 control-label">Password</label>
							<div class="cols-sm-15">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm_password" id="confirm"  placeholder="Confirm your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="/login">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

	<footer class="container-fluid-2 bg-4 text-center">
	  <p>Copyright @2018</p> 
	</footer>
</body>
</html>