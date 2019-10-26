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
                    <li><a href="vendor-dashboard-request-quote.php"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Request Quotes</a></li>
                    <li><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li class="active"><a href="vendor-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="#logout" data-toggle="modal"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title ">My Profile</h3>
                            <p>Change your profile image and information edit and save.</p>
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
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Password Change</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Email Notifications</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Delete Account</a>
                        </div>
                    </div>

                    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="tab-content" id="v-pills-tabContent">
                            

                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card">
                                    <div class="card-header">Profile</div>
                                    <div class="card-body">
               <?php 
      $login_id = "";
      if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
      }
      
    $view_vender_query = "SELECT * FROM users WHERE id= $login_id";
    $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
    while($row = mysqli_fetch_assoc($select_vender_by_id)){
        // echo"<pre>"; print_r($_SESSION['id']); echo"</pre>"; 
          $id = $row['id'];
          $nm = $row['name'];
          $eml = $row['email'];
          $ph = $row['phone'];
          $descptn = $row['description'];
          $fb = $row['facebook'];
          $twr = $row['twitter'];
          $inst = $row['instagram'];
          $yutb = $row['youtube'];
          $image1 = $row['image1'];


}

    if(isset($_POST['update']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        $nm = $_POST['name'];
        $eml = $_POST['email'];
        $ph = $_POST['phone'];
        $descptn = $_POST['description'];

        $fb = $_POST['facebook'];
        $twr = $_POST['twitter'];
        $inst = $_POST['instagram'];
        $yutb = $_POST['youtube'];

        $add_client_query = "UPDATE users SET ";
        $add_client_query .="name = '{$nm}',";       
        $add_client_query .="email = '{$eml}',";       
        $add_client_query .="phone = '{$ph}',";       
        $add_client_query .="description = '{$descptn}',";       
        $add_client_query .="facebook = '{$fb}',";       
        $add_client_query .="twitter = '{$twr}',";       
        $add_client_query .="instagram = '{$inst}',";       
        $add_client_query .="youtube = '{$yutb}'";       
        $add_client_query .= "WHERE id = $login_id ";      
        
        $clients_result = mysqli_query($connection, $add_client_query);

        confirmQuery($clients_result);

         if($_FILES['image']['name'] != ""){    

        $img1 = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["image"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE users SET image1 = '$name1' WHERE id={$login_id}";
        $update_img = mysqli_query($connection, $imagesql);

        }

        header('Location: vendor-dashboard-profile.php?success=1');
        // if(!$update_img){
        //  confirmQuery($update_img);

        // }

        }


     ?>                                    
                                    <form class="form-horizontal" method="Post" enctype="multipart/form-data">
                                            <!-- Form Name -->
                                            <div class="profile-upload-img">
                                                <div class="row">
                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                        <div id="image-preview">
                                                        </div>
                                                        
                                                        <input type="file" name="image" id="image-upload" class="upload-profile-input">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="personal-form-info">
                                                <div class="row">
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="vendorname">Vendor Name</label>
                                                            <input id="vendorname" name="name" value="<?php echo "$nm"; ?>" type="text" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email">Email</label>
                                                            <input id="email" name="email" value="<?php echo "$eml"; ?>" type="email" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="phone">Phone</label>
                                                            <input id="phone" name="phone" value="<?php echo "$ph"; ?>" type="text" placeholder="" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="summernote">Descriptions </label>
                                                            <textarea class="form-control" id="summernote" name="descriptions" rows="6" placeholder="Write Descriptions for your venue"><?php echo "$descptn"; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="social-form-info mb-0">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <h3>Social Media </h3>
                                                        <div class="dashboard-section-line">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="facebook">Facebook</label>
                                                            <input id="facebook" name="facebook" value="<?php echo "$fb"; ?>" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="twitter">Twitter</label>
                                                            <input id="twitter" name="twitter" value="<?php echo "$twr"; ?>" type="url" placeholder="https://www.twitter.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="instagram">Instagram</label>
                                                            <input id="instagram" value="<?php echo "$inst"; ?>" name="instagram" type="url" placeholder="https://www.instagram.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="youtube">Youtube</label>
                                                            <input id="youtube" value="<?php echo "$yutb"; ?>" name="youtube" type="url" placeholder="https://www.youtube.com" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <button class="btn btn-default" name="update" type="submit">Update profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="card">
                                    <div class="card-header">Password Change</div>
                                    <div class="card-body">
                                <?php change_vender_password(); ?> 
                                       <form class="row" method="post">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="currentpassword">Current Password</label>
                                                    <input id="currentpassword" name="oldpassword" type="password" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="newpassword">New Password</label>
                                                    <input id="newpassword" name="newpassword" type="password" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="retypepassword">Retype Password</label>
                                                    <input id="retypepassword" name="confirmnewpassword" type="password" placeholder="" class="form-control ">
                                                </div>
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button class="btn btn-default" name="update_psss" type="submit">Save Changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card">
                                    <div class="card-header">Email Notifications</div>
                                    <div class="">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #1
                                                <div class="switch-notification">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #2
                                                <div class="switch-notification">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">Email Notifications List #3
                                                <div class="switch-notification">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider"></span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="card">
                     <?php 
    if(isset($_POST['delete_acc']))
    {
      $login_id = "";
      if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
      }
      if(isset($_POST['listing'])){
        $listing = $_POST['listing'];
    $view_vender_query1 = " DELETE FROM venders WHERE venderID= $listing";
    $delete_user_all_listing = mysqli_query($connection, $view_vender_query1);
    }else{
        $listing = "";
    }
    if(isset($_POST['account'])){
    $account = $_POST['account'];
    $view_vender_query = " DELETE FROM users WHERE id= $account";
    $delete_user = mysqli_query($connection, $view_vender_query);
    if($delete_user){
    header('Location: logout.php');
    }

    }else{
        $account = "";
    }

    

    }

     ?>                                
                                    <div class="card-header">Account Delete</div>
                                    <div class="card-body">
                                        <p>In the fields below, enter your new password.</p>
                                         <form method="Post">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="listing" class="custom-control-input" id="customCheck1" value="<?php echo $login_id; ?>">
                                                <label class="custom-control-label" for="customCheck1">Delete my account and data listing also.</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="account" class="custom-control-input" id="customCheck2" value="<?php echo $login_id; ?>">
                                                <label class="custom-control-label" for="customCheck2">Delete my account only.</label>
                                            </div>
                                            <button class="btn btn-primary mt30" name="delete_acc" type="submit">Delete My Account</button>
                                        </form>
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
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script>
    $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false // Default: false
        });
    });
    </script>
    <script src="js/jquery.uploadPreview.js"></script>
   
    <script src="js/summernote-bs4.js"></script>
    <script src="js/offcanvas.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $("#image-upload").click(function() {
                alert("Image Size Should Be 100 × 100");
            });

        });
    </script>
    
</body>

<?php include"include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html> 