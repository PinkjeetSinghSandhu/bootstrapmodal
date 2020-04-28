<?php
session_start();
include('includes/config.php');
include('includes/mastercss.php');
include('includes/function.php');

$errormsg1=" "; $errormsg2=" ";
    if(isset($_POST['goButton']))
    {
		$name=$_POST['name'];
		$password=$_POST['password'];
    $check=isset($_POST['check']);
		$query = "SELECT name,id from user WHERE name ='$name'";
		$result= mysqli_query($conn, $query);
    $rows=mysqli_fetch_array($result);
		$passwordquery = "SELECT password from user WHERE name='$name'";
		$passwordresult= mysqli_query($conn, $passwordquery);
    $row=mysqli_fetch_array($passwordresult);
		$STOREDPASS=$row['password'];
		$storedname=$rows['name'];
    $storedId = $rows['id'];
		$salt='$2y$10$MTIzcmVibXVuIHRuZWR1dsN1bplLsAOA428thFnik7Idz26Bo1K';
		$HASHEDpassword=crypt($password,$salt);
		if($storedname!==$name)
		{
			$errormsg1= "<div class='error'>Username doesn't exist </div>";
		}
		elseif($STOREDPASS!==$HASHEDpassword)
		{
			$errormsg2= "<div class='error'>Entered Password is wrong</div>";
		}
		else {
      $_SESSION['name']=$name;
      $_SESSION['userIdSession'] = $storedId;

			header('Location: ClientProfile.php');
		}
}
		?>
