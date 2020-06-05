<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security


$Cus_Id=  $_REQUEST['Cus_Id'];
$loan_Amount =  $_REQUEST['loan_Amount'];
$Payable_Amount =  $_REQUEST['Payable_Amount'];
$Monthly_Payment_Amount =  $_REQUEST['Monthly_Payment_Amount'];


 
// attempt insert query execution
$sql = "INSERT INTO `loan_application_information`(`Cus_Id`, `loan_Amount`, `Payable_Amount`, `Monthly_Payment_Amount`) VALUES ('$Cus_Id', '$loan_Amount', '$Payable_Amount','$Monthly_Payment_Amount')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>