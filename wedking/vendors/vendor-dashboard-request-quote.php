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
                    <li><a href="vendor-dashboard-pricing.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Pricing Plan</a></li>
                    <li class="active"><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
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
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="dashboard-page-title">Request List</h3>
                                    <p>Check your request quote.</p>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-filter-row mb20">
                            <div class="row">
                                <div class="col-xl-3">
                                    <select class="form-control wide" id="exampleFormControlSelect1">
                                        <option>Select Your Listing</option>
                                        <option>Select Your Listing #1</option>
                                        <option>Select Your Listing #2</option>
                                        <option>Select Your Listing #3</option>
                                        <option>Select Your Listing #4</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card request-list-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Wedding Date</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="requester-name">Jessica J. Titus</td>
                                        <td class="wedding-date">26/10/2020</td>
                                        <td class="requester-id">jessicatitus@gmail.com</td>
                                        <td class="requester-phone">00000000</td>
                                        <td class="requester-action"><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="requester-name">Anita Parmar</td>
                                        <td class="wedding-date">26/11/2020</td>
                                        <td class="requester-id">anita@gmail.com</td>
                                        <td class="requester-phone">111111111</td>
                                        <td class="requester-action"><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="requester-name">Kim R. Wiley</td>
                                        <td class="wedding-date">26/12/2020</td>
                                        <td class="requester-id">kim@gmail.com</td>
                                        <td class="requester-phone">22222222</td>
                                        <td class="requester-action"><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="requester-name">Betty L. Plain</td>
                                        <td class="wedding-date">28/12/2020</td>
                                        <td class="requester-id">plain@gmail.com</td>
                                        <td class="requester-phone">333333333 </td>
                                        <td class="requester-action"><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
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
     <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/offcanvas.js"></script>
    
</body>
<?php include"include/footer.php"; ?>

<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-request-quote.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html>