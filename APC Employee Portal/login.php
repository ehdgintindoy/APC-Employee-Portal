<!DOCTYPE html>
<html>
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>APC Employee Portal</title>
		<link rel="icon" href="apclogo.png" type="image/icon type">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'> 
	   
	   <style type="text/css">
	              body {
				       background-image:url(loginbg.png);
					   background-size: 100%;
					   background-attachment: fixed;
					   overflow: visible;
					   font-family: Roboto;
			
					}
				 					
					.nav li {
						display:inline-block;
					}
					.nav a {
						text-decoration:none;
						color:#4289D8;
						width:150px;
						display:block;
						padding:25px 20px;
						text-transform:lowercase;
						font-family:arial;
						font-size:25px;
					}
					
					* {
						box-sizing: border-box;
					}

					input[type=email] {
					  width: 18%;
					  padding: 12px;
					  border: 1px solid #ccc;
					  border-radius: 4px;
					  left: 633px;
					  top: -55px;
					  position: relative;
					}

					input[type=password] {
					  width: 18%;
					  padding: 12px;
					  border: 1px solid #ccc;
					  border-radius: 4px;
					  left: 633px;
					  top: -65px;
					  position: relative;
					}
					
					button[type=submit] {
					  background-color: #121F49;
					  color: white;
					  padding: 12px 20px;
					  border: none;
					  border-radius: 4px;
					  cursor: pointer;
					  left: 713px; 
					  top: -75px;
					  position: relative;
					  text-align: center;
					  width: 8%;
					}
					
					.error {
						background: #F2DEDE;
						color: #A94442;
						padding: 5px;
						width: 13.5%;
						left: 670px;
						top: -80px;
						position: relative;
					}

					button[type=button]:hover {
					  background-color: #121F49;
					}

	   
	   </style>
	   

	</head>
	<body>
	  
	<div class="loginbox">		
		<a style = "position:relative; left:585px; top:150px;">
		<img src= "login.png"  height="445" width="365"></a>
		</div>
		
	
  <form action="validate.php" method="post">
	<div class="form">
      <input type="email" id="email" name="email" placeholder="Email"><br></br>
      <input type="password" id="password" name="password" placeholder="Password"><br></br>
	  <button class="btn btn-success mt-3" type ="submit" id="login" name="login">Login</button>
	  <?php if (isset($_GET['error'])){ ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	  <?php } ?>
    </div>
  </form>
</div>
	
	</div>
	</div>
	</div>
	</div>
	
	</body>
	</html>