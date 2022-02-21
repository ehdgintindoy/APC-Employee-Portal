<?php
		$employeeid = $_POST['employee_id'];
		$category = $_POST['category'];
		$daterendered = $_POST['date_rendered'];
		$timestart = $_POST['time_start'];
		$hoursrendered = $_POST['hours_rendered'];
		$reason = $_POST['reason'];
		$status = $_POST['status'];
		
		$conn = new mysqli('localhost','root','','moxi');
		if($conn->connect_error){
			die('Connection Failed : '.$conn->connect_error);
		}else{
			$stmt = $conn->prepare("insert into oboffsetrequests (employee_id, category, date_rendered, time_start, hours_rendered, reason, status)
									values(?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("ssssiss", $employeeid, $category, $daterendered, $timestart, $hoursrendered, $reason, $status);
			header("Location: oboffset.php?success=Your Request was sent successfully");
			$stmt->execute(); 
			$stmt->close();
			$conn->close();
		}
?>