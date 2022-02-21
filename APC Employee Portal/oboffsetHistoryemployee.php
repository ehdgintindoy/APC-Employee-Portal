<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APC Leave Management System</title>
	<link rel="icon" href="apclogo.png" type="image/icon type">
	<h1 style="font-size:40px;color:#121F49;font-family:'Roboto';"><strong>APC Employee Portal</strong></h1> 
	<img src="apclogo.png" style="float:left;width:45px;height:45px;position:relative;top:-65px;left:20px;">
	<img src="top1.png" style="align:middle; width:1620px; height:50px; position:relative; top:-65px; right:30px;">
	<img src="body.png" style="align:middle; width:1620px; height:600px; position:relative; top:-10px; right:30px;">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

var TableIDvalue = "indextable";

var TableLastSortedColumn = -1;
function SortTable() {
var sortColumn = parseInt(arguments[0]);
var type = arguments.length > 1 ? arguments[1] : 'T';
var dateformat = arguments.length > 2 ? arguments[2] : '';
var table = document.getElementById(TableIDvalue);
var tbody = table.getElementsByTagName("tbody")[0];
var rows = tbody.getElementsByTagName("tr");
var arrayOfRows = new Array();
type = type.toUpperCase();
dateformat = dateformat.toLowerCase();
for(var i=0, len=rows.length; i<len; i++) {
	arrayOfRows[i] = new Object;
	arrayOfRows[i].oldIndex = i;
	var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g,"");
	if( type=='D' ) { arrayOfRows[i].value = GetDateSortingKey(dateformat,celltext); }
	else {
		var re = type=="N" ? /[^\.\-\+\d]/g : /[^a-zA-Z0-9]/g;
		arrayOfRows[i].value = celltext.replace(re,"").substr(0,25).toLowerCase();
		}
	}
if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
else {
	TableLastSortedColumn = sortColumn;
	switch(type) {
		case "N" : arrayOfRows.sort(CompareRowOfNumbers); break;
		case "D" : arrayOfRows.sort(CompareRowOfNumbers); break;
		default  : arrayOfRows.sort(CompareRowOfText);
		}
	}
var newTableBody = document.createElement("tbody");
for(var i=0, len=arrayOfRows.length; i<len; i++) {
	newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
	}
table.replaceChild(newTableBody,tbody);
} // function SortTable()

function CompareRowOfText(a,b) {
var aval = a.value;
var bval = b.value;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfText()

function CompareRowOfNumbers(a,b) {
var aval = /\d/.test(a.value) ? parseFloat(a.value) : 0;
var bval = /\d/.test(b.value) ? parseFloat(b.value) : 0;
return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
} // function CompareRowOfNumbers()

function GetDateSortingKey(format,text) {
if( format.length < 1 ) { return ""; }
format = format.toLowerCase();
text = text.toLowerCase();
text = text.replace(/^[^a-z0-9]*/,"");
text = text.replace(/[^a-z0-9]*$/,"");
if( text.length < 1 ) { return ""; }
text = text.replace(/[^a-z0-9]+/g,",");
var date = text.split(",");
if( date.length < 3 ) { return ""; }
var d=0, m=0, y=0;
for( var i=0; i<3; i++ ) {
	var ts = format.substr(i,1);
	if( ts == "d" ) { d = date[i]; }
	else if( ts == "m" ) { m = date[i]; }
	else if( ts == "y" ) { y = date[i]; }
	}
d = d.replace(/^0/,"");
if( d < 10 ) { d = "0" + d; }
if( /[a-z]/.test(m) ) {
	m = m.substr(0,3);
	switch(m) {
		case "jan" : m = String(1); break;
		case "feb" : m = String(2); break;
		case "mar" : m = String(3); break;
		case "apr" : m = String(4); break;
		case "may" : m = String(5); break;
		case "jun" : m = String(6); break;
		case "jul" : m = String(7); break;
		case "aug" : m = String(8); break;
		case "sep" : m = String(9); break;
		case "oct" : m = String(10); break;
		case "nov" : m = String(11); break;
		case "dec" : m = String(12); break;
		default    : m = String(0);
		}
	}
m = m.replace(/^0/,"");
if( m < 10 ) { m = "0" + m; }
y = parseInt(y);
if( y < 100 ) { y = parseInt(y) + 2000; }
return "" + String(y) + "" + String(m) + "" + String(d) + "";
} // function GetDateSortingKey()
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#indextable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<style>
h1 {position:relative; left:68px; top:-15px;font-family: 'Roboto';

}

#myInput {
  width: 20%;
  font-size: 14px;
  padding: 10px 18px 10px 38px;
  border: 1px solid #ddd;
  position:relative;
  top: -600px;
  left: -280px;
  
}

table {
  font-family: 'Roboto';
  border-collapse: collapse;
  width: 75%;
  border: 1px solid black;
  position: relative;
  top: -590px; 
  
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}

td, th {
  text-align: center;
  padding: 30px;
  border: .5px solid black;
  background-color: white;

}

tr:nth-child(even) {
  background-color: #dddddd;

}

th {
  background-color: #FEC825;
}

  margin: 15px;
  font-family: 'Roboto';

.headernav a {
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
  left: 1170px;
  top: -715px;
  font-family: 'Roboto'
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

* {
  box-sizing: border-box;
}

</style>
</head>
<body>

<div class="headernav">
<a href="admin.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-715px; text-align:left; float:left; left:5px; font-family:'Roboto';">Home</a>
<a href="leaverequest.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-715px; text-align:left; float:left; left:5px; font-family:'Roboto';">Requests</a>
<a href="leaveHistoryemployeeside.php" style="text-decoration: none; padding: 10px; font-size:20px; color:#f2f2f2; position:relative; top:-715px; text-align:left; float:left; left:5px; font-family:'Roboto';">History</a>
</div>

<div class="dropdown">
  <button class="dropbtn">Profile</button>
  <div class="dropdown-content">
    <a>Juan Dela Cruz</a>
    <a>jdelacruz@apc.edu.ph</a>
    <a href="login.html">Sign out</a>
  </div>
</div>

<input id="myInput" type="text" placeholder="Search..">
<br><br>

<table class="center" id= "indextable">
<thead>
  <tr>
	<th><a href="javascript:SortTable(1,'T')" style="font-size:20px;">Category</a></th>
	<th><a href="javascript:SortTable(2,'D', 'mdy')" style="font-size:20px;">Date Rendered</a></th>
	<th><a href="javascript:SortTable(3,'N','mdy')" style="font-size:20px;">Time Start</a></th>
	<th><a href="javascript:SortTable(4,'N')" style="font-size:20px;">Hour(s) Rendered</a></th>
	<th><a href="javascript:SortTable(5,'T')" style="font-size:20px;">Reason</a></th>
	<th><a href="javascript:SortTable(6,'T')" style="font-size:20px;">Status</a></th>
  </tr>
  <?php
		$conn = mysqli_connect("localhost", "root", "", "moxi");
		$sql = "SELECT * FROM oboffsetrequests";
		$result = $conn->query($sql);
			
		if ($result->num_rows > 0) {
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>" . $row["category"] . "</td><td>" . $row["date_rendered"] . "</td><td>" . $row["time_start"] . "</td><td>" . $row["hours_rendered"] . "</td><td>" . $row["reason"] . "</td><td>" . $row["status"] . "</td>";
			}
		}
		else {
			echo "No Results";
		}
		$conn->close();
	?>
  </thead>
  <tbody>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td> <span class="label label-warning"></span> </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td> <span class="label label-success"></span> </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
	<td></td>
	<td> <span class="label label-danger"></span> </td>
  </tr>
  </tbody>
</table>

<h2 style="font-size:30px;color:#202124;position:relative;top:-1020px;text-align:center;float:left;left:12px;font-family:'Roboto';">OB/OFFSET HISTORY</h2>

<h3 style="font-size:13px; color:#202124; position:relative; text-align:center; float:left; left:-170px; font-family:'Roboto'; top:-360px;">For assistance,
please email<br> hrd@apc.edu.ph </br> </h3>
<img src="envelope.png" style="width:25px;height:25px;position:relative;position:relative;text-align:center;float:left;left:-370px;top:-340px;">

<div class="sidenav">
  <a class="active" href="leaveHistoryemployee.php">Leave History</a>
</div>

<style>
  margin: 5px;
  font-family: 'Roboto';
}

.sidenav {
  overflow: hidden;
  background-color: #333;
}

.sidenav a {
  float: right;
  color: #f2f2f2;
  text-align: left;
  padding: 10px;
  font-family:'Roboto';
  text-decoration: none;
  font-size: 17px;
}

.sidenav a:hover {
  background-color: #ddd;
  color: gray;
}

.sidenav a.active {
  color: black;
  top: -1170px;
  position:relative;
  left: 10px;
}

</style>

</body>
</html>

