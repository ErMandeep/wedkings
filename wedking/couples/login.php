<?php ob_start(); ?>
<?php include_once "include/function.php"; ?>
<?php
include 'include/controller.php';
if(isset($_SESSION['email'])){
    header("location: couple-dashboard-overview.php");
}
?>


<!DOCTYPE html>
<php lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:51 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Wedding Vendor & Supplier Directory php Template - Couple Form</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="fontello/css/fontello.css" rel="stylesheet">
    <!--jquery-ui  -->
    <link href="css/jquery-ui.css" rel="stylesheet">
      <!-- Favicon icon -->
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<!-- couple-sign up -->

<body class="couple-bg-image">
    <div class="couple-form">
        <div class="container">
            <div class="row ">
                <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                    <!-- couple-head -->
                    <div class="couple-head">
                        <a href="index.php"><img src="images/logo.png" alt="Wedding Vendor & Supplier Directory php Template "></a>
                    </div>
                    <!-- /.couple-head -->
                    <!-- st-tab -->
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
                                <div class="container">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <!-- form-heading-title -->
                                        <h3>Browse 33,000 vendor profile and reviews.</h3>
                                        <p>We don't post anything without your permission.</p>
                                        <!-- /.form-heading-title -->
                                        <!-- register-form -->
                                        <?php couple_register(); ?>
                                        <form action="" method="post">
                                            <!-- form -->
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="control-label sr-only" for="name"></label>
                                                        <input id="name" type="text" name="username" placeholder="username" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="control-label sr-only" for="name"></label>
                                                        <input id="name" type="text" name="coupleName" placeholder="Name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group service-form-group">
                                                        <label class="control-label sr-only" for="email"></label>
                                                        <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group service-form-group">
                                                        <label class="control-label sr-only" for="passwordregister"></label>
                                                        <input id="txtPassword" type="password" name="password" placeholder="Password" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group service-form-group">
                                                        <label class="control-label sr-only" for="passwordregister"></label>
                                                        <input id="txtConfirmPassword" type="password" placeholder="Confirm Password" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="control-label sr-only" for="weddingdate">Wedding Date</label>
                                                        <input id="weddingdate" name="wedding_date" type="text" placeholder="Wedding Date" class="form-control input-md" required="">
                                                        <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                                <!-- Button -->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <button type="submit" id="btnSubmit" name="register_couple" class="btn btn-default">Sign up</button>
                                                </div>
                                            </div>
                                        </form>

                                   
                                        <!--/.form -->
                                        <p class="mt-2"> Have you subscribed? <a href="#" class="wizard-form-small-text"> Login</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.register-form -->
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                <div class="container">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <!-- login-form-heading-title  -->
                                        <h3>Sign In to Your Account</h3>
                                        <p>Sign in to plan your perfect day with our planning tools and inspiration more...</p>
                                        <!-- /.login-form-heading-title  -->
                                        <!-- login-form-->
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="control-label sr-only" for="username"></label><?php echo $usernameErr; ?><?php echo $verifyErr; ?>
                                                        <input id="username" type="text" name="username" placeholder="User Name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <!-- Text input-->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <div class="form-group service-form-group">
                                                        <label class="control-label sr-only" for="passwordlogin"></label>
                                                        <input id="passwordlogin" type="password" name="txtpassword" placeholder="Password" class="form-control" required><?php echo $passwordErr; ?>
                                                    </div>
                                                </div>
                                                <!--  Buttons -->
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <button type="submit" id="" name="login" class="btn btn-default">Login</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- /.login-form -->
                                        <p class="mt-2"> Are you new vendor? Create a New Account.<a href="#"> Click here</a></p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.login-form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.couple-sign up -->
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <!-- jquery-ui -->
    <script src="js/jquery-ui.js"></script>
   <script src="js/custom-script.js"></script>

   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
    
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-form.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:51 GMT -->
</html>