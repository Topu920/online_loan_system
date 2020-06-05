<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$Cus_Id =  $_REQUEST['Cus_Id'];
$Month =  $_REQUEST['Month'];
$Amount = $_REQUEST['Amount'];
$Due_Amount =  $_REQUEST['Due_Amount'];
$Due_Month =  $_REQUEST['Due_Month'];
 
// attempt insert query execution

$sql = "INSERT INTO payment_information (Cus_Id, Month, Amount,Due_Amount,Due_Month) VALUES ('$Cus_Id', '$Month', '$Amount','$Due_Amount','$Due_Month')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>