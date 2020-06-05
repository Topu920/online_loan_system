<html>
<head>
<title>Payment Information</title>
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
<h3>Payment Information Delete</h3>
Delete By Customer ID:<br>
<input name="Cus_Id" value="" type="text"><br>
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
if(isset($_POST["Cus_Id"])){
$id=$_POST["Cus_Id"];
}

// Create connection
$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$sql = "DELETE FROM `payment_information` WHERE Cus_Id='$id'";
$result = mysqli_query($link, $sql);



mysqli_close($link);
?>

</body>
</html>