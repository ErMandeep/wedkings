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
                                <a class="dropdown-item" href="couple-dashboard-website.php">Website</a>
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
                    <!-- <li><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
                    <!-- <li><a href="couple-dashboard-table-planner.php"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li> -->
                    <li class="active"><a href="couple-dashboard-website.php"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
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
                            <h3 class="dashboard-page-title">Wedding Website</h3>
                            <p>Create Your wedding website and share with your friend and family.</p>
                        </div>
                    </div>
                </div>
<?php 
$view_images = query("SELECT * FROM couples WHERE coupleID= $login_id");
while($row = mysqli_fetch_assoc($view_images)){

$username = $row['username'];
$feature_img = $row['feature_img'];
}
?>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">Settings</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-2">Website URL</div>
                                    <div class="col-xl-8"> 
                                        <p class="text-primary" id="myInput">http://localhost/realwed/couples/<?php echo $username; ?></p>
                                    </div>
                                    <div class="col-xl-2 text-right ">
                                        <a href="#" class="btn btn-default btn-xs">Copy URL</a>
                                        <!-- <button class="btn btn-default btn-xs" onclick="myFunction()">Copy URL</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                RSVP Setting
                            </div>
                             
                                <div class="rsvp-create-form">
                                    <form class="form-horizontal" method="Post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <h5>RSVP Form</h5>
                                            <ul class="list-group">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Start Your RSVP Form
                                                    <div class="switch-notification">
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider"></span>
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class=" ">
                                                <h5>Header Image</h5>
                                                <div class="custom-file">
                                                    <input type="file" name="feature_img" class="custom-file-input" id="customFile">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <div class="couple-form-image-section">
                                                    <!-- <img src="images/couple-form-image.jpg" alt="" class="img-fluid"> -->
                                                    <img src="images/<?php echo $feature_img; ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <input type="submit" name="headersave" class="btn btn-default" value="Save">
                                            <!-- <button class="btn btn-default" type="submit">Save</button> -->
                                        </div>
                                    </form>
                                </div>
                             <?php 
                                 if(isset($_POST['headersave'])){

                                 if($_FILES['feature_img']['name'] != ""){    

                                $img1 = pathinfo($_FILES["feature_img"]["name"], PATHINFO_EXTENSION);
                                $name1 = rand(1,5000).".".$img1;

                                move_uploaded_file($_FILES["feature_img"]["tmp_name"],"./images/$name1");

                                $imagesql = "UPDATE couples SET feature_img = '$name1' WHERE coupleID={$login_id}";
                                $update_img = mysqli_query($connection, $imagesql);

                                }


                                if($update_img){
                                    header('Location: couple-dashboard-website.php');
                                }
                                         }
                                              ?>
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

    <script>
    
    </script>
</body>
<?php include "include/footer.php"; ?>

<!-- made by webmax(Mandeep Developer) -->
</html>