<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "online_loan_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Loan_Type =  $_REQUEST['Loan_Type'];
$Interest =  $_REQUEST['Interest'];
$Age_Limitation =  $_REQUEST['Age_Limitation'];
$Time_Duration =  $_REQUEST['Time_Duration'];
$Max_Recieve_Amount =  $_REQUEST['Max_Recieve_Amount'];

// attempt insert query execution
$sql = "INSERT INTO loan_information (Loan_Type, Interest, Age_Limitation,Time_Duration,Max_Recieve_Amount) VALUES ('$Loan_Type', '$Interest', '$Age_Limitation','$Time_Duration','$Max_Recieve_Amount')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>