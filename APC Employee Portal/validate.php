<?php
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$conn = new mysqli('localhost','root','','moxi');
			
				if($conn->connect_error){
					die('Connection Failed : '.$conn->connect_error);
				}else{
					$stmt = $conn->prepare("select * from login where email = ?");
					$stmt->bind_param("s", $email);
					$stmt->execute();
					$stmt_result = $stmt->get_result();
					if($stmt_result->num_rows > 0) {
						$data = $stmt_result->fetch_assoc();
						if($data['password'] === $password) {
							if($data['usertype']==='admin'){
								header("Location: admin.php");
							}else if($data['usertype']==='user'){
								header("Location: employee.php");
							}
						} else {
							header("Location: login.php?error=Invalid email or password!");
						}
						exit();
					} else {
						header("Location: login.php?error=Invalid email or password!");
					}
				}
?>