
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
                            <div class="dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                    <li><a href="couple-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li class="active"><a href="couple-dashboard-mywishlist.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
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
                            <h3 class="dashboard-page-title">My Wishlist</h3>
                            <p>Hello Couple! The wishlist is great way to keep track your wedding vendor and their service availablity in your wishlist board.</p>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-pills" id="mywishlist-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="venue-tab" data-toggle="tab" href="#venue" role="tab" aria-controls="venue" aria-selected="true">Venue</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="photographer-tab" data-toggle="tab" href="#photographer" role="tab" aria-controls="photographer" aria-selected="false">Photographer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="videographer-tab" data-toggle="tab" href="#videographer" role="tab" aria-controls="videographer" aria-selected="false">Videographer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dress-tab" data-toggle="tab" href="#dress" role="tab" aria-controls="dress" aria-selected="false">Dress</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="florist-tab" data-toggle="tab" href="#florist" role="tab" aria-controls="florist" aria-selected="false">Florist</a>
                    </li>
                </ul>
                <div class="tab-content" id="mywishlist-tab">
                    <div class="tab-pane fade show active" id="venue" role="tabpanel" aria-labelledby="venue-tab">
                        <div class="wishlist-tab-board">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-4 col-12">
                                    <!-- /.Vendor thumbnail -->
                                    <div class="vendor-thumbnail">
                                        <!-- Vendor thumbnail -->
                                        <div class="vendor-img">
                                            <!-- Vendor img -->
                                            <a href="#"><img src="images/vendor-img-1.jpg" alt="" class="img-fluid"></a>
                                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa fa-times"></i></a></div>
                                        </div>
                                        <!-- /.Vendor img -->
                                        <div class="vendor-content">
                                            <!-- Vendor Content -->
                                            <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                                            <p class="vendor-address">Ahmedabad, Gujarat.</p>
                                        </div>
                                        <div class="vendor-meta">
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-price">
                                                    $150
                                                </span>
                                                <span class="vendor-text">Start From</span></div>
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-guest">
                                                    120+
                                                </span>
                                                <span class="vendor-text">Guest</span>
                                            </div>
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="rating-star">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rate-mute"></i> 
                                                    </span>
                                                <span class="rating-count vendor-text">(20)</span></div>
                                        </div>
                                        <!-- /.Vendor Content -->
                                    </div>
                                </div>
                                
                                 
                                
                                 
                                 
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="photographer" role="tabpanel" aria-labelledby="photographer-tab">
                        <div class="wishlist-tab-board">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="vendor-thumbnail">
                                        <!-- Vendor thumbnail -->
                                        <div class="vendor-img">
                                            <!-- Vendor img -->
                                            <a href="#"><img src="images/supplier-2.jpg" alt="" class="img-fluid"></a>
                                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-times"></i></a></div>
                                        </div>
                                        <!-- /.Vendor img -->
                                        <div class="vendor-content">
                                            <!-- Vendor Content -->
                                            <h2 class="vendor-title"><a href="#" class="title">Mariano Photographer </a></h2>
                                            <p class="vendor-address">Surat, India</p>
                                          
                                        </div>
                                        <!-- /.Vendor Content -->
                                          <div class="vendor-meta">
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-price">
                                                    $150
                                                </span>
                                                <span class="vendor-text">Start From</span></div>
                                           
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="rating-star">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rate-mute"></i> 
                                                    </span>
                                                <span class="rating-count vendor-text">(20)</span></div>
                                        </div>
                                        <!-- /.Vendor Content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="videographer" role="tabpanel" aria-labelledby="videographer-tab">
                        <div class="wishlist-tab-board">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="vendor-thumbnail">
                                        <!-- Vendor thumbnail -->
                                        <div class="vendor-img">
                                            <!-- Vendor img -->
                                            <a href="#"><img src="images/supplier-3.jpg" alt="" class="img-fluid"></a>
                                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-times"></i></a></div>
                                        </div>
                                        <!-- /.Vendor img -->
                                        <div class="vendor-content">
                                            <!-- Vendor Content -->
                                            <h2 class="vendor-title"><a href="#" class="title">Meghan Videographer Studio</a></h2>
                                            <p class="vendor-address">Ahmedabad, India</p>
                                       
                                        </div>
                                        <!-- /.Vendor Content -->
                                         <div class="vendor-meta">
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-price">
                                                    $150
                                                </span>
                                                <span class="vendor-text">Start From</span></div>
                                           
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="rating-star">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rate-mute"></i> 
                                                    </span>
                                                <span class="rating-count vendor-text">(20)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="dress" role="tabpanel" aria-labelledby="dress-tab">
                        <div class="wishlist-tab-board">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="vendor-thumbnail">
                                        <!-- Vendor thumbnail -->
                                        <div class="vendor-img">
                                            <!-- Vendor img -->
                                            <a href="#"><img src="images/supplier-1.jpg" alt="" class="img-fluid"></a>
                                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-times"></i></a></div>
                                        </div>
                                        <!-- /.Vendor img -->
                                        <div class="vendor-content">
                                            <!-- Vendor Content -->
                                            <h2 class="vendor-title"><a href="#" class="title">Aavis Dresses</a></h2>
                                            <p class="vendor-address">Baroda, Gujarat.</p>
                                         
                                        </div>
                                        <!-- /.Vendor Content -->
                                         <div class="vendor-meta">
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-price">
                                                    $150
                                                </span>
                                                <span class="vendor-text">Start From</span></div>
                                           
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="rating-star">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rate-mute"></i> 
                                                    </span>
                                                <span class="rating-count vendor-text">(20)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="florist" role="tabpanel" aria-labelledby="florist-tab">
                        <div class="wishlist-tab-board">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="vendor-thumbnail">
                                        <!-- Vendor thumbnail -->
                                        <div class="vendor-img">
                                            <!-- Vendor img -->
                                            <a href="#"><img src="images/supplier-4.jpg" alt="" class="img-fluid"></a>
                                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-times"></i></a></div>
                                        </div>
                                        <!-- /.Vendor img -->
                                        <div class="vendor-content">
                                            <!-- Vendor Content -->
                                            <h2 class="vendor-title"><a href="#" class="title">Maria Florist</a></h2>
                                            <p class="vendor-address">Mumbai, India</p>
                                         
                                        </div>
                                        <!-- /.Vendor Content -->
                                         <div class="vendor-meta">
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="vendor-price">
                                                    $150
                                                </span>
                                                <span class="vendor-text">Start From</span></div>
                                           
                                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                                <span class="rating-star">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rate-mute"></i> 
                                                    </span>
                                                <span class="rating-count vendor-text">(20)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-mywishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:35:32 GMT -->
</html>