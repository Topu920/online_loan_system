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
<form action="loan_info.php" method="REQUEST">
    <p>
        <label for="Loan_Type">Loan_Type:</label>
        <input type="text" name="Loan_Type" id="Loan_Type">
    </p>
    <p>
        <label for="Interest">Interest:</label>
        <input type="text" name="Interest" id="Interest">
    </p>
    <p>
        <label for="Age_Limitation">Age_Limitation:</label>
        <input type="text" name="Age_Limitation" id="Age_Limitation">
    </p>
	   <p>
        <label for="Time_Duration">Time_Duration:</label>
        <input type="text" name="Time_Duration" id="Time_Duration">
    </p>
	   <p>
        <label for="Max_Recieve_Amount">Max_Recieve_Amount:</label>
        <input type="text" name="Max_Recieve_Amount" id="Max_Recieve_Amount">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>