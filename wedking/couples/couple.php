<?php ob_start(); ?>
 <?php session_start(); ?>
<?php include_once "../config/db.php"; ?>
<?php include_once "include/function.php"; ?>

<?php 
if (isset($_GET['username'])) {
$name = $_GET['username'];
$_SESSION['img'] = $name;
}

 ?>
 <?php 
$login_id = "";
if (isset($_SESSION['coupleID'])) {
$login_id = $_SESSION['coupleID'];
}
 ?>

<!DOCTYPE html>
<html lang="en">
<?php 
    $view_images = query("SELECT * FROM couples WHERE username= '$name'");
    while($row = mysqli_fetch_assoc($view_images)){

    $username = $row['username'];
    $coupleID = $row['coupleID'];
    $wedding_date = $row['wedding_date'];
    $coupleName = $row['coupleName'];
    $feature_img = $row['feature_img'];
}
?>

<head>

    <style type="text/css">
.page-header { border-bottom: transparent; background: url(./images/<?php echo $feature_img; ?>) no-repeat center; background-size: cover; min-height: 340px; }
.page-breadcrumb { background-color: rgba(55, 49, 61, .5); border-top: rgba(255, 255, 255, .1) 1px solid; }
.page-breadcrumb .breadcrumb { display: -webkit-box; display: -ms-flexbox; display: flex; -ms-flex-wrap: wrap; flex-wrap: wrap; padding: 4px; margin-bottom: 0px; list-style: none; background-color: transparent; border-radius: 0px; color: #fff; }
.page-breadcrumb .breadcrumb .breadcrumb-item { font-size: 13px; }
.page-breadcrumb .breadcrumb .breadcrumb-item .breadcrumb-link { color: #bebbc1; }
.page-breadcrumb .breadcrumb .breadcrumb-item .breadcrumb-link:hover { color: #ff4d4d; }
.page-breadcrumb .breadcrumb .breadcrumb-item+.breadcrumb-item::before { display: inline-block; padding-right: .5rem; padding-left: .5rem; color: #bebbc1; content: "\f105"; font-family: 'font Awesome 5 Free'; font-weight: 900; }
.venue-pageheader { background: url(./images/<?php echo $feature_img; ?>) no-repeat center; background-size: cover; }
.venue-pageheader .page-section { padding-top: 250px; padding-bottom: 70px; }
.page-title { font-size: 46px; color: #fff; margin-bottom: 0px; font-weight: 400; line-height: 1.2; }
.page-description { color: #fff; }
.page-caption { padding-top: 125px; padding-bottom: 125px; }
.rsvp-page-header { background: url(./images/<?php echo $feature_img; ?>) no-repeat center; background-size: cover; padding-top: 180px; padding-bottom: 180px; }
.rsvp-page-header .rsvp-page-caption { text-align: center; }
.rsvp-page-title { color: #fff; font-size: 52px; }
.rsvp-wedding-date { color: #fff; font-size: 24px; }
.rsvp-form-block { margin-top: -120px; }
.rsvp-question-form { }
.rsvp-question-block { }
.rsvp-question-attend { margin-bottom: 30px; }
.rsvp-question-attendee { margin-bottom: 10px; }

    </style>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Wedding Couple RSVP Page Template | Realwed RSVP</title>
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

<body>
    <!-- header-top -->
<!--     <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                    <div class="header-text">
                        <p class="wlecome-text">Welcome to Wedding Directory HTML Template.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                    <div class="header-text text-right">
                        <p>Are You Vendor ? <a href="vendor-form.html" class="text-white">List Your Business</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/.header-top -->
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                    <!-- header-logo -->
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt="Wedding Vendor & Supplier Directory HTML Template "></a>
                    </div>
                    <!-- /.header-logo -->
                </div>
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                  <!-- navigations -->
                    <!-- <div id="navigation">
                        <ul>
                            <li><a href="#" title="#">Homepages</a>
                                <ul>
                                    <li><a href="index.html" title="">Homepage 1</a></li>
                                    <li><a href="index-2.html" title="">Homepage 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Vendors</a>
                                <ul>
                                    <li><a href="#" title="">Listing</a>
                                        <ul>
                                            <li><a href="list-grid-view.html" title="">List Grid View</a></li>
                                            <li><a href="list-view-sidebar.html" title="">List View Sidebar</a></li>
                                            <li><a href="list-half-screen-map.html" title="">List Half Screen Map</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="">List Single</a>
                                        <ul>
                                            <li><a href="list-single-1.html" title="">List Single 1</a></li>
                                            <li><a href="list-single-2.html" title="">List Single 2</a></li>
                                        </ul>
                                    </li>
                                  <li><a href="vendor-category.html" title="">Vendor By Categories</a></li>
                                    <li><a href="vendor-location.html" title="">Vendor By Locations</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Suppliers</a>
                                <ul>
                                    <li><a href="supplier-dresses-list.html" title="">Dresses</a></li>
                                    <li><a href="supplier-cake-list.html" title="">Cakes</a></li>
                                    <li><a href="supplier-florist-list.html" title="">Florist</a></li>
                                    <li><a href="supplier-photographer-list.html" title="">Photographers</a></li>
                                    <li><a href="supplier-videographer-list.html" title="">Videographer</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Real Weddings</a>
                                <ul>
                                    <li><a href="real-wedding-list.html" title="">Real Weddings List</a></li>
                                    <li><a href="real-wedding-single.html" title="">Real Weddings Single</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Blog</a>
                                <ul>
                                    <li><a href="#" title="">Blog Listing</a>
                                    <ul>
                                        <li><a href="blog-listing.html" title="">Listing</a></li>
                                        <li><a href="blog-classic.html" title="">Classic</a></li>
                                    </ul>
                                    </li>
                                    <li><a href="#" title="">Blog Single</a>
                                    <ul>
                                        <li><a href="blog-single.html" title="">Blog Single</a></li>
                                        <li><a href="blog-full-screen-single.html" title="">Blog Single Full Screen</a></li>
                                    </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#" title="#">Features</a>
                                <ul>
                                    <li><a href="#" title="">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html" title="">About us</a></li>
                                            <li><a href="team-page.html" title="">Meet the Team</a></li>
                                            <li><a href="pricing.html" title="">Pricing</a></li>
                                            <li><a href="error-404.html" title="">404</a></li>
                                            <li><a href="faq.html" title="">FAQ's</a></li>
                                            <li><a href="contact-us.html" title="">Contact us</a></li>
                                            <li><a href="vendor-location.html" title="">Vendor Locations</a></li></ul>
                                    </li>
                                    <li><a href="#" title="">Forms</a>
                                        <ul>
                                            <li><a href="vendor-form.html" title="">Vendors Form</a></li>
                                            <li><a href="couple-form.html" title="">Couple Form</a></li>
                                            <li><a href="forgot-password.html" title="">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="">Help Center</a>
                                        <ul>
                                            <li><a href="help-center.html" title="">Help Center</a></li>
                                            <li><a href="help-category-list.html" title="">Help Category List</a></li>
                                            <li><a href="help-category-single.html" title="">Help Category Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="">Email Templates</a>
                                        <ul>
                                            <li><a href="email-template/new-id-password.html" title="">New ID/Password</a></li>
                                            <li><a href="email-template/reset-password.html" title="">Reset Password</a></li>
                                            <li><a href="email-template/forgot-password.html" title="">Forgot Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="components.html" title="">Components</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="">User Panel</a>
                                <ul>
                                    <li><a href="#" title="">Vendor Dashboard</a>
                                        <ul>
                                            <li><a href="vendor-dashboard-overview.html" title="">Dashboard</a></li>
                                            <li><a href="vendor-dashboard-listing.html" title="">Listing</a></li>
                                            <li><a href="vendor-dashboard-add-listing.html" title="">Add Listing</a></li>
                                            <li><a href="vendor-dashboard-pricing.html" title="">Pricing</a></li>
                                            <li><a href="vendor-dashboard-request-quote.html" title="">Request Quote</a></li>
                                            <li><a href="vendor-dashboard-reviews.html" title="">Reviews</a></li>
                                            <li><a href="vendor-dashboard-profile.html" title="">   Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" title="">Couple Dashboard</a>
                                        <ul>
                                            <li><a href="couple-dashboard-overview.html" title="">Dashboard</a></li>
                                            <li><a href="couple-dashboard-mywishlist.html" title="">My Listing</a></li>
                                            <li><a href="couple-dashboard-todolist-2.html" title="">To Do List</a></li>
                                            <li><a href="couple-dashboard-budget.html" title="">Budget</a></li>
                                            <li><a href="couple-dashboard-guest-manager.html" title="">Guest Manager</a></li>
                                            <li><a href="couple-dashboard-add-new-guest.html" title="">Add New Guest</a></li>
                                            <li><a href="couple-dashboard-table-planner.html" title="">Seating Table</a></li>
                                            <li><a href="couple-dashboard-profile.html" title="">   Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="couple-rsvp-page.html" title="">RSVP</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> -->
                    <!-- /.navigations -->
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-2 col-sm-12 col-12 d-none d-xl-block d-lg-block">
                    <!-- header-btn -->
                   <!--  <div class="header-btn">
                        <a href="couple-form.html" class="btn btn-primary btn-sm">Login</a>
                    </div> -->
                    <!-- /.header-btn -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.header -->
    <!-- page-header -->
    <div class="rsvp-page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="rsvp-page-caption">
                        <h1 class="rsvp-page-title"><?php echo $coupleName; ?></h1>
                        <p class="rsvp-wedding-date"><?php echo $wedding_date; ?></p>
                        <!-- <p class="rsvp-wedding-date">Friday 30 July, 2019</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.page-header -->
    
    <div class="content">
        <div class="row">

<?php 
    $view_images = "SELECT * FROM couple_images WHERE coupleID= $coupleID";
    $select_imgs = mysqli_query($connection, $view_images);  
    while($row = mysqli_fetch_assoc($select_imgs)){

      $id_img = $row['id'];
      $img = $row['image'];

 ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="real-wedding-block">
                        <!-- real wedding block -->
                        <div class="real-wedding-img zoomimg">
                            <!-- real wedding img -->
                            <a href="#"><img src="<?php echo $img; ?>" alt="Wedding Vendor & Supplier Directory HTML Template "  class="img-fluid"></a>
                        </div>
                   
                    </div>
                    <!-- /.real wedding block -->
                </div>

<?php } ?>








                </div>
<!--         <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-6">
                    <div class="card rsvp-form-block">
                        <div class="card-body">
                            <h2>Wedding RSVP</h2>
                            <p>Gregory and jillian are getting married friday at the Church of St. Anne in Garden City, N.Y.</p>
                            <div class="rsvp-form">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Please enter your email.</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address" required="">
                                    </div>
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        We can’t find your name. Make sure you enter your name as it appears on your invitations.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-3 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Wedding RSVP</h2>
                            <p>Gregory and jillian are getting married friday at the Church of St. Anne in Garden City, N.Y.</p>
                            <div class="rsvp-form">
                                <h3>Can you attend ?</h3>
                                <div class="rsvp-question-block">
                                    <form class="rsvp-question-form">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Yes, I’ll be there</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Sorry, can’t make it.</label>
                                        </div>
                                        <button type="submit" class="btn btn-default mt-3">Submit</button>
                                    </form>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert">
                        We got it. Thanks for RSVPing.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-3 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Wedding RSVP</h2>
                            <p>Gregory and jillian are getting married friday at the Church of St. Anne in Garden City, N.Y.</p>
                            <div class="rsvp-form rsvp-couple-form">
                                <h3>Can you attend ?</h3>
                                <div class="rsvp-question-block">
                                    <form class="rsvp-question-form">
                                        <div class="rsvp-question-attend">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio3">Yes, I’ll be there</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio4">Sorry, can’t make it.</label>
                                            </div>
                                        </div>
                                        <div class="rsvp-question-attendee">
                                            <h3>Couple Name</h3>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="attendee-name1">
                                                <label class="custom-control-label" for="attendee-name1">Jitu Chauhan</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="attendee-name2">
                                                <label class="custom-control-label" for="attendee-name2">Nitu Chauhan</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-default mt-3">Submit</button>
                                    </form>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert">
                        We got it. Thanks for RSVPing.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="offset-xl-3 col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h2>Wedding RSVP</h2>
                            <p>Gregory and jillian are getting married friday at the Church of St. Anne in Garden City, N.Y.</p>
                            <div class="rsvp-form rsvp-couple-form">
                                <h3>Can you attend ?</h3>
                                <div class="rsvp-question-block">
                                    <form class="rsvp-question-form">
                                        <div class="rsvp-question-attend">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio5">Yes, I’ll be there</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio6">Sorry, can’t make it.</label>
                                            </div>
                                        </div>
                                        <div class="rsvp-question-attendee">
                                            <h3>Household Names</h3>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="attendee-name3">
                                                <label class="custom-control-label" for="attendee-name3">Hitesh Mahavar</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="attendee-name4">
                                                <label class="custom-control-label" for="attendee-name4">Bhavana Mahavar</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="attendee-name5">
                                                <label class="custom-control-label" for="attendee-name5">Umaben Mahavar</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="attendee-name6">
                                                <label class="custom-control-label" for="attendee-name6">Rajeshbhai Mahavar</label>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-default mt-3">Submit</button>
                                    </form>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success" role="alert">
                        We got it. Thanks for RSVPing.
                    </div>
                </div>
            </div>
        </div> -->


    </div>
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                        <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <!-- footer-widget -->
                    <div class="footer-widget">
                        <a href="#"><img src="images/footer-logo.png" alt="" class="mb20"></a>
                        <p class="mb10">Vestibulum ante elit, convallis quis nibh in, vulputate rhoncus massa. In hac habitasse platea dictumst.</p>
                        <p>In hac habitasse platea dictumst simple dummy content here.</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            Contact Address
                        </h3>
                        <p>4998 Elk Creek Road Canton,
                            <br> GA 30114</p>
                        <p class="mb0 text-default">+0-800-1234-123</p>
                        <p class="mb0 text-default">info@realwed.com</p>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- footer-widget -->
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            About Company
                        </h3>
                        <ul class="listnone">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Pricing Plan</a></li>
                            <li><a href="#">Meet The Team</a></li>
                        </ul>
                    </div>
                </div>
                <!-- /.footer-widget -->
                <!-- /.footer-widget -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                    <div class="footer-widget">
                        <h3 class="widget-title">
                            List you Business
                        </h3>
                        <p>Are you vendor ? List your venue and service get more from listing business.</p>
                        <a href="#" class="btn btn-default">List your Business</a>
                    </div>
                </div>
                <!-- /.footer-widget -->
            </div>
        </div>
    </div>
    <!-- tiny-footer-section -->
    <div class="tiny-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                    <p>© 2018 RealWed. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/return-to-top.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-rsvp-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:58 GMT -->
</html>