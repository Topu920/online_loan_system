<html>
<head>
<title>Loan Information</title>
    <meta charset="UTF-8">
    <title>Online Loan System</title>
<style>
    table {}
    th{color: white; background-color: #2ecc71}
    tr{background-color:#d35400; color: white;}
</style>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">.
<link rel="stylesheet" href="../style.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php include "header.php"?>

<form method="POST" style="text-align:center">
<h3>Loan Information Delete</h3>
Delete By Loan Type:<br>
<input name="Loan_Type" value="" type="text"><br>
<br>
<br><br>
<input value="Go" type="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_loan_system";
$id="";
if(isset($_POST["Loan_Type"])){
$id=$_POST["Loan_Type"];
}

// Create connection
$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$sql = "DELETE FROM `loan_information` WHERE Loan_Type='$id'";
$result = mysqli_query($link, $sql);

mysqli_close($link);
?>

</body>
</html>