<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Loan System</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">.
<link rel="stylesheet" href="style.css">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container"><!--header area start-->
     <h1 style="text-align:center;color:black;">Online Loan System</h1>
      <div class="row">
          
          <div class="col-lg-8">
          
                  <ul >
                      <li><a href="../index.php">Home</a></li>
                       <!--inseart area start-->
                      <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">Insert <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="cus_form.php">Customer Information</a></li>
                          <li class="divider"></li>
                          <li><a href="loan_app_form.php">Loan application</a></li>
                          <li class="divider"></li>
                          <li><a href="loan_info_form.php">Loan Information</a></li>
                          <li class="divider"></li>
                          <li><a href="payment_form.php">Payment Information</a></li>
                      </ul>
                      </li>
                          <!--view area start-->
                          
                    
                      <li class="dropdown">
                      <a href="" class="dropdown-toggle" data-toggle="dropdown">Delete<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="../delete/cus_info_del.php">Customer Information</a></li>
                          <li class="divider"></li>
                          <li><a href="../delete/loan_app.php">Loan application</a></li>
                          <li class="divider"></li>
                          <li><a href="../delete/loan_info.php">Loan Information</a></li>
                          <li class="divider"></li>
                          <li><a href="../delete/payment.php">Payment Information</a></li>
                         
                          
                      </ul>
                      </li>
                      
                  </ul>
          </div><!--col 8 area end-->
      </div><!--row area end-->
  </div><!--header area end-->
  
 
</body>
</html>