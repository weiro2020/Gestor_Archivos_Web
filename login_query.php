<?php
	session_start();
	require 'sistema/conn.php';
	if(ISSET($_POST['login'])){
		$stud_no = $_POST['stud_no'];
		$password = md5($_POST['password']);
		$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `stud_no` = '$stud_no' && `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = $query->num_rows;
		if($row > 0){
			$_SESSION['student'] = $fetch['stud_id'];
			header('Location: usuario.php');
			exit;
		}else{
			echo "<center><label class='text-danger'>Usuario o Contraseña Inconrecta</label></center>";
		}
	}
?>
