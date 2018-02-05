<?php session_start();

//echo ($_POST["fname"]);
//echo "<br>";
//echo ($_POST["lname"]);
//echo "<br>";
//echo ($_POST["email"]);
//echo "<br>";
//echo ($_POST["phone"]);
//echo "<br>";
//echo ($_POST["dd"]);
//echo "<br>";
//echo ($_POST["nn"]);
//echo "<br>";
//echo ($_POST["yyyy"]);
//echo "<br>";
//echo ($_POST["user"]);
//echo "<br>";
//echo ($_POST["pw"]);
//echo "<br>";
//print_r($_FILES["photo"]);
//echo "<br>";
//echo ($_FILES["photo"]["name"]);
//echo "<br>";
//echo ($_FILES["photo"]["type"]);
//echo "<br>";
//echo ($_FILES["photo"]["tmp_name"]);
//echo "<br>";
//echo ($_FILES["photo"]["error"]);
//echo "<br>";
//echo ($_FILES["photo"]["size"]);

$b = $_POST["fname"];
$l = $_POST["lname"];
$e = $_POST["email"];
$o = $_POST["phone"];
$c = $_POST["dd"];
$g = $_POST["nn"];
$y = $_POST["yyyy"];
$u = $_POST["user"];
$p = $_POST["pw"];


//to creat foles and folders
mkdir("users/$u");

$f = fopen("users/$u/profile.txt","w");

$t = "$b\n$l\n$e\n$o\n$c\n$g\n$y\n$u\n$p";

fwrite($f,$t);

fclose($f);

if ($_FILES){
	
	switch($_FILES["photo"]["type"]){
			case "image/jpeg";
			$x = "$u/image.jpg";
				break;
		case "image/png";
			$x = "$u/image.png";
				break;
		default:
			$x = "";
				break;
	}
}

if ($x){
	$j = $_FILES["photo"]["tmp_name"];
	$i = "users/$x";
	move_uploaded_file($j, $i);
}


//email
$m = "Fname:$b\n$l Email:$e\n User:$u Pw:$p";
$s = "New User Rejistration";
	
	$t = "";
	$h = 'From: '.$t."\r\n".'Reply-To: '.$t."\r\n".'X-Mailer: PHP/'.phpversion();

mail($t, $m, $e, $u, $p);

//mysql

$cnt = mysqli_connect("localhost","root","root","ise");
 
$qry = "INSERT INTO jtable (name,email,pw,image,lname,birthd,phone,user,dat,month) VALUES ('$b','$e','$p','$i','$l','$y','$o','$u','$c','$g');";

mysqli_query($cnt, $qry);

mysqli_close($cnt);

$_SESSION["u"] = $u;
$_SESSION["b"] = $b;
$_SESSION["y"] = $y;
$_SESSION["c"] = $c;
$_SESSION["g"] = $g;
$_SESSION["o"] = $o;
$_SESSION["l"] = $l;
$_SESSION["i"] = $i;
$_SESSION["e"] = $e;

header("location:confirmed.php");
?>