<?php include "header.php"?>
<html>
<head>
<title>Customer Information</title>
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


<form method="REQUEST" style="text-align:center">
<h3>Cutomer Information Delete</h3>
Delete By Cutomer ID:<br>
<input name="Cus_ID" value="" type="text"><br>
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
if(isset($_REQUEST["Cus_ID"])){
$id=$_REQUEST["Cus_ID"];
}

$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "DELETE FROM customer_personal_information WHERE Cus_ID ='$id'";
    
$result = mysqli_query($link, $sql);


mysqli_close($link);
?>

</body>
</html>