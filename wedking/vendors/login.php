<?php ob_start(); ?>
<?php include_once "include/function.php"; ?>
<?php
include 'include/controller.php';
if(isset($_SESSION['user_name'])){
    header("location:vendor-dashboard-overview.php");
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:35:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Wedding Vendor & Supplier Directory HTML Template - Vendor Form</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
      <!-- Favicon icon -->
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- vendor-form -->

<body class="vendor-bg-image">
    <!-- sign up -->
    <div class=" vendor-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- vendor head -->
                    <div class="vendor-head">
                        <a href="index.html"><img src="images/logo.png" alt="Wedding Vendor & Supplier Directory HTML Template "></a>
                    </div>
                    <!-- /.vendor head -->
                    <div class="st-tab">
                        <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">Login</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- vendor title -->
                                    <div class="vendor-form-title">
                                        <h3 class="mb-2">Business Register</h3>
                                        <p>Join Weddingsto get your business listed or to claim your listing for FREE!</p>
                                    </div>
                                    <!-- /.vendor title -->
                    <?php register(); ?>
            <form action="" method="post">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="bussinessname"></label>
                                                    <input id="bussinessname" type="text" name="fullName" placeholder="Bussiness Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label sr-only" for="username"></label>
                                                    <input id="username" type="text" name="username" placeholder="User Name" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                               <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="email"></label>
                                                    <input id="email" type="email" name="email" placeholder="Email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                              <!-- Text input-->
                                             <div class="form-group service-form-group">
                                                 <label class="control-label sr-only" for="phone"></label>
                                                     <input id="phone" type="number" name="phone" placeholder="Mobile" class="form-control"  required>
                                                  </div>
                                               </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                              <!-- Text input-->
                                                <div class="form-group service-form-group">
                                                    <label class="control-label sr-only" for="passwordregister"></label>
                                                    <input id="passwordregister" type="password" name="password" placeholder="Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- select -->
                                                <div class="form-group">
                                                    <select class="wide mb20" name="vendor_purpose">
                                                        <option value="Vendor Purpose">Vendor Purpose</option>
                                                        <option value="Venue">Venue</option>
                                                        <option value="Photographer">Photographer</option>
                                                        <option value="Florist">Florist</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="register" class="btn btn-default">Sign up</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mt-2"> Have you subscribed? <a href="#"> Login</a></p>
                                </div>
                            </div>
                            <!-- vendor-login -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="vendor-form-title">
                                        <!--vendor-title -->
                                        <h3 class="mb-2">Welcome Back Vendor</h3>
                                        <p>Join Weddings to get your business listed or to claim your listing for FREE!</p>
                                    </div>
                                    <!--/.vendor-title -->
            <form method="post">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                      <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label sr-only" for="username"></label><?php echo $usernameErr; ?><?php echo $verifyErr; ?>
                            <input id="username" type="text" name="username" placeholder="Enter email or username" class="form-control" required>
                        </div>
                    </div>
                   <!-- Text input-->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="form-group service-form-group">
                            <label class="control-label sr-only" for="passwordlogin"></label>
                            <input id="passwordlogin" type="password" name="txtpassword" placeholder="Password" class="form-control" required><?php echo $passwordErr; ?>
                        </div>
                    </div>
                    <!--buttons -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <button type="submit" name="login" class="btn btn-default">Login</button>
                    </div>
                </div>
            </form>
                                    <p class="mt-2"> Are you new couple? Create a New Account.<a href="#" class="wizard-form-small-text"> Click here</a></p>
                                </div>
                            </div>
                            <!-- /.vendor-login -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.vendor-form -->
  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
   <script src="js/custom-script.js"></script>

 
</body>


</html>