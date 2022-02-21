<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>APC Employee Portal</title>
		<link rel="icon" href="apclogo.png" type="image/icon type">
		<h1 style="font-size:40px; color:#121F49; font-family:'Roboto';"><strong>APC Employee Portal</strong></h1> 
		<img src="apclogo.png" style="float:left; width:45px; height:45px; position:relative; top:-90px; left:15px;">
		<img src="top1.png" style="align:middle; width:1620px; height:50px; position:relative; top:-70px; right:30px;">
		<img src="body.png" style="align:middle; width:1620px; height:490px; position:relative; top:-10px; right:30px;">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>



<style>
h1 {position:relative; left:68px; top:-15px; font-family: 'Roboto';
}

  margin: 5px;
  font-family: 'Roboto';
}

.profile a {
  color: #f2f2f2;
  padding: 10px;
}

.dropbtn {
  background-color: #121F49;
  color: white;
  padding: 16px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  width:10px; 
  height:10px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #121F49;}

</style>
</head>
<body>
<h2 style="font-size:30px; position:relative; top:-575px; left:650px; font-family:'Roboto';"><i>Welcome back!</i></h2>

<h3 style="font-size:13px; color:#202124; position:relative; top:-103px; text-align:center; float:left; left:60px; font-family:'Roboto';">For assistance,
please email<br> hrd@apc.edu.ph </br> </h3>

<div class="profile">
<a href="employee.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-699px; text-align:left; float:left; left:-160px; font-family:'Roboto';">Home</a>
<a href="leaverequest.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-699px; text-align:left; float:left; left:-130px; font-family:'Roboto';">Requests</a>
<a href="history.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-699px; text-align:left; float:left; left:-100px; font-family:'Roboto';">History</a>
</div>

<div class="dropdown" style="float:right position: relative; top:-869px; right:-950px; font-family:'Roboto';">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a>Juan Dela Cruz</a>
    <a>jdelacruz@apc.edu.ph</a>
    <a href="login.php">Sign out</a>
  </div>
</div>

<img src="envelope.png" style="width:35px; height:25px; position:relative; top:-90px; text-align:center; float:left; left:-410px;">

<a href="leaverequest.php">
<img src="request.png" style="width:200px; height:200px; position:relative; top:-455px; left:-30px;">
</a>

<a href="history.html">
<img src="history.png" style="width:200px; height:200px; position:relative; top:-455px; left:100px;">
</a>

</body>
</html>