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
<form action="loan_app.php" method="REQUEST">
    <p>
        <label for="Cus_Id">Cus_Id:</label>
        <input type="text" name="Cus_Id" id="Cus_Id">
    </p>
    <p>
        <label for="loan_Amount">loan_Amount:</label>
        <input type="text" name="loan_Amount" id="loan_Amount">
    </p>
    <p>
        <label for="Payable_Amount">Payable_Amount:</label>
        <input type="text" name="Payable_Amount" id="Payable_Amount">
    </p>
	    <p>
        <label for="Monthly_Payment_Amount">Monthly_Payment_Amount:</label>
        <input type="text" name="Monthly_Payment_Amount" id="Monthly_Payment_Amount">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>