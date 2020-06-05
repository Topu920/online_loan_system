<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
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
<form action="payment.php" method="REQUEST">
    <p>
        <label for="Cus_Id">Cus_Id:</label>
        <input type="text" name="Cus_Id" id="Cus_Id">
    </p>
    <p>
        <label for="Month">Month:</label>
        <input type="text" name="Month" id="Month">
    </p>
    <p>
        <label for="Amount">Amount:</label>
        <input type="text" name="Amount" id="Amount">
    </p>
	    <p>
        <label for="Due_Amount">Due_Amount:</label>
        <input type="text" name="Due_Amount" id="Due_Amount">
    </p>
	    <p>
        <label for="Due_Month">Due_Month:</label>
        <input type="text" name="Due_Month" id="Due_Month">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>