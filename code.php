<?php
session_start();
$con = mysqli_connect("localhost","root","","phptutorials");

if(isset($_POST['submit']))
{
    $name  = $_POST['name'];
    $Surname  = $_POST['Surname'];
	$PhoneNumber  = $_POST['PhoneNumber'];
    $dates  = $_POST['dates'];
	$Age  = $_POST['Age'];
    $food  = $_POST['food'];
	$fd="";
	$eat  = $_POST['Eat'];
	$movies  = $_POST['Movies'];
	$tv  = $_POST['TV'];
    $radio  = $_POST['Radio'];
    foreach ($food as $fd1){
		$fd.=$fd1.",";
	}
    $query = "INSERT INTO demo (name,Surname,PhoneNumber,dates,Age,food ,Eat,Movies,TV,Radio) VALUES ('$name','$Surname','$PhoneNumber','$dates','$Age','$fd','$eat','$movies','$tv','$radio')";
	
    $query_run = mysqli_query($con, $query);
	
    if($query_run)
    {
        $_SESSION['status'] = "Inserted Successfully";
        header("Location: Survey.php");
    }
    else{
        $_SESSION['status'] = "Not Inserted Successfully";
        header("Location:   Questions.html");
    }
	
}
?>