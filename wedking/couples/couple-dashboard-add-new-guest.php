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
                <div class="col-xl-10 col-lg-9 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="index.php"><img src="images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 text-right col-md-4 col-sm-6 col-6">
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
                    <li><a href="couple-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="couple-dashboard-mywishlist.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="couple-dashboard-todolist.php"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-dashboard-budget.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <!-- <li class="active"><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
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
                    <div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Guest</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="single-guest-tab" data-toggle="tab" href="#single-guest" role="tab" aria-controls="single-guest" aria-selected="true">Single Guest</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="couple-guest-tab" data-toggle="tab" href="#couple-guest" role="tab" aria-controls="couple-guest" aria-selected="false">Couple </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="household-tab" data-toggle="tab" href="#household" role="tab" aria-controls="household" aria-selected="false">Household</a>
                            </li>
                        </ul>
                    </div>
                    <div class="">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="single-guest" role="tabpanel" aria-labelledby="single-guest-tab">
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h4>Guest Information</h4>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="fname">First Name</label>
                                                    <input id="fname" name="fname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="lname">Last Name</label>
                                                    <input id="lname" name="lname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h4>Relation with couple</h4>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" id="family">Group/Family</label>
                                                    <select class="wide" for="family">
                                                        <option value="Groom Sister">Groom Sister</option>
                                                        <option value="Bride Friend">Bride Friend</option>
                                                        <option value="Groom Friend">Groom Friend</option>
                                                        <option value="Bride Family">Bride Family</option>
                                                        <option value="Groom Family">Groom Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h4>Contact Information</h4>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address1">Address Line 1</label>
                                                    <input id="address1" name="address1" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address2">Address Line 2</label>
                                                    <input id="address2" name="address2" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email">Email</label>
                                                    <input id="email" name="email" type="email" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="city">City</label>
                                                    <select class="wide" id="city">
                                                        <option value="Ahmedabad">Ahmedabad</option>
                                                        <option value="Baroda">Baroda</option>
                                                        <option value="Bharuch">Bharuch</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="country">Country</label>
                                                    <select class="wide" id="country">
                                                        <option value="India">India</option>
                                                        <option value="UK">UK</option>
                                                        <option value="US">US</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="postcode">Postcode</label>
                                                    <input id="postcode" name="postcode" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="couple-guest" role="tabpanel" aria-labelledby="couple-guest-tab">
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Guest Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="firstname">First Name</label>
                                                    <input id="firstname" name="firstname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="lastname">Last Name</label>
                                                    <input id="lastname" name="lastname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="partnerfname">Partner First Name</label>
                                                    <input id="partnerfname" name="partnerfname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="partnerlname">Partner Last Name</label>
                                                    <input id="partnerlname" name="partnerlname" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="family2">Group/Family</label>
                                                    <select class="wide" id="family2">
                                                        <option value="Groom Sister">Groom Sister</option>
                                                        <option value="Bride Friend">Bride Friend</option>
                                                        <option value="Groom Friend">Groom Friend</option>
                                                        <option value="Bride Family">Bride Family</option>
                                                        <option value="Groom Family">Groom Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Contact Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address3">Address Line 1</label>
                                                    <input id="address3" name="address3" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address4">Address Line 2</label>
                                                    <input id="address4" name="address4" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email1">Email</label>
                                                    <input id="email1" name="email1" type="email" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="city1">City</label>
                                                    <select class="wide" id="city1">
                                                        <option value="Ahmedabad">Ahmedabad</option>
                                                        <option value="Baroda">Baroda</option>
                                                        <option value="Bharuch">Bharuch</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="country1">Country</label>
                                                    <select class="wide" id="country1">
                                                        <option value="India">India</option>
                                                        <option value="UK">UK</option>
                                                        <option value="US">US</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="postcode1">Postcode</label>
                                                    <input id="postcode1" name="postcode" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="household" role="tabpanel" aria-labelledby="household-tab">
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <h3>Guest Information</h3>
                                                <hr>
                                            </div>
                                            <div class="col-xl-12">
                                                <div class="row">
                                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="fname2">First Name</label>
                                                            <input id="fname2" name="fname2" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="lname2">Last Name</label>
                                                            <input id="lname2" name="lname2" type="text" placeholder="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-2">
                                                        <button class="btn btn-primary mt30"> Delete</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <a href="#" class="btn btn-default">Add New Row</a>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt30 mb30">
                                                <div class="form-group">
                                                    <label class="control-label" for="family3">Group/Family</label>
                                                    <select class="wide" id="family3">
                                                        <option value="Groom Sister">Groom Sister</option>
                                                        <option value="Bride Friend">Bride Friend</option>
                                                        <option value="Groom Friend">Groom Friend</option>
                                                        <option value="Bride Family">Bride Family</option>
                                                        <option value="Groom Family">Groom Family</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <legend>Contact Information</legend>
                                                <hr>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address5">Address Line 1</label>
                                                    <input id="address5" name="address5" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="address6">Address Line 2</label>
                                                    <input id="address6" name="address6" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="email3">Email</label>
                                                    <input id="email" name="email3" type="email3" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="city3">City</label>
                                                    <select class="wide" id="city3">
                                                        <option value="Ahmedabad">Ahmedabad</option>
                                                        <option value="Baroda">Baroda</option>
                                                        <option value="Bharuch">Bharuch</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="country3">Country</label>
                                                    <select class="wide" id="country3">
                                                        <option value="India">India</option>
                                                        <option value="UK">UK</option>
                                                        <option value="US">US</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="postcode3">Postcode</label>
                                                    <input id="postcode3" name="postcode3" type="text" placeholder="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="singlebutton" class="btn btn-default">Save Guest Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/offcanvas.js"></script>
</body>

<?php include "include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-add-new-guest.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:58 GMT -->
</html>