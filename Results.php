<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    body {
        padding: 0px;
        margin: 0;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    
    table {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 800px;
        height: 200px;
        border: 1px solid #fb4242;
        box-shadow:  box-shadow: 20px 20px 4px 0 rgba(176, 224, 230, .4);
    }
    
    tr {
        transition: all .2s ease-in;
        cursor: pointer;
    }
    
    th,
    td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    #header {
        background-color: #fb4242;
        color: #fff;
    }
    
    h1 {
        font-weight: 600;
        text-align: center;
        background-color: #fb4242;
        color: #fff;
        padding: 10px 0px;
    }
    
    tr:hover {
        background-color: #f5f5f5;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }
    
    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
    }
</style>

<body>

    <h1>Survey Results</h1>
    <hr>
	<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","phptutorials") or die (mysqli_error());



    $query = "SELECT COUNT(*) AS count FROM demo";
	
    $query_result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($query_result)){
		$output ="".$row['count'];
	}
	$que = "SELECT ROUND(AVG(Age)) AS avg FROM demo";
	
    $query_results = mysqli_query($conn, $que);
	while ($row = mysqli_fetch_assoc($query_results)){
		$outputs ="".$row['avg'];
	}
	
	$quer = "SELECT MAX(Age)AS max FROM demo";
	
    $query_resul = mysqli_query($conn, $quer);
	while ($row = mysqli_fetch_assoc($query_resul)){
		$outpu ="".$row['max'];
	}
	
	$qu = "SELECT MIN(Age) AS min FROM demo";
	
    $query_resu = mysqli_query($conn, $qu);
	while ($row = mysqli_fetch_assoc($query_resu)){
		$outp ="".$row['min'];
	}
	
	 $gh = "SELECT food , COUNT(*)/$output*100 AS pizza FROM `demo` WHERE food = 'Pizza,'GROUP BY food";
	
    $keef = mysqli_query($conn, $gh);
	while ($row = mysqli_fetch_assoc($keef)){
	$che="".ROUND($row['pizza']);
	}
	
    $ry = "SELECT food , COUNT(*)/$output*100 AS pasta FROM `demo` WHERE food = 'Pasta,'GROUP BY food";
	
    $query_ = mysqli_query($conn, $ry);
	while ($row = mysqli_fetch_assoc($query_)){
	$o="".ROUND($row['pasta']);
	}
	
	 $uq = "SELECT food , COUNT(*)/$output*100 AS pap FROM `demo` WHERE food = 'PapnWors,'GROUP BY food";
	
    $rsu = mysqli_query($conn, $uq);
	while ($row = mysqli_fetch_assoc($rsu)){
	$u="".ROUND($row['pap']);
	}
    
	$q = "SELECT  ROUND(AVG(Eat)) AS eat FROM demo";
	
    $query_res = mysqli_query($conn, $q);
	while ($row = mysqli_fetch_assoc($query_res)){
		$out="".$row['eat'];
	}
	
	$ue = "SELECT  ROUND(AVG(Movies)) AS movies FROM demo";
	
    $query_re = mysqli_query($conn, $ue);
	while ($row = mysqli_fetch_assoc($query_re)){
		$puts ="".$row['movies'];
	}
	
	$Q = "SELECT  ROUND(AVG(TV)) AS tv FROM demo";
	
    $query_r = mysqli_query($conn, $Q);
	while ($row = mysqli_fetch_assoc($query_r)){
		$put ="".$row['tv'];
	}
	$ques = "SELECT  ROUND(AVG(Radio)) AS radio FROM demo";
	
    $query_Q = mysqli_query($conn, $ques);
	while ($row = mysqli_fetch_assoc($query_Q)){
		$outs ="".$row['radio'];
	}
	echo " <table>
        <tr id='header'>
            <th>Total Number Of Surveys</th>
            <th>Average Age</th>
            <th>Maximum Age</th>
            <th>Minimum Age</th>
			<th>% Of People who like Pizza</th>
            <th>% Of People who like Pasta</th>
            <th>% Of People who like Pap and Wors</th>
            <th>People who Eat Out</th>
			<th>People who watch Movies</th>
            <th>People who watch TV</th>
            <th>People who listen to Radio</th>
            
            
        </tr>
	    <tr>
            <td>$output </td>
            <td>$outputs </td>
            <td>$outpu  </td>
            <td>$outp  </td>
			<td>$che </td>
            <td>$o </td>
            <td> $u </td>
            <td>$out  </td>
			<td>$puts </td>
            <td>$put </td>
            <td>$outs  </td>
            
        </tr>
		 <div class='form-group mb-3'>
                                  <a href='Survey.php'><button class='btn btn-primary'>OK</button>
                            </div>
          </table><br></br>";	
		  
	
	
		 
?>	
    
</body>

</html>
