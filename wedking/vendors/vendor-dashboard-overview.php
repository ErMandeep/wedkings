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
                    <li class="active"><a href="vendor-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a>
                        <li><a href="vendor-dashboard-pricing.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
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
                    <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                        <div class="dashboard-page-header">

                            <h3 class="dashboard-page-title">Hi, Vendor.</h3>
                            <p class="d-block">Here’s what’s happening with your wedding venue business today.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
      <?php 
 if(isset($_SESSION['id'])){
    $vender_id = $_SESSION['id'];
 }     
$query = "SELECT * FROM venders WHERE venderID = '$vender_id'";
$sql = mysqli_query($connection, $query);
$totalvender_list = mysqli_num_rows($sql);

?>          
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count"><?php echo $totalvender_list; ?></div>
                                <p>Total Listed Item</p>
                            </div>
                                  <div class="summary-icon"><i class="icon-051-wedding-arch"></i></div>

                            </div>
                              <div class="card-footer text-center"><a href="vendor-dashboard-listing.php">View All</a></div>
                           
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count">2</div>
                                <p>Request Quote</p>
                            </div>
                                  <div class="summary-icon"><i class="icon-021-love-1"></i></div>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">

<?php 
$query = "SELECT * FROM rating";
$sql = mysqli_query($connection, $query);
$totalrow = mysqli_num_rows($sql);

?>
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                <div class="summary-count"><?php echo $totalrow; ?></div>
                                <p>Your Reviews</p>

                            </div>
                              <div class="summary-icon"><i class="icon-004-chat"></i></div>
                            </div>
                            <div class="card-footer text-center"><a href="vendor-dashboard-reviews.php">View All</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/offcanvas.js"></script>
    
</body>

<?php include"include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-overview.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:55 GMT -->
</html>