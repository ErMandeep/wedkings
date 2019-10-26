<?php
include 'include/controller.php';
if(empty($_SESSION['email'])){
    header("location:login.php");
}
?>
<?php include "include/header.php"; ?>

<body class="body-bg">
    <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-6 col-6">
                    <div class="user-vendor">
                        <div class="dropdown">
                          <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php avatar(); ?>
                           <span class="user-vendor-name"><?php echo $_SESSION['coupleName']; ?></span> 
                        </a>
                            <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="couple-dashboard-overview.php">Dashboard</a>
                                <a class="dropdown-item" href="couple-dashboard-mywishlist.php">My Wishlist </a>
                                <a class="dropdown-item" href="couple-dashboard-todolist.php">To Do List</a>
                                <a class="dropdown-item" href="couple-dashboard-budget.php">Budget</a>
                                <!-- <a class="dropdown-item" href="couple-dashboard-guest-manager.php">Guestlist </a> -->
                                <!-- <a class="dropdown-item" href="couple-dashboard-table-planner.php">Seating Table </a> -->
                                <a class="dropdown-item" href="couple-dashboard-profile.php">My Profile </a>
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
            <?php avatar3(); ?>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li class="active"><a href="couple-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="couple-dashboard-mywishlist.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="couple-dashboard-todolist.php"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-dashboard-budget.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <!-- <li><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
                    <!-- <li><a href="couple-dashboard-table-planner.php"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li> -->
                     <li><a href="couple-dashboard-website.php"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                       <li><a href="couple-dashboard-realwedding.php"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
                    <li><a href="couple-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="#logout" data-toggle="modal"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Couple Dashboard</h3>
                            <p>Welcome couple. You can check and manage your wishlist, checklist, budget and guestlist overview.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-vendor-wishlist">
                            <div class=" card-body summary-content">
                                <h3 class="summary-title ">Vendors Wishlist</h3>
                                <div class="summary-count">10</div>
                                <p class="summary-text">Compare & Finalize</p>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-table-seating">
                            <div class="card-body summary-content">
                                <h3 class="summary-title ">Table Seating</h3>
                                <div class="summary-count">300</div>
                                <p class="summary-text"><span class="text-primary">15</span> Seat remain</p>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-guest-list">
                            <div class="card-body summary-content">
                                <h3 class="summary-title ">Guest List</h3>
                                <div class="summary-count">120</div>
                                <p class="summary-text">0 Accepted <span class="ml5">0 Declined</span></p>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-budget">
                            <div class=" card-body summary-content">
                                <h3 class="summary-title ">Budget</h3>
                                <div class="summary-count">$12000</div>
                                <p class="summary-text">Spent $ 2000 out of $10,000 so far.</p>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <div class="card summary-block summary-todo">
                            <div class="card-body summary-content">
                                <h3 class="summary-title ">Total To Do</h3>
                                <div class="summary-count">12</div>
                                <p class="summary-text">5 Complete <span class="ml5">7 remain</span></p>
                            </div>
                            <div class="card-footer text-center"><a href="#">View All</a></div>
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

<?php include "include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-overview.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:34:01 GMT -->
</html>