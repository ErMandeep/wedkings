<?php
include 'include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:login.php");
}
?>
<?php include"include/header.php"; ?>


<body class="body-bg">
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                            <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php avatar(); ?>
                           <span class="user-vendor-name"><?php echo $_SESSION['user_name']; ?></span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="vendor-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="vendor-dashboard-listing.php"> My Listed Item </a>
                                <a class="dropdown-item" href="vendor-dashboard-pricing.php">Pricing Plan</a>
                                <a class="dropdown-item" href="vendor-dashboard-request-quote.php">Request Quotes</a>
                                <a class="dropdown-item" href="vendor-dashboard-reviews.php">Reviews </a>
                                <a class="dropdown-item" href="vendor-dashboard-profile.php">My Profile </a>
                                <a href="#logout"  data-toggle="modal" class="dropdown-item">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    <img src="images/dashboard-profile.jpg" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name">John Deo</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="vendor-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
                    <li class="active"><a href="vendor-dashboard-pricing.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                    <li><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="vendor-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="#logout" data-toggle="modal"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Pricing Plan</h3>
                            <p>Choose wisely your pricing plan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb0">Plan Type:</h5>
                                <p>Free - Basic</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12 ">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb0">Time Duration </h5>
                                <p>Started: Aug 18, 2018 - <span class="text-danger">Expired: Aug 18, 2019</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb0"> Status </h5>
                                <p><span class="dot-badge badge-success"></span> Active</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-pricing">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-12">
                            <div class="pricing-box pricing-basic">
                                <!-- pricing box -->
                                <a href="#" class="dashboard-price-badge badge badge-success">Current Active</a>
                                <h4 class="pricing-name">Basic</h4>
                                <div class="price">FREE</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>One Listing</li>
                                        <li><strong>30 Days </strong> Availability</li>
                                        <li>Standard Listing</li>
                                        <li>Limited Support</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary">Get One Month Free</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-12">
                            <div class="pricing-box pricing-standard">
                                <!-- pricing box -->
                                <h4 class="pricing-name">standard</h4>
                                <div class="price"><span class="price-sign">$</span> 10</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>10 Listing</li>
                                        <li>Unlimited Availability</li>
                                        <li>Featured In the Results</li>
                                        <li>24/7 Support</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-white">Select Plan</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-4 col-12">
                            <div class="pricing-box pricing-premium">
                                <!-- pricing box -->
                                <h4 class="pricing-name">premium</h4>
                                <div class="price"><span class="price-sign">$</span> 30</div>
                                <div class="price-feature">
                                    <ul class="listnone">
                                        <li>Unlimited Listings</li>
                                        <li>Unlimited Availability</li>
                                        <li>Featured In Top 10 Results</li>
                                        <li>24/7 Priority Support</li>
                                    </ul>
                                </div>
                                <a href="#" class="btn btn-primary">Select Plan</a>
                            </div>
                            <!-- /.pricing box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/offcanvas.js"></script>
   
</body>

<?php include"include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html>