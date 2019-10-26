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
                            <h3 class="dashboard-page-title">Add New Listing</h3>
                            <p>Lists present multiple line items vertically as a single continuous element.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"> <h4 class="mb0">About Listing</h4></div>
                    <div class="">
            <?php add_new_vender(); ?>
     <form action="" method="post" enctype="multipart/form-data" class="">
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">
                                   
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="tittleName" type="text" placeholder="Title" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="Category">Category</label>
                                            <select class="wide" id="Category" name="category">
                                                <option value="Select Category">Select Category</option>
                                                <option value="Hotel">Hotel</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Castle">Castle</option>
                                                <option value="Barns">Barns</option>
                                                <option value="Resort">Resort</option>
                                                <option value="Church">Church</option>
                                                <option value="In Door">In Door</option>
                                                <option value="">Florist</option>
                                                <option value="">Dj</option>
                                                  <option value="">Cake</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seat">Seat Capacity</label>
                                            <input id="seat" name="seat" type="number" placeholder="e.g. 50" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price <small>(Start From)</small></label>
                                            <input id="price" name="price" type="text" placeholder="Price" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address </label>
                                            <input id="address" name="address" type="text" placeholder="Street address" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" id="city" name="city">
                                                <option value="Ahmedabad">Ahmedabad</option>
                                                <option value="Baroda">Baroda</option>
                                                <option value="Bharuch">Bharuch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode</label>
                                            <input id="postcode" name="postcode" type="text" placeholder="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="state">Select State</label>
                                            <select class="wide" id="state" name="state">
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Orissa">Orissa</option>
                                            <option value="Pondicherry">Pondicherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttaranchal">Uttaranchal</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="country">Select Country</label>
                                            <select class="wide" id="country" name="country">
                                                <option value="Select Country">Select Country</option>
                                                <option value="India">India</option>
                                                <option value="UK">UK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Descriptions </label>
                                            <textarea class="form-control" id="summernote" name="descriptions" rows="6" placeholder="Write Descriptions for your venue"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-location-map card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h4>Location Map</h4>
                                       
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="latitude">Latitude</label>
                                            <input id="latitude" name="latitude" type="number" placeholder="23.0732195" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="longitude">Longitude</label>
                                            <input id="longitude" name="longitude" type="number" placeholder="72.5646902" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="well-box">
                                            <div id="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="aminities-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Amenities</h3>
                                         
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="amenities[]" value="Groom Lounge">
                                            <label class="custom-control-label" for="customCheck1"> Groom Lounge</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="amenities[]" checked value="Bridal Suite">
                                            <label class="custom-control-label" for="customCheck2"> Bridal Suite</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="amenities[]" value="Table and chairs">
                                            <label class="custom-control-label" for="customCheck3">Table and chairs</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="amenities[]" value="Get Ready Rooms">
                                            <label class="custom-control-label" for="customCheck4"> Get Ready Rooms</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="amenities[]" value="Event Rentals">
                                            <label class="custom-control-label" for="customCheck5">Event Rentals</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="amenities[]" value="Outside Vendors">
                                            <label class="custom-control-label" for="customCheck6">Outside Vendors</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="amenities[]" value=" Bar Services">
                                            <label class="custom-control-label" for="customCheck7"> Bar Services</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8" name="amenities[]" value="Catering Services">
                                            <label class="custom-control-label" for="customCheck8"> Catering Services</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9" name="amenities[]" value="Clean Up">
                                            <label class="custom-control-label" for="customCheck9"> Clean Up</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10" name="amenities[]" value="Event Planner">
                                            <label class="custom-control-label" for="customCheck10">Event Planner</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11" name="amenities[]" value="Wifi">
                                            <label class="custom-control-label" for="customCheck11">Wifi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12" name="amenities[]" value="Pet Friendly">
                                            <label class="custom-control-label" for="customCheck12">Pet Friendly</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13" name="amenities[]" value="Accommodations">
                                            <label class="custom-control-label" for="customCheck13">Accommodations</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Feature Image</h3>
                                        
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Browse Image</label>
                                            <input id="imgInp" name="image1" class="btn btn-primary btn-block" type="file" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="row">

                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
                                                <div class="gallery-upload-img">
                                                    <img src="./images/<?php echo $img; ?>" id="blah" alt="" class="img-fluid">
                                                    <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
                                                </div>
                                            </div>

                                           

                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="dashboard-venue-gallery card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Gallery Of Venue</h3>
                                        
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <!-- File Button -->
                                        <div class="form-group">
                                            <!-- <label class="control-label" for="filebutton">Browse Image</label> -->
                                            <!-- <input id="filebutton" name="filebutton" class="btn btn-primary btn-block" type="file"> -->
                                           <!--  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-sm">Upload Image</button> -->
                                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">upload</button>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div id="images_list"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-venue-video card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Video</h3>
                                         
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="video">Video</label>
                                            <input id="video" name="video" type="url" placeholder="https://www.youtube.com/watch?v=VQWgez89JlM" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-form-info card-body border-top">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Social Media </h3>
                                        
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="facebook">Facebook</label>
                                            <input id="facebook" name="facebook" type="url" placeholder="https://www.facebook.com" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="twitter">Twitter</label>
                                            <input id="twitter" name="twitter" type="url" placeholder="https://www.twitter.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="instagram">Instagram</label>
                                            <input id="instagram" name="instagram" type="url" placeholder="https://www.instagram.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="youtube">Youtube</label>
                                            <input id="youtube" name="youtube" type="url" placeholder="https://www.youtube.com" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" name="add_new_vender" type="submit">Submit New Item</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/offcanvas.js"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: 23.0732195,
            lng: 72.5646902
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map-pin.png'
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="js/summernote-bs4.js"></script>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <form method="post" id="upload_multiple_images" enctype="multipart/form-data">
        <input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" />
        <br />
        <center><input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info btn-sm" /></center>
        </form>
    </div>
  </div>
</div>

<script>  
$(document).ready(function(){

    load_images();

    function load_images()
    {
        $.ajax({
            url:"fetch_images.php",
            success:function(data)
            {
                $('#images_list').html(data);
                // $('#image_preview').html(data); 
            }
        });
    }


    $(document).ready(function(){  
      $('.view_data').click(function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"select.php",  
                method:"post",  
                data:{employee_id:employee_id},  
                success:function(data){  
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 
    $('#upload_multiple_images').on('submit', function(event){
        event.preventDefault();
        var image_name = $('#image').val();
        if(image_name == '')
        {
            alert("Please Select Image");
            return false;
        }
        else
        {
            $.ajax({
                url:"insert.php",
                method:"POST",
                data: new FormData(this),
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('#image').val('');
                    load_images();
                }
            });
        }
    });


      $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   var $ele = $(this).parent().parent();
   if(confirm("Are you sure you want to remove this?"))
   {
$.ajax({
    type:'POST',
    url:'delete.php',
    data:{id:id},
    success: function(data){
        load_images();
    }

     });
    // setInterval(function(){
    //  $('#alert_message').html('');
    // }, 5000);
   }
  });



      // delete images
 

 


 
});  

</script>
<script type="text/javascript">
    
    function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>

<?php 
if(isset($_GET['p_id'])){
    
        $id = $_GET['p_id'];


             $slq = "DELETE FROM images WHERE id = $id";
             $result = mysqli_query($connection, $slq);
             if(!$result){
                die("QUERY FAILED .". mysqli_error($connection) );
             }
             header ("Location: vendor-dashboard-add-listing.php");
                            
         }    


 ?>
</body>

<?php include"include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html>