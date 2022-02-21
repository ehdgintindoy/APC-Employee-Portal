<?php
		$employeeid = $_POST['employee_id'];
		$leavetype = $_POST['leave_type'];
		$hours = $_POST['hours'];
		$begindate = $_POST['begin_date'];
		$enddate = $_POST['end_date'];
		$reason = $_POST['reason'];
		$status = $_POST['status'];
		
		$conn = new mysqli('localhost','root','','moxi');
		if($conn->connect_error){
			die('Connection Failed : '.$conn->connect_error);
		}else{
			$stmt = $conn->prepare("insert into leaverequests (employee_id, leave_type, hours, begin_date, end_date, reason, status)
									values(?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssissss", $employeeid, $leavetype, $hours, $begindate, $enddate, $reason, $status);
			header("Location: leaverequest.php?success=Your Request was sent successfully");
			$stmt->execute(); 
			$stmt->close();
			$conn->close();
		}
?>