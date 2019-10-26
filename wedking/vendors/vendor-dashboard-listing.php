<?php
include 'include/controller.php';
$session_username = $_SESSION['user_name'];
$session_role = $_SESSION['role'];
if(empty($_SESSION['user_name'])){
    header("location:login.php");
}
if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
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
                    <li class="active"><a href="vendor-dashboard-listing.php"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> My Listed Item </a></li>
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Listing</h3>
                            <p>Lists present multiple line items vertically as a single continuous element.</p>
                        </div>
  <?php 
  
  if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     echo "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Success!</h4>
                Your Data Saved.
              </div>";
}

 ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <a href="vendor-dashboard-add-listing.php" class="btn btn-default btn-sm">add new Listing</a>
                    </div>
                </div>
                <div class="dashboard-vendor-list">
                    <ul class="list-unstyled">
                     
<?php 

   $query = "SELECT * FROM venders WHERE venderID =$login_id";
        $select_image = mysqli_query($connection, $query); 
            
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $ven_title = $row['tittleName'];
          $cat = $row['category'];
          $s_cap = $row['seatCapacity'];
          $prc = $row['price'];
          $addrs = $row['address'];
          $img = $row['image1'];
          $plan = $row['plan_Type'];
          $tym_durt = $row['time_Duration'];
          $stats = $row['status'];
          $cty = $row['city'];
          $pcode = $row['postcode'];
          $state = $row['state'];
          $contry = $row['country'];
          $descptn = $row['descriptions'];
          $lat = $row['latitude'];
          $long = $row['longitude'];
          $amen = $row['amenities'];
          $s_f_p = $row['start_from_price'];
          $gst = $row['guest'];
          $revw = $row['review'];
          $vnuHeighlight = $row['venueHeighlight'];
          $max_cap = $row['maximumCapacity'];
          $gst_min = $row['guestMinimum'];
          $stl = $row['style'];
          $evntspc = $row['eventSpace'];
          $accdn = $row['accomodation'];
          $loctn = $row['location'];
          $isDelete = $row['isDeleted'];
          $vid = $row['video'];
          $fb = $row['facebook'];
          $twr = $row['twitter'];
          $inst = $row['instagram'];
          $yutb = $row['youtube'];
          $ven_abt = $row['about'];


 ?>

                        <li>
                            <div class="dashboard-list-block">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-4 col-md-12 col-sm-12 col-12">
                                        <div class="dashboard-list-img"><a href="#"><img src="./images/<?php echo $img; ?>" alt="" class="img-fluid"></a></div>
                                    </div>
                                    <div class="col-xl-7 col-lg-5 col-md-6 col-sm-12 col-12 ">
                                        <div class="dashboard-list-content">
                                            <h3 class="mb0"><a href="#" class="title"><?php echo $ven_title; ?></a></h3>
                                            <p><?php echo $ven_abt; ?></p>
                                        </div>
                                    </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                            <div class="dashboard-list-btn">
                                <!-- <a href="#view<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-green btn-xs mr10">View</a> -->
                                <a href="<?php echo "vendor-dashboard-edit-listing.php?edit={$id}"; ?>" class="btn btn-outline-violate btn-xs mr10">Edit</a>
                                <a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs ">Delete</a>
                            </div>
                        </div>
                                </div>
                            </div>


                   <!--Delete Modal -->
                    <div id="delete<?php echo $id; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <form method="post">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Delete</h4>
                                    </div>
                                    <div class="modal-body">
                                        <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                        <div class="alert alert-danger">Are you Sure you want Delete <strong>
                                                <?php echo $id; ?>?</strong> </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="note_delete" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> YES</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> NO</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                     <?php 
        
    if(isset($_POST['note_delete'])){


             $the_client_id = $_POST['delete_id'];
             
             // $not_delete_client_query = "UPDATE venders SET isDeleted= '1' WHERE id=$the_client_id ";
             $not_delete_client_query = "DELETE  FROM venders WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: vendor-dashboard-listing.php");
             
                            
         }      

   ?>



  <?php } ?>



                        </li>



                    </ul>
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

<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html>