<?php

$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Cus_Name =  $_REQUEST['Cus_Name'];
$Cus_ID =  $_REQUEST['Cus_ID'];
$Contact_No =  $_REQUEST['Contact_No'];
$Present_Address = $_REQUEST['Present_Address'];
$Permanent_Address =  $_REQUEST['Permanent_Address'];
$Guarantor_Name =  $_REQUEST['Guarantor_Name'];
$Guarantor_No = $_REQUEST['Guarantor_No'];


 
// attempt insert query execution
$sql = "INSERT INTO customer_personal_information (Cus_Name, Cus_ID, Contact_No,Present_Address,Permanent_Address,Guarantor_Name,Guarantor_No) VALUES ('$Cus_Name', '$Cus_ID', '$Contact_No','$Present_Address','$Permanent_Address','$Guarantor_Name','$Guarantor_No')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>