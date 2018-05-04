<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Medical Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
	  background-color:#fff;
	  -webkit-font-smoothing: antialiased;
	  font: normal 14px Roboto,arial,sans-serif;
	}

	.bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
 	}

	 .container-fluid-1 {
	      padding-top: 60px;
	      padding-bottom: 60px;
	  }

	.form-login {
	    background-color: #EDEDED;
	    padding-top: 40px;
	    padding-bottom: 40px;
	    padding-left: 20px;
	    padding-right: 20px;
	    border-radius: 30px;
	    border-color:#d2d2d2;
	    border-width: 5px;
	    box-shadow:0 1px 0 #cfcfcf;
	}

	h4 { 
	 border:0 solid #fff; 
	 border-bottom-width:1px;
	 padding-bottom:10px;
	 text-align: center;
	}

	.form-control {
	    border-radius: 40px;
	}

	.wrapper {
	    text-align: center;
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
	      padding-top: 90px;
	      padding-bottom: 90px;
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
	<div class="container-fluid-3 bg-1 text-center">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
        	<form method="post">
			@if(session('message'))
			<h4><i>{{session('message')}}</i></h4>
			@endif
            <div class="form-login">
            <h4 class="text-primary">Welcome back.</h4>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="username" />
            </br>
            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
            </br>
            <div class="wrapper">
            <span class="group-btn">     
                <button type="submit" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></button>
            </span>
           <!-- <div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>-->
            </div>
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