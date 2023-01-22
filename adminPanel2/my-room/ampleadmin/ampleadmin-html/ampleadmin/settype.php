<?php
		$con=mysqli_connect("localhost","root","fib11235813","bookshare_db");
		session_start();
		$name=$_SESSION['user'];
		$query1="UPDATE tbl_login SET istype='".$_POST['is_type']."' where email='$name'";
        $c01=mysqli_query($con,$query1);
?>