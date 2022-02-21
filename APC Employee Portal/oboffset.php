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

select[type=category] {
	width: 10%;
	padding: 5px;
	border: 1px solid #ccc;
	border-radius: 4px;
	left: px;
	top: 5px;
	position: relative;
}
						
textarea[type=reason] {
	width: 30%;
	padding: 12px;		
	border: 1px solid #ccc;
	border-radius: 4px;
	left:550px;
	top: -750px;
	position: relative;
}

	button[type=submit] {
		background-color: #f6ff00;
		color: black;
		padding: 4px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		left: 600px; 
		top: -600px;
		position: relative;
		text-align: center;
		width: 6%;
		}

	button[type=button]:hover {
		background-color: #f6ff00;
		}				


</style>
</head>
<body>
<h2 style="font-size:25px; position:relative; top:-510px; left:650px; font-family:'Roboto'; color:#f2f2f2;">Add OB/Offset Application</h2>
<h3 style="font-size:30px; position:relative; top:-635px; left:10px; font-family:'Roboto'; color:#202124;">OB/Offset Application</h3>

<h4 style="font-size:13px; color:#202124; position:relative; top:-165px; text-align:center; float:left; left:60px; font-family:'Roboto';">For assistance,
please email<br> hrd@apc.edu.ph </br> </h4>

<div class="profile">
<a href="home.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-760px; text-align:left; float:left; left:-160px; font-family:'Roboto';">Home</a>
<a href="leaverequest.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-760px; text-align:left; float:left; left:-130px; font-family:'Roboto';">Requests</a>
<a href="leaveHistoryemployee.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-760px; text-align:left; float:left; left:-100px; font-family:'Roboto';">History</a>
<a href="admin.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-760px; text-align:left; float:left; left:-70px; font-family:'Roboto';">HR/Supervisor</a>
<a href="leaverequest.php" style="text-decoration: none; font-size:20px; color:#202124; position:relative; top:-690px; text-align:left; float:left; left:430px; font-family:'Roboto';">Add Leave Application</a>
<a href="oboffset.php" style="text-decoration: none; font-size:20px; color:#202124; position:relative; top:-690px; text-align:left; float:left; left:470px; font-family:'Roboto';">Add OB/Offset Application</a>
</div>

<div class="dropdown" style="float:right position: relative; top:-765px; right:-400px; font-family:'Roboto';">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a>Juan Dela Cruz</a>
    <a>jdelacruz@apc.edu.ph</a>
    <a href="login.php">Logout</a>
  </div>
</div>

<form action="connectob.php" method="post">
        
        <p style="font-size:15px; position:relative; top:-635px; left:387px; font-family:'Roboto'; color:white;">Category:</p>
         <p style="font-size:15px; position:relative; top:-648px; left:550px;font-family:'Roboto'; color:white;"><form>
			<select type='category' name="category" id="category" placeholder="Category"> 
			<option></option>
			<option value="Official Business">Official Business</option>
			<option value="Offset">Offset</option>
			</select>
		</p>
		
		<label for="appt" style="font-size:15px; position:relative; top:-710px; left:750px;font-family:'Roboto'; color:white;">Hour(s) Rendered:</label>
		<br>
		<input type="number" id="hours_rendered" name="hours_rendered"
		min="1" max="4" required style="width: 3%; padding: 5px; border: 1px solid #ccc; border-radius: 4px; position: relative; top: -705px; left: 750px;>
		
		<div class="begin">
			<label style="font-size:15px; position:relative; top:-655px; left:490px;font-family:'Roboto'; color:white;">Date Rendered:</label>
			<br>
			<input type="date" id="date_rendered" name="date_rendered" style="width: 9%; padding: 5px; border: 1px solid #ccc; border-radius: 4px; position: relative; top: -655px; left: 550px;>
			</br>
			<span class='required'></span>
		</div>

		<div class="time">
		<p for="appt" style="font-size:15px; position:relative; top:-725px; left:750px;font-family:'Roboto'; color:white;">Time Start:</p>
        <br>
        <input type="time" id="time_start" name="time_start"
        min="7:00" max="17:00" required style="width: 6%; padding: 5px; border: 1px solid #ccc; border-radius: 4px; position: relative; top:-753px; left:749px;>
		</div>
		
		<div class="reason">
			<p style="font-size:15px; position:relative; top:-743px; left:550px;font-family:'Roboto'; color:white;">Reason for:</p>
			<textarea type="reason" name="reason" id="reason" rows="8" cols="5"">
			</textarea>
		</div>
		
		<button type="submit" style="font-size:15px; position:relative; top:-690px; left:265px;font-family:'Roboto'; color:black;">Submit</button>
		<?php if (isset($_GET['success'])){ ?>
				<p class="success" style="background: #ACDF87;
						color: #1E5631;
						padding: 5px;
						width: 16%;
						left: 663px;
						top: -768px;
						position: relative;"><?php echo $_GET['success']; ?></p>
			<?php } ?>
			<input type="hidden" name="status" id="status" value="Pending" />
			<input type="hidden" name="employee_id" value="2019-100073" />
			
</form>   

</body>

<img src="envelope.png" style="width:35px; height:25px; position:relative; top:500px; text-align:center; float:left; left:-360px;">

</html>