<?php include "header.php"?>
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

<form action="customer.php" method="REQUEST">
    <p>
        <label for="Cus_Name">Cus_Name:</label>
        <input type="text" name="Cus_Name" id="Cus_Name">
    </p>
    <p>
        <label for="Cus_ID">Cus_ID:</label>
        <input type="text" name="Cus_ID" id="Cus_ID">
    </p>
    <p>
        <label for="Contact_No">Contact_No:</label>
        <input type="text" name="Contact_No" id="Contact_No">
    </p>
	<p>
        <label for="Present_Address">Present_Address:</label>
        <input type="text" name="Present_Address" id="Present_Address">
    </p>
	<p>
        <label for="Permanent_Address">Permanent_Address:</label>
        <input type="text" name="Permanent_Address" id="Permanent_Address">
    </p>
	<p>
        <label for="Guarantor_Name">Guarantor_Name:</label>
        <input type="text" name="Guarantor_Name" id="Guarantor_Name">
    </p>
	<p>
        <label for="Guarantor_No">Guarantor_No:</label>
        <input type="text" name="Guarantor_No" id="Guarantor_No">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>