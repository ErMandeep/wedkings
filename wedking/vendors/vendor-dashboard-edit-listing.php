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
                                  <?php 
      if(isset($_GET['edit'])){
    
        $the_vender_id = $_GET['edit'];

    }
    $view_vender_query = "SELECT * FROM venders WHERE id= $the_vender_id";
    $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
    while($row = mysqli_fetch_assoc($select_vender_by_id)){


        // echo"<pre>"; print_r($_POST); echo"</pre>"; 
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
          $amenities =  explode(',', $amen);
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


}

if(isset($_POST['update']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        $tittleName = $_POST['tittleName'];
        $category = $_POST['category'];
        $seatCapacity = $_POST['seatCapacity'];
        $price = $_POST['price'];

        $address = $_POST['address'];
        $city = $_POST['city'];
        $postcode = $_POST['postcode'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $descriptions = $_POST['descriptions'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];
        $amenities = implode(',', $_POST['amenities']);
        $video = $_POST['video'];
        $facebook = $_POST['facebook'];
        $twitter = $_POST['twitter'];
        $instagram = $_POST['instagram'];
        $youtube = $_POST['youtube'];

        $add_client_query = "UPDATE venders SET ";
        $add_client_query .="tittleName = '{$tittleName}',";       
        $add_client_query .="category = '{$category}',";       
        $add_client_query .="category = '{$category}',";       
        $add_client_query .="seatCapacity = '{$seatCapacity}',";       
        $add_client_query .="price = '{$price}',";       
        $add_client_query .="address = '{$address}',";       
        $add_client_query .="city = '{$city}',";       
        $add_client_query .="postcode = '{$postcode}',";       
        $add_client_query .="state = '{$state}',";       
        $add_client_query .="country = '{$country}',";       
        $add_client_query .="descriptions = '{$descriptions}',";       
        $add_client_query .="latitude = '{$latitude}',";       
        $add_client_query .="longitude = '{$longitude}',";       
        $add_client_query .="amenities = '{$amenities}',";       
        $add_client_query .="video = '{$video}',";       
        $add_client_query .="facebook = '{$facebook}',";       
        $add_client_query .="twitter = '{$twitter}',";       
        $add_client_query .="instagram = '{$instagram}',";       
        $add_client_query .="youtube = '{$youtube}'";       
        // $add_client_query ="image1 = '{$name1}'";  
        $add_client_query .= "WHERE id = {$the_vender_id} ";      
        
        $clients_result = mysqli_query($connection, $add_client_query);

        // $id_guests = mysqli_insert_id($connection);

        
        if($_FILES['image1']['name'] != ""){    

        $img1 = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["image1"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE venders SET image1 = '$name1' WHERE id=$the_vender_id";
        $update_img = mysqli_query($connection, $imagesql);

        }

        
        confirmQuery($clients_result);
        // confirmQuery($upload_images);

        

        header('Location: vendor-dashboard-listing.php?success=1');



        }



    ?>
     <form action="" method="post" enctype="multipart/form-data" class="">
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">
                                   
                                    <!-- Text input-->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="tittleName" type="text" placeholder="Title" class="form-control " value="<?php echo $ven_title; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="Category">Category</label>
                                            <select class="wide" id="Category" name="category"  value="<?php echo $cat; ?>">
<option value="Select Category" <?php if($cat=='Select Category') echo 'selected="selected"'; ?>>Select Category</option>
<option value="Hotel" <?php if($cat=='Hotel') echo 'selected="selected"'; ?>>Hotel</option>
<option value="Restaurant" <?php if($cat=='Restaurant') echo 'selected="selected"'; ?>>Restaurant</option>
<option value="Castle" <?php if($cat=='Castle') echo 'selected="selected"'; ?>>Castle</option>
<option value="Barns" <?php if($cat=='Barns') echo 'selected="selected"'; ?>>Barns</option>
<option value="Resort" <?php if($cat=='Resort') echo 'selected="selected"'; ?>>Resort</option>
<option value="Church" <?php if($cat=='Church') echo 'selected="selected"'; ?>>Church</option>
<option value="In Door" <?php if($cat=='In Door') echo 'selected="selected"'; ?>>In Door</option>
<option value="Florist" <?php if($cat=='Florist') echo 'selected="selected"'; ?>>Florist</option>
<option value="Dj" <?php if($cat=='Dj') echo 'selected="selected"'; ?>>Dj</option>
<option value="Cake" <?php if($cat=='Cake') echo 'selected="selected"'; ?>>Cake</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seat">Seat Capacity</label>
                                            <input id="seat" name="seat" value="<?php echo $s_cap; ?>" type="number" placeholder="e.g. 50" class="form-control ">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="price">Price <small>(Start From)</small></label>
                                            <input id="price" name="price" type="text" placeholder="Price" class="form-control " value="<?php echo $prc; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address </label>
                                            <input id="address" name="address" type="text" placeholder="Street address" class="form-control " value="<?php echo $addrs; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" id="city" name="city" value="<?php echo $cty; ?>">
<option value="Ahmedabad">Ahmedabad</option>
<option value="Baroda">Baroda</option>
<option value="Bharuch">Bharuch</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="postcode">Postcode</label>
                                            <input id="postcode" name="postcode" type="text" placeholder="" class="form-control" value="<?php echo $pcode; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="state">Select State</label>
                                            <select class="wide" id="state" name="state" value="<?php echo $state; ?>">
<option <?php if($state=='Arunachal Pradesh') echo 'selected="selected"'; ?> value="Arunachal Pradesh">Arunachal Pradesh</option>
<option <?php if($state=='Assam') echo 'selected="selected"'; ?> value="Assam">Assam</option>
<option <?php if($state=='Bihar') echo 'selected="selected"'; ?> value="Bihar">Bihar</option>
<option <?php if($state=='Chandigarh') echo 'selected="selected"'; ?> value="Chandigarh">Chandigarh</option>
<option <?php if($state=='Chhattisgarh') echo 'selected="selected"'; ?> value="Chhattisgarh">Chhattisgarh</option>
<option <?php if($state=='Dadra and Nagar Haveli') echo 'selected="selected"'; ?> value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option <?php if($state=='Daman and Diu') echo 'selected="selected"'; ?> value="Daman and Diu">Daman and Diu</option>
<option <?php if($state=='Delhi') echo 'selected="selected"'; ?> value="Delhi">Delhi</option>
<option <?php if($state=='Goa') echo 'selected="selected"'; ?> value="Goa">Goa</option>
<option <?php if($state=='Gujarat') echo 'selected="selected"'; ?> value="Gujarat">Gujarat</option>
<option <?php if($state=='Haryana') echo 'selected="selected"'; ?> value="Haryana">Haryana</option>
<option <?php if($state=='Himachal Pradesh') echo 'selected="selected"'; ?> value="Himachal Pradesh">Himachal Pradesh</option>
<option <?php if($state=='Jammu and Kashmir') echo 'selected="selected"'; ?> value="Jammu and Kashmir">Jammu and Kashmir</option>
<option <?php if($state=='Jharkhand') echo 'selected="selected"'; ?> value="Jharkhand">Jharkhand</option>
<option <?php if($state=='Karnataka ') echo 'selected="selected"'; ?> value="Karnataka">Karnataka</option>
<option <?php if($state=='Kerala') echo 'selected="selected"'; ?> value="Kerala">Kerala</option>
<option  <?php if($state=='Lakshadweep') echo 'selected="selected"'; ?> value="Lakshadweep">Lakshadweep</option>
<option <?php if($state=='Madhya Pradesh ') echo 'selected="selected"'; ?> value="Madhya Pradesh">Madhya Pradesh</option>
<option <?php if($state=='Maharashtra ') echo 'selected="selected"'; ?> value="Maharashtra">Maharashtra</option>
<option <?php if($state=='Manipur') echo 'selected="selected"'; ?> value="Manipur">Manipur</option>
<option <?php if($state=='Meghalaya') echo 'selected="selected"'; ?> value="Meghalaya">Meghalaya</option>
<option <?php if($state=='Mizoram') echo 'selected="selected"'; ?> value="Mizoram">Mizoram</option>
<option <?php if($state=='Nagaland') echo 'selected="selected"'; ?> value="Nagaland">Nagaland</option>
<option <?php if($state=='Orissa') echo 'selected="selected"'; ?> value="Orissa">Orissa</option>
<option <?php if($state=='Pondicherry') echo 'selected="selected"'; ?> value="Pondicherry">Pondicherry</option>
<option <?php if($state=='Punjab') echo 'selected="selected"'; ?> value="Punjab">Punjab</option>
<option <?php if($state=='Rajasthan') echo 'selected="selected"'; ?> value="Rajasthan">Rajasthan</option>
<option <?php if($state=='Sikkim') echo 'selected="selected"'; ?> value="Sikkim">Sikkim</option>
<option <?php if($state=='Tamil Nadu') echo 'selected="selected"'; ?> value="Tamil Nadu">Tamil Nadu</option>
<option <?php if($state=='Tripura') echo 'selected="selected"'; ?> value="Tripura">Tripura</option>
<option <?php if($state=='Uttaranchal') echo 'selected="selected"'; ?> value="Uttaranchal">Uttaranchal</option>
<option <?php if($state=='Uttar Pradesh') echo 'selected="selected"'; ?> value="Uttar Pradesh">Uttar Pradesh</option>
<option  <?php if($state=='West Bengal') echo 'selected="selected"'; ?> value="West Bengal">West Bengal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="country">Select Country</label>
                                            <select class="wide" id="country" name="country">
    <option <?php if($contry=='India') echo 'selected="selected"'; ?> value="India">India</option>
    <option <?php if($contry=='UK') echo 'selected="selected"'; ?> value="UK">UK</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Descriptions </label>
                                            <textarea class="form-control" id="summernote" name="descriptions" rows="6" placeholder="Write Descriptions for your venue"> <?php echo $descptn; ?></textarea>
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
                                            <input id="latitude" name="latitude" type="number" placeholder="23.0732195" class="form-control " value="<?php echo $lat; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="longitude">Longitude</label>
                                            <input id="longitude" name="longitude" type="number" placeholder="72.5646902" class="form-control " value="<?php echo $long; ?>">
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
                                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="amenities[]" value="Groom Lounge" <?php if (in_array("Groom Lounge", $amenities)) { echo "checked"; } ?> >
                                            <label class="custom-control-label" for="customCheck1"> Groom Lounge</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2" name="amenities[]" checked value="Bridal Suite" <?php if (in_array("Bridal Suite", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck2"> Bridal Suite</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3" name="amenities[]" value="Table and chairs" <?php if (in_array("Table and chairs", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck3">Table and chairs</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4" name="amenities[]" value="Get Ready Rooms" <?php if (in_array("Get Ready Rooms", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck4"> Get Ready Rooms</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5" name="amenities[]" value="Event Rentals" <?php if (in_array("Event Rentals", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck5">Event Rentals</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6" name="amenities[]" value="Outside Vendors" <?php if (in_array("Outside Vendors", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck6">Outside Vendors</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7" name="amenities[]" value=" Bar Services" <?php if (in_array("Bar Services", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck7"> Bar Services</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8" name="amenities[]" value="Catering Services" <?php if (in_array("Catering Services", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck8"> Catering Services</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9" name="amenities[]" value="Clean Up" <?php if (in_array("Clean Up", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck9"> Clean Up</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10" name="amenities[]" value="Event Planner" <?php if (in_array("Event Planner", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck10">Event Planner</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11" name="amenities[]" value="Wifi" <?php if (in_array("Wifi", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck11">Wifi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12" name="amenities[]" value="Pet Friendly" <?php if (in_array("Pet Friendly", $amenities)) { echo "checked"; } ?>>
                                            <label class="custom-control-label" for="customCheck12">Pet Friendly</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13" name="amenities[]" value="Accommodations" <?php if (in_array("Accommodations", $amenities)) { echo "checked"; } ?>>
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
                                            <input id="imgInp" name="image1" class="btn btn-primary btn-block" type="file" >
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
                                            <input id="video" name="video" type="url" placeholder="https://www.youtube.com/watch?v=VQWgez89JlM" class="form-control" value="<?php echo $vid; ?>">
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
                                            <input id="facebook" name="facebook" type="url" placeholder="https://www.facebook.com" class="form-control " value="<?php echo $fb; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="twitter">Twitter</label>
                                            <input id="twitter" name="twitter" type="url" placeholder="https://www.twitter.com" class="form-control" value="<?php echo $twr; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="instagram">Instagram</label>
                                            <input id="instagram" name="instagram" type="url" placeholder="https://www.instagram.com" class="form-control" value="<?php echo $inst; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="youtube">Youtube</label>
                                            <input id="youtube" name="youtube" type="url" placeholder="https://www.youtube.com" class="form-control" value="<?php echo $yutb; ?>">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <button class="btn btn-default" name="update" type="submit">Submit New Item</button>
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
            url:"fetch_edit_images.php",
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
        $(document).ready(function() {
            $("#delete").click(function() {
                alert("Are you Sure ?");
            });

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
  $new_id = $the_vender_id;   
if(isset($_GET['p_id'])){
 
        $id = $_GET['p_id'];


             $slq = "DELETE FROM images WHERE id = $id";
             $result = mysqli_query($connection, $slq);
             if(!$result){
                die("QUERY FAILED .". mysqli_error($connection) );
             }
             if($result){
             header ("Location: vendor-dashboard-edit-listing.php?edit=$new_id");
              }    
           
}
              echo $new_id;          

 ?>
</body>

<?php include"include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html>