<?php ob_start(); ?>

<?php include_once "../config/db.php"; ?>
<?php include_once "include/function.php"; ?>

<?php 
$login_id = "";
if (isset($_SESSION['coupleID'])) {
$login_id = $_SESSION['coupleID'];
}
 ?>
<!DOCTYPE html>
<php lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-add-new-guest.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Add New Guest</title>
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
    <link href="css/custom.php" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/offcanvas.css">
    <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.3/php5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
         <!--jquery-ui  -->
    <link href="css/jquery-ui.css" rel="stylesheet">    

        <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/summernote-bs4.css" rel="stylesheet">
</head>