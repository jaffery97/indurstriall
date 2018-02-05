<?php session_start();

if(isset($_POST['submit'])){

	if (empty($_POST['email']) || empty($_POST['pw'])) {
		echo "blank | try again";
	} else {
		$e = $_POST['email'];
		$p = $_POST['pw'];

		//xampp users connection
		//$connection = mysqli_connect("localhost", "root", "", "DBNAME");
		$cnt = mysqli_connect("localhost","root","root","ise");

		


		$qry = "SELECT * FROM jtable WHERE pw='$p' AND email='$e';";

		$login = mysqli_query($cnt, $qry);
//		print_r($login);

		$row = $login->num_rows;
		//echo $row;
//
//		echo "<hr>";

		if ($row == 1) {
			$a = mysqli_fetch_assoc($login);
			//print_r($a);
			//echo "<hr>$a['uid']<br>$a['date']<br>$a['name']<br>$a['email']<br>$a['paw']<br>$a['lname']<br>$a['phone']<br>$a['birthd']<br>$a['dat']<br>$a['month']";
			$_SESSION['v'] = $a["uid"];
			$_SESSION['d'] = $a["date"];
			$_SESSION['n'] = $a["name"];
			$_SESSION['u'] = $a["user"];
			$_SESSION['i'] = $a["image"];
			$_SESSION['l'] = $a["lname"];
			$_SESSION['e'] = $a["email"];
			$_SESSION['o'] = $a["phone"];
			$_SESSION['y'] = $a["birthd"];
			$_SESSION['c'] = $a["dat"];
			$_SESSION['g'] = $a["month"];
			
			//
//			echo $_SESSION['v'];
//			echo $_SESSION['d'];
//			echo $_SESSION['i'];
//			echo $_SESSION['n'];
//          echo $_SESSION['u'];
//			echo $_SESSION['l'];
//			echo $_SESSION['e'];
//			echo $_SESSION['p'];
//          echo $_SESSION['o']
//          echo $_SESSION['y']
//          echo $_SESSION['c']
//          echo $_SESSION['g']
			
			header("location:profile.php");
			
			
		} else {
			header("location:error.php");
		};
		// Closing Connection
		mysqli_close($cnt);
	};

};
?>
	
	