<?php
include 'include/controller.php';
if(empty($_SESSION['email'])){
    header("location:login.php");
}
?>
<?php 
$login_id = "";
if (isset($_SESSION['coupleID'])) {
$login_id = $_SESSION['coupleID'];
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
                                <a class="dropdown-item" href="couple-dashboard-guest-manager.php">Guestlist </a>
                                <!-- <a class="dropdown-item" href="couple-dashboard-table-planner.php">Seating Table </a> -->
                                <!-- <a class="dropdown-item" href="couple-dashboard-table-planner.php">Real Wedding</a> -->
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
                    <li><a href="couple-dashboard-website.php"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                    <li class="active"><a href="couple-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
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
                            <h3 class="dashboard-page-title">Real Wedding </h3>
                            <p>Submit your real wedding photos and vendor details. Share your story of big day</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-8 col-md-8 col-sm-12 col-12">
                        <!-- <div class="card">
                            <h4 class="card-header">Real Wedding Setting</h4>
                            <div class="card-body">
                                <ul class="list-group">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">Show Private
                                        <div class="switch-notification">
                                            <label class="switch">
                                                <input type="checkbox">
                                                <span class="slider"></span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <div class="card">
                            <h4 class="card-header">
                                Upload Your Real Wedding
                          </h4>
                            <form method="Post" enctype="multipart/form-data">
                                <div class="card-body">
                                    <h4 class="card-title">Upload Featured Image</h4>
                                    <div class="custom-file">
                                        <input type="file" name="feature_img" class="custom-file-input" id="realwedding-featured-img">
                                        <label class="custom-file-label" for="realwedding-featured-img">Choose Featured image</label>
                                    </div>
                                </div>
                                <div class="card-body border-top">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h4 class="card-title">Upload Wedding Gallery</h4>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <!-- File Button -->
                                            <div class="form-group">
                                                <label class="control-label d-none" for="filebutton">Browse Image</label>
                                                <input id="filebutton" name="file[]" class="btn btn-primary btn-block" type="file" multiple>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="row">

<?php 
    $view_images = "SELECT * FROM couple_images WHERE coupleID= $login_id";
    $select_imgs = mysqli_query($connection, $view_images);  
    while($row = mysqli_fetch_assoc($select_imgs)){

      $id_img = $row['id'];
      $img = $row['image'];

 ?>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                            <div class="gallery-upload-img">
                                <img src="<?php echo $img; ?>" alt="" class="img-fluid">
                                <span class="delete-gallery-img"> <a href="delete.php?id=<?php echo $id_img."&&cid=".$login_id."&&image=".$img; ?>" onclick="return confirm('Are you sure?')"><i class="fa  fa-times-circle"></i></a></span>
                            </div>
                        </div>

<?php } ?> 
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                               <!--  <div class="card-body border-top">
                                    <h4 class="card-title mb0">Add Vendors Information</h4>
                                    <p><small>Select vendor. Type your vendor name and hit the enter.</small></p>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="our-website">
                                            <label class="form-check-label" for="inlineRadio1">From Our website</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="vendor-outside">
                                            <label class="form-check-label" for="inlineRadio2">Outside Website</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="both">
                                            <label class="form-check-label" for="inlineRadio3">Both</label>
                                        </div>
                                    </div>
                                    <div class="vendor-our-website rw-vendor-list-info our-website both">
                                        <hr>
                                        <div class="form-row ">
                                            <div class="col-xl-12">
                                                <div class="form-group">
                                                    <label for="VendorsCateogry" class="d-none">Cateogry</label>
                                                    <input type="text" class="form-control" id="VendorsCateogry" aria-describedby="" placeholder="Select vendor">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vendor-outside rw-vendor-list-info vendor-outside both">
                                        <hr>
                                        <h4 class="card-title mb0">Add Vendors Information <small class="text-muted">(Outside from our website)</small></h4>
                                        <p><small>Add Vednor information you used from other vendors.</small></p>
                                        <div class="form-row ">
                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label for="fname" class="control-label d-none">Vendor Category</label>
                                                    <input type="text" class="form-control" id="fname" aria-describedby="" placeholder="Write Category">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label for="fname" class="control-label d-none">Business Name</label>
                                                    <input type="text" class="form-control" id="fname" aria-describedby="" placeholder="Business Name">
                                                </div>
                                            </div>
                                            <div class="col-xl-3">
                                                <div class="form-group">
                                                    <label for="fname" class="control-label d-none">Vendor URL</label>
                                                    <input type="text" class="form-control" id="fname" aria-describedby="" placeholder="https://example.com/">
                                                </div>
                                            </div>
                                            <div class="col-xl-2"><a href="javascript:void(0);" class="btn btn-primary">Delete</a></div>
                                            <div class="col-xl-12">
                                                <a href="javascript:void(0);" class="btn btn-default" id="btn2">+ Add New Vendor  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 -->


                                <div class="card-body border-top">
                                    <h4 class="card-title">Story Description</h4>
                                    <div class="form-row">
                                    <?php 
                                    $view_images = "SELECT * FROM couples WHERE coupleID= $login_id";
                                    $select_imgs = mysqli_query($connection, $view_images);  
                                    while($row = mysqli_fetch_assoc($select_imgs)){

                                    $storyDescription = $row['storyDescription'];
                                }
                                    ?>           
                                        <div class="col-xl-12">
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Write about your wedding journey.</label>
                                                <textarea class="form-control" name="storyDescription" id="exampleFormControlTextarea1" rows="3"><?php echo $storyDescription; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <input type="submit" class="btn btn-default" name="submit" value="Submit Real Weddings">
                                            <!-- <button type="Submit" class="btn btn-default">Submit Real Weddings</button> -->
               
                <?php 
if(isset($_POST['submit'])){
                                                            
$j = 0;     // Variable for indexing uploaded image.
$target_path = "uploads/";     // Declaring Path for uploaded images.
for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
// Loop to get individual element from the array
$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];     // Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (($_FILES["file"]["size"][$i] < 1000000)     // Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
// If file moved to uploads folder.
$query = query("INSERT INTO couple_images (coupleID, image) VALUES ('$login_id', '$target_path')");
    // echo $target_path;
header('Location: couple-dashboard-realwedding.php');

echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
}
}




// update data
        $storyDescription = $_POST['storyDescription'];

        $add_client_query = "UPDATE couples SET ";
        $add_client_query .="storyDescription = '{$storyDescription}'";       
        $add_client_query .= "WHERE coupleID = $login_id ";      
        
        $clients_result = mysqli_query($connection, $add_client_query);

        confirmQuery($clients_result);

         if($_FILES['feature_img']['name'] != ""){    

        $img1 = pathinfo($_FILES["feature_img"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["feature_img"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE couples SET feature_img = '$name1' WHERE coupleID={$login_id}";
        $update_img = mysqli_query($connection, $imagesql);

        }


        if($clients_result || $update_img){
            header('Location: couple-dashboard-realwedding.php');
        }



                                            }
                                             ?>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/offcanvas.js"></script>
    <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/magicsuggest.js"></script>
    <script>
    $(function() {
        var VendorsCateogry = $('#VendorsCateogry').magicSuggest({
            data: ['Photographer - Matrimony Wedding Photography',
                'Venue',
                'Cake',
                'Dresses',
                'Dj'

            ]
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('input[type="radio"]').click(function() {
            var inputValue = $(this).attr("value");
            var targetBox = $("." + inputValue);
            $(".rw-vendor-list-info").not(targetBox).hide();
            $(targetBox).show();
        });
    });
    </script>
</body>

<?php include "include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-realwedding.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:35:41 GMT -->
</html>