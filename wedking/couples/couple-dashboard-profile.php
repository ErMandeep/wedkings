<?php
include 'include/controller.php';
if(empty($_SESSION['email'])){
    header("location:login.php");
}
?>
<?php include"include/header.php"; ?>

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
                    <li><a href="couple-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="couple-dashboard-mywishlist.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="couple-dashboard-todolist.php"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-dashboard-budget.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <!-- <li><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
                    <!-- <li><a href="couple-dashboard-table-planner.php"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li> -->
                    <li><a href="couple-dashboard-website.php"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                    <li><a href="couple-dashboard-realwedding.php"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
                    <li class="active"><a href="couple-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="#logout" data-toggle="modal"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>



        
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Profile</h3>
                            <p>Update your wedding information, profile photo, and personal informations.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</a>
                            <a class="nav-link" id="v-pills-wedding-info" data-toggle="pill" href="#v-pills-wedding" role="tab" aria-controls="v-pills-wedding" aria-selected="false">Wedding Info</a>
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
      if (isset($_SESSION['coupleID'])) {
      $login_id = $_SESSION['coupleID'];
      }
      
    $view_vender_query = "SELECT * FROM couples WHERE coupleID= $login_id";
    $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
    while($row = mysqli_fetch_assoc($select_vender_by_id)){
        // echo"<pre>"; print_r($_SESSION['id']); echo"</pre>"; 
          $id = $row['coupleID'];
          $nm = $row['coupleName'];
          $eml = $row['email'];
          $ph = $row['phone'];
          $descptn = $row['descriptions'];
          $fb = $row['facebook'];
          $twr = $row['twitter'];
          $inst = $row['instagram'];
          $yutb = $row['youtube'];
          $image1 = $row['image'];


}

    if(isset($_POST['update']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        $nm = $_POST['coupleName'];
        $eml = $_POST['email'];
        $ph = $_POST['phone'];
        $descptn = $_POST['descriptions'];

        $fb = $_POST['facebook'];
        $twr = $_POST['twitter'];
        $inst = $_POST['instagram'];
        $yutb = $_POST['youtube'];

        $add_client_query = "UPDATE couples SET ";
        $add_client_query .="coupleName = '{$nm}',";       
        $add_client_query .="email = '{$eml}',";       
        $add_client_query .="phone = '{$ph}',";       
        $add_client_query .="descriptions = '{$descptn}',";       
        $add_client_query .="facebook = '{$fb}',";       
        $add_client_query .="twitter = '{$twr}',";       
        $add_client_query .="instagram = '{$inst}',";       
        $add_client_query .="youtube = '{$yutb}'";       
        $add_client_query .= "WHERE coupleID = $login_id ";      
        
        $clients_result = mysqli_query($connection, $add_client_query);

        confirmQuery($clients_result);

         if($_FILES['image']['name'] != ""){    

        $img1 = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;

        move_uploaded_file($_FILES["image"]["tmp_name"],"./images/$name1");

        $imagesql = "UPDATE couples SET image = '$name1' WHERE coupleID={$login_id}";
        $update_img = mysqli_query($connection, $imagesql);

        }

        header('Location: couple-dashboard-profile.php?success=1');
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
                                                            <label class="control-label" for="vendorname">Couple Name</label>
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





                            <div class="tab-pane " id="v-pills-wedding" role="tabpanel" aria-labelledby="v-pills-wedding-tab">
                                <div class="card">
                                    <div class="card-header">Wedding Info</div>
                                    <form class="form-horizontal" method="Post" enctype="multipart/form-data">
                                        <!-- Text input-->
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="weddingdate">Wedding Date</label>
                                                        <input id="weddingdate" name="wedding_date" type="text" placeholder="" class="form-control" required="">
                                                        <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h4>Wedding Details</h4>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group">
                                                        <label class="control-label" for="weddingaddress">Wedding Address</label>
                                                        <input id="weddingaddress" name="weddingAddress" type="text" placeholder="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label for="Country">Country</label>
                                                        <select class="form-control select wide" id="Country" name="country">
                                                            <option>Select Country</option>
                                                            <option>India</option>
                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label for="State">State</label>
                                                        <select class="form-control select wide" id="State" name="state">
                                                            <option value="">Select State</option>
                                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
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


<!-- <select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control select wide" required></select>    -->


                                                        </select>
                                                    </div>
                                                </div>
                                                 <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <label for="City">City</label>
                                                        <select class="form-control select wide" id="City" name="city">
              
<option value='Adilabad'>Adilabad</option>
<option value='Agra'>Agra</option>
<option value='Ahmedabad'>Ahmedabad</option>
<option value='Ahmednagar'>Ahmednagar</option>
<option value='Aizawl'>Aizawl</option>
<option value='Ajitgarh (Mohali)'>Ajitgarh (Mohali)</option>
<option value='Ajmer'>Ajmer</option>
<option value='Akola'>Akola</option>
<option value='Alappuzha'>Alappuzha</option>
<option value='Aligarh'>Aligarh</option>
<option value='Alirajpur'>Alirajpur</option>
<option value='Allahabad'>Allahabad</option>
<option value='Almora'>Almora</option>
<option value='Alwar'>Alwar</option>
<option value='Ambala'>Ambala</option>
<option value='Ambedkar Nagar'>Ambedkar Nagar</option>
<option value='Amravati'>Amravati</option>
<option value='Amreli district'>Amreli district</option>
<option value='Amritsar'>Amritsar</option>
<option value='Anand'>Anand</option>
<option value='Anantapur'>Anantapur</option>
<option value='Anantnag'>Anantnag</option>
<option value='Angul'>Angul</option>
<option value='Anjaw'>Anjaw</option>
<option value='Anuppur'>Anuppur</option>
<option value='Araria'>Araria</option>
<option value='Ariyalur'>Ariyalur</option>
<option value='Arwal'>Arwal</option>
<option value='Ashok Nagar'>Ashok Nagar</option>
<option value='Auraiya'>Auraiya</option>
<option value='Aurangabad'>Aurangabad</option>
<option value='Aurangabad'>Aurangabad</option>
<option value='Azamgarh'>Azamgarh</option>
<option value='Badgam'>Badgam</option>
<option value='Bagalkot'>Bagalkot</option>
<option value='Bageshwar'>Bageshwar</option>
<option value='Bagpat'>Bagpat</option>
<option value='Bahraich'>Bahraich</option>
<option value='Baksa'>Baksa</option>
<option value='Balaghat'>Balaghat</option>
<option value='Balangir'>Balangir</option>
<option value='Balasore'>Balasore</option>
<option value='Ballia'>Ballia</option>
<option value='Balrampur'>Balrampur</option>
<option value='Banaskantha'>Banaskantha</option>
<option value='Banda'>Banda</option>
<option value='Bandipora'>Bandipora</option>
<option value='Bangalore Rural'>Bangalore Rural</option>
<option value='Bangalore Urban'>Bangalore Urban</option>
<option value='Banka'>Banka</option>
<option value='Bankura'>Bankura</option>
<option value='Banswara'>Banswara</option>
<option value='Barabanki'>Barabanki</option>
<option value='Baramulla'>Baramulla</option>
<option value='Baran'>Baran</option>
<option value='Bardhaman'>Bardhaman</option>
<option value='Bareilly'>Bareilly</option>
<option value='Bargarh (Baragarh)'>Bargarh (Baragarh)</option>
<option value='Barmer'>Barmer</option>
<option value='Barnala'>Barnala</option>
<option value='Barpeta'>Barpeta</option>
<option value='Barwani'>Barwani</option>
<option value='Bastar'>Bastar</option>
<option value='Basti'>Basti</option>
<option value='Bathinda'>Bathinda</option>
<option value='Beed'>Beed</option>
<option value='Begusarai'>Begusarai</option>
<option value='Belgaum'>Belgaum</option>
<option value='Bellary'>Bellary</option>
<option value='Betul'>Betul</option>
<option value='Bhadrak'>Bhadrak</option>
<option value='Bhagalpur'>Bhagalpur</option>
<option value='Bhandara'>Bhandara</option>
<option value='Bharatpur'>Bharatpur</option>
<option value='Bharuch'>Bharuch</option>
<option value='Bhavnagar'>Bhavnagar</option>
<option value='Bhilwara'>Bhilwara</option>
<option value='Bhind'>Bhind</option>
<option value='Bhiwani'>Bhiwani</option>
<option value='Bhojpur'>Bhojpur</option>
<option value='Bhopal'>Bhopal</option>
<option value='Bvaluear'>Bvaluear</option>
<option value='Bijapur'>Bijapur</option>
<option value='Bijapur'>Bijapur</option>
<option value='Bijnor'>Bijnor</option>
<option value='Bikaner'>Bikaner</option>
<option value='Bilaspur'>Bilaspur</option>
<option value='Bilaspur'>Bilaspur</option>
<option value='Birbhum'>Birbhum</option>
<option value='Bishnupur'>Bishnupur</option>
<option value='Bokaro'>Bokaro</option>
<option value='Bongaigaon'>Bongaigaon</option>
<option value='Boudh (Bauda)'>Boudh (Bauda)</option>
<option value='Budaun'>Budaun</option>
<option value='Bulandshahr'>Bulandshahr</option>
<option value='Buldhana'>Buldhana</option>
<option value='Bundi'>Bundi</option>
<option value='Burhanpur'>Burhanpur</option>
<option value='Buxar'>Buxar</option>
<option value='Cachar'>Cachar</option>
<option value='Central Delhi'>Central Delhi</option>
<option value='Chamarajnagar'>Chamarajnagar</option>
<option value='Chamba'>Chamba</option>
<option value='Chamoli'>Chamoli</option>
<option value='Champawat'>Champawat</option>
<option value='Champhai'>Champhai</option>
<option value='Chandauli'>Chandauli</option>
<option value='Chandel'>Chandel</option>
<option value='Chandigarh'>Chandigarh</option>
<option value='Chandrapur'>Chandrapur</option>
<option value='Changlang'>Changlang</option>
<option value='Chatra'>Chatra</option>
<option value='Chennai'>Chennai</option>
<option value='Chhatarpur'>Chhatarpur</option>
<option value='Chhatrapati Shahuji Maharaj Nagar'>Chhatrapati Shahuji Maharaj Nagar</option>
<option value='Chhindwara'>Chhindwara</option>
<option value='Chikkaballapur'>Chikkaballapur</option>
<option value='Chikkamagaluru'>Chikkamagaluru</option>
<option value='Chirang'>Chirang</option>
<option value='Chitradurga'>Chitradurga</option>
<option value='Chitrakoot'>Chitrakoot</option>
<option value='Chittoor'>Chittoor</option>
<option value='Chittorgarh'>Chittorgarh</option>
<option value='Churachandpur'>Churachandpur</option>
<option value='Churu'>Churu</option>
<option value='Coimbatore'>Coimbatore</option>
<option value='Cooch Behar'>Cooch Behar</option>
<option value='Cuddalore'>Cuddalore</option>
<option value='Cuttack'>Cuttack</option>
<option value='Dadra and Nagar Haveli'>Dadra and Nagar Haveli</option>
<option value='Dahod'>Dahod</option>
<option value='Dakshin Dinajpur'>Dakshin Dinajpur</option>
<option value='Dakshina Kannada'>Dakshina Kannada</option>
<option value='Daman'>Daman</option>
<option value='Damoh'>Damoh</option>
<option value='Dantewada'>Dantewada</option>
<option value='Darbhanga'>Darbhanga</option>
<option value='Darjeeling'>Darjeeling</option>
<option value='Darrang'>Darrang</option>
<option value='Datia'>Datia</option>
<option value='Dausa'>Dausa</option>
<option value='Davanagere'>Davanagere</option>
<option value='Debagarh (Deogarh)'>Debagarh (Deogarh)</option>
<option value='Dehradun'>Dehradun</option>
<option value='Deoghar'>Deoghar</option>
<option value='Deoria'>Deoria</option>
<option value='Dewas'>Dewas</option>
<option value='Dhalai'>Dhalai</option>
<option value='Dhamtari'>Dhamtari</option>
<option value='Dhanbad'>Dhanbad</option>
<option value='Dhar'>Dhar</option>
<option value='Dharmapuri'>Dharmapuri</option>
<option value='Dharwad'>Dharwad</option>
<option value='Dhemaji'>Dhemaji</option>
<option value='Dhenkanal'>Dhenkanal</option>
<option value='Dholpur'>Dholpur</option>
<option value='Dhubri'>Dhubri</option>
<option value='Dhule'>Dhule</option>
<option value='Dibang Valley'>Dibang Valley</option>
<option value='Dibrugarh'>Dibrugarh</option>
<option value='Dima Hasao'>Dima Hasao</option>
<option value='Dimapur'>Dimapur</option>
<option value='Dindigul'>Dindigul</option>
<option value='Dindori'>Dindori</option>
<option value='Diu'>Diu</option>
<option value='Doda'>Doda</option>
<option value='Dumka'>Dumka</option>
<option value='Dungapur'>Dungapur</option>
<option value='Durg'>Durg</option>
<option value='East Champaran'>East Champaran</option>
<option value='East Delhi'>East Delhi</option>
<option value='East Garo Hills'>East Garo Hills</option>
<option value='East Khasi Hills'>East Khasi Hills</option>
<option value='East Siang'>East Siang</option>
<option value='East Sikkim'>East Sikkim</option>
<option value='East Singhbhum'>East Singhbhum</option>
<option value='Eluru'>Eluru</option>
<option value='Ernakulam'>Ernakulam</option>
<option value='Erode'>Erode</option>
<option value='Etah'>Etah</option>
<option value='Etawah'>Etawah</option>
<option value='Faizabad'>Faizabad</option>
<option value='Farvalueabad'>Farvalueabad</option>
<option value='Farvaluekot'>Farvaluekot</option>
<option value='Farrukhabad'>Farrukhabad</option>
<option value='Fatehabad'>Fatehabad</option>
<option value='Fatehgarh Sahib'>Fatehgarh Sahib</option>
<option value='Fatehpur'>Fatehpur</option>
<option value='Fazilka'>Fazilka</option>
<option value='Firozabad'>Firozabad</option>
<option value='Firozpur'>Firozpur</option>
<option value='Gadag'>Gadag</option>
<option value='Gadchiroli'>Gadchiroli</option>
<option value='Gajapati'>Gajapati</option>
<option value='Ganderbal'>Ganderbal</option>
<option value='Gandhinagar'>Gandhinagar</option>
<option value='Ganganagar'>Ganganagar</option>
<option value='Ganjam'>Ganjam</option>
<option value='Garhwa'>Garhwa</option>
<option value='Gautam Buddh Nagar'>Gautam Buddh Nagar</option>
<option value='Gaya'>Gaya</option>
<option value='Ghaziabad'>Ghaziabad</option>
<option value='Ghazipur'>Ghazipur</option>
<option value='Girvalueih'>Girvalueih</option>
<option value='Goalpara'>Goalpara</option>
<option value='Godda'>Godda</option>
<option value='Golaghat'>Golaghat</option>
<option value='Gonda'>Gonda</option>
<option value='Gondia'>Gondia</option>
<option value='Gopalganj'>Gopalganj</option>
<option value='Gorakhpur'>Gorakhpur</option>
<option value='Gulbarga'>Gulbarga</option>
<option value='Gumla'>Gumla</option>
<option value='Guna'>Guna</option>
<option value='Guntur'>Guntur</option>
<option value='Gurdaspur'>Gurdaspur</option>
<option value='Gurgaon'>Gurgaon</option>
<option value='Gwalior'>Gwalior</option>
<option value='Hailakandi'>Hailakandi</option>
<option value='Hamirpur'>Hamirpur</option>
<option value='Hamirpur'>Hamirpur</option>
<option value='Hanumangarh'>Hanumangarh</option>
<option value='Harda'>Harda</option>
<option value='Hardoi'>Hardoi</option>
<option value='Harvaluewar'>Harvaluewar</option>
<option value='Hassan'>Hassan</option>
<option value='Haveri district'>Haveri district</option>
<option value='Hazaribag'>Hazaribag</option>
<option value='Hingoli'>Hingoli</option>
<option value='Hissar'>Hissar</option>
<option value='Hooghly'>Hooghly</option>
<option value='Hoshangabad'>Hoshangabad</option>
<option value='Hoshiarpur'>Hoshiarpur</option>
<option value='Howrah'>Howrah</option>
<option value='Hyderabad'>Hyderabad</option>
<option value='Hyderabad'>Hyderabad</option>
<option value='valueukki'>valueukki</option>
<option value='Imphal East'>Imphal East</option>
<option value='Imphal West'>Imphal West</option>
<option value='Indore'>Indore</option>
<option value='Jabalpur'>Jabalpur</option>
<option value='Jagatsinghpur'>Jagatsinghpur</option>
<option value='Jaintia Hills'>Jaintia Hills</option>
<option value='Jaipur'>Jaipur</option>
<option value='Jaisalmer'>Jaisalmer</option>
<option value='Jajpur'>Jajpur</option>
<option value='Jalandhar'>Jalandhar</option>
<option value='Jalaun'>Jalaun</option>
<option value='Jalgaon'>Jalgaon</option>
<option value='Jalna'>Jalna</option>
<option value='Jalore'>Jalore</option>
<option value='Jalpaiguri'>Jalpaiguri</option>
<option value='Jammu'>Jammu</option>
<option value='Jamnagar'>Jamnagar</option>
<option value='Jamtara'>Jamtara</option>
<option value='Jamui'>Jamui</option>
<option value='Janjgir-Champa'>Janjgir-Champa</option>
<option value='Jashpur'>Jashpur</option>
<option value='Jaunpur district'>Jaunpur district</option>
<option value='Jehanabad'>Jehanabad</option>
<option value='Jhabua'>Jhabua</option>
<option value='Jhajjar'>Jhajjar</option>
<option value='Jhalawar'>Jhalawar</option>
<option value='Jhansi'>Jhansi</option>
<option value='Jharsuguda'>Jharsuguda</option>
<option value='Jhunjhunu'>Jhunjhunu</option>
<option value='Jind'>Jind</option>
<option value='Jodhpur'>Jodhpur</option>
<option value='Jorhat'>Jorhat</option>
<option value='Junagadh'>Junagadh</option>
<option value='Jyotiba Phule Nagar'>Jyotiba Phule Nagar</option>
<option value='Kabirdham (formerly Kawardha)'>Kabirdham (formerly Kawardha)</option>
<option value='Kadapa'>Kadapa</option>
<option value='Kaimur'>Kaimur</option>
<option value='Kaithal'>Kaithal</option>
<option value='Kakinada'>Kakinada</option>
<option value='Kalahandi'>Kalahandi</option>
<option value='Kamrup'>Kamrup</option>
<option value='Kamrup Metropolitan'>Kamrup Metropolitan</option>
<option value='Kanchipuram'>Kanchipuram</option>
<option value='Kandhamal'>Kandhamal</option>
<option value='Kangra'>Kangra</option>
<option value='Kanker'>Kanker</option>
<option value='Kannauj'>Kannauj</option>
<option value='Kannur'>Kannur</option>
<option value='Kanpur'>Kanpur</option>
<option value='Kanshi Ram Nagar'>Kanshi Ram Nagar</option>
<option value='Kanyakumari'>Kanyakumari</option>
<option value='Kapurthala'>Kapurthala</option>
<option value='Karaikal'>Karaikal</option>
<option value='Karauli'>Karauli</option>
<option value='Karbi Anglong'>Karbi Anglong</option>
<option value='Kargil'>Kargil</option>
<option value='Karimganj'>Karimganj</option>
<option value='Karimnagar'>Karimnagar</option>
<option value='Karnal'>Karnal</option>
<option value='Karur'>Karur</option>
<option value='Kasaragod'>Kasaragod</option>
<option value='Kathua'>Kathua</option>
<option value='Katihar'>Katihar</option>
<option value='Katni'>Katni</option>
<option value='Kaushambi'>Kaushambi</option>
<option value='Kendrapara'>Kendrapara</option>
<option value='Kendujhar (Keonjhar)'>Kendujhar (Keonjhar)</option>
<option value='Khagaria'>Khagaria</option>
<option value='Khammam'>Khammam</option>
<option value='Khandwa (East Nimar)'>Khandwa (East Nimar)</option>
<option value='Khargone (West Nimar)'>Khargone (West Nimar)</option>
<option value='Kheda'>Kheda</option>
<option value='Khordha'>Khordha</option>
<option value='Khowai'>Khowai</option>
<option value='Khunti'>Khunti</option>
<option value='Kinnaur'>Kinnaur</option>
<option value='Kishanganj'>Kishanganj</option>
<option value='Kishtwar'>Kishtwar</option>
<option value='Kodagu'>Kodagu</option>
<option value='Koderma'>Koderma</option>
<option value='Kohima'>Kohima</option>
<option value='Kokrajhar'>Kokrajhar</option>
<option value='Kolar'>Kolar</option>
<option value='Kolasib'>Kolasib</option>
<option value='Kolhapur'>Kolhapur</option>
<option value='Kolkata'>Kolkata</option>
<option value='Kollam'>Kollam</option>
<option value='Koppal'>Koppal</option>
<option value='Koraput'>Koraput</option>
<option value='Korba'>Korba</option>
<option value='Koriya'>Koriya</option>
<option value='Kota'>Kota</option>
<option value='Kottayam'>Kottayam</option>
<option value='Kozhikode'>Kozhikode</option>
<option value='Krishna'>Krishna</option>
<option value='Kulgam'>Kulgam</option>
<option value='Kullu'>Kullu</option>
<option value='Kupwara'>Kupwara</option>
<option value='Kurnool'>Kurnool</option>
<option value='Kurukshetra'>Kurukshetra</option>
<option value='Kurung Kumey'>Kurung Kumey</option>
<option value='Kushinagar'>Kushinagar</option>
<option value='Kutch'>Kutch</option>
<option value='Lahaul and Spiti'>Lahaul and Spiti</option>
<option value='Lakhimpur'>Lakhimpur</option>
<option value='Lakhimpur Kheri'>Lakhimpur Kheri</option>
<option value='Lakhisarai'>Lakhisarai</option>
<option value='Lalitpur'>Lalitpur</option>
<option value='Latehar'>Latehar</option>
<option value='Latur'>Latur</option>
<option value='Lawngtlai'>Lawngtlai</option>
<option value='Leh'>Leh</option>
<option value='Lohardaga'>Lohardaga</option>
<option value='Lohit'>Lohit</option>
<option value='Lower Dibang Valley'>Lower Dibang Valley</option>
<option value='Lower Subansiri'>Lower Subansiri</option>
<option value='Lucknow'>Lucknow</option>
<option value='Ludhiana'>Ludhiana</option>
<option value='Lunglei'>Lunglei</option>
<option value='Madhepura'>Madhepura</option>
<option value='Madhubani'>Madhubani</option>
<option value='Madurai'>Madurai</option>
<option value='Mahamaya Nagar'>Mahamaya Nagar</option>
<option value='Maharajganj'>Maharajganj</option>
<option value='Mahasamund'>Mahasamund</option>
<option value='Mahbubnagar'>Mahbubnagar</option>
<option value='Mahe'>Mahe</option>
<option value='Mahendragarh'>Mahendragarh</option>
<option value='Mahoba'>Mahoba</option>
<option value='Mainpuri'>Mainpuri</option>
<option value='Malappuram'>Malappuram</option>
<option value='Maldah'>Maldah</option>
<option value='Malkangiri'>Malkangiri</option>
<option value='Mamit'>Mamit</option>
<option value='Mandi'>Mandi</option>
<option value='Mandla'>Mandla</option>
<option value='Mandsaur'>Mandsaur</option>
<option value='Mandya'>Mandya</option>
<option value='Mansa'>Mansa</option>
<option value='Marigaon'>Marigaon</option>
<option value='Mathura'>Mathura</option>
<option value='Mau'>Mau</option>
<option value='Mayurbhanj'>Mayurbhanj</option>
<option value='Medak'>Medak</option>
<option value='Meerut'>Meerut</option>
<option value='Mehsana'>Mehsana</option>
<option value='Mewat'>Mewat</option>
<option value='Mirzapur'>Mirzapur</option>
<option value='Moga'>Moga</option>
<option value='Mokokchung'>Mokokchung</option>
<option value='Mon'>Mon</option>
<option value='Moradabad'>Moradabad</option>
<option value='Morena'>Morena</option>
<option value='Mumbai City'>Mumbai City</option>
<option value='Mumbai suburban'>Mumbai suburban</option>
<option value='Munger'>Munger</option>
<option value='Murshvalueabad'>Murshvalueabad</option>
<option value='Muzaffarnagar'>Muzaffarnagar</option>
<option value='Muzaffarpur'>Muzaffarpur</option>
<option value='Mysore'>Mysore</option>
<option value='Nabarangpur'>Nabarangpur</option>
<option value='Nadia'>Nadia</option>
<option value='Nagaon'>Nagaon</option>
<option value='Nagapattinam'>Nagapattinam</option>
<option value='Nagaur'>Nagaur</option>
<option value='Nagpur'>Nagpur</option>
<option value='Nainital'>Nainital</option>
<option value='Nalanda'>Nalanda</option>
<option value='Nalbari'>Nalbari</option>
<option value='Nalgonda'>Nalgonda</option>
<option value='Namakkal'>Namakkal</option>
<option value='Nanded'>Nanded</option>
<option value='Nandurbar'>Nandurbar</option>
<option value='Narayanpur'>Narayanpur</option>
<option value='Narmada'>Narmada</option>
<option value='Narsinghpur'>Narsinghpur</option>
<option value='Nashik'>Nashik</option>
<option value='Navsari'>Navsari</option>
<option value='Nawada'>Nawada</option>
<option value='Nawanshahr'>Nawanshahr</option>
<option value='Nayagarh'>Nayagarh</option>
<option value='Neemuch'>Neemuch</option>
<option value='Nellore'>Nellore</option>
<option value='New Delhi'>New Delhi</option>
<option value='Nilgiris'>Nilgiris</option>
<option value='Nizamabad'>Nizamabad</option>
<option value='North 24 Parganas'>North 24 Parganas</option>
<option value='North Delhi'>North Delhi</option>
<option value='North East Delhi'>North East Delhi</option>
<option value='North Goa'>North Goa</option>
<option value='North Sikkim'>North Sikkim</option>
<option value='North Tripura'>North Tripura</option>
<option value='North West Delhi'>North West Delhi</option>
<option value='Nuapada'>Nuapada</option>
<option value='Ongole'>Ongole</option>
<option value='Osmanabad'>Osmanabad</option>
<option value='Pakur'>Pakur</option>
<option value='Palakkad'>Palakkad</option>
<option value='Palamu'>Palamu</option>
<option value='Pali'>Pali</option>
<option value='Palwal'>Palwal</option>
<option value='Panchkula'>Panchkula</option>
<option value='Panchmahal'>Panchmahal</option>
<option value='Panchsheel Nagar district (Hapur)'>Panchsheel Nagar district (Hapur)</option>
<option value='Panipat'>Panipat</option>
<option value='Panna'>Panna</option>
<option value='Papum Pare'>Papum Pare</option>
<option value='Parbhani'>Parbhani</option>
<option value='Paschim Medinipur'>Paschim Medinipur</option>
<option value='Patan'>Patan</option>
<option value='Pathanamthitta'>Pathanamthitta</option>
<option value='Pathankot'>Pathankot</option>
<option value='Patiala'>Patiala</option>
<option value='Patna'>Patna</option>
<option value='Pauri Garhwal'>Pauri Garhwal</option>
<option value='Perambalur'>Perambalur</option>
<option value='Phek'>Phek</option>
<option value='Pilibhit'>Pilibhit</option>
<option value='Pithoragarh'>Pithoragarh</option>
<option value='Pondicherry'>Pondicherry</option>
<option value='Poonch'>Poonch</option>
<option value='Porbandar'>Porbandar</option>
<option value='Pratapgarh'>Pratapgarh</option>
<option value='Pratapgarh'>Pratapgarh</option>
<option value='Pudukkottai'>Pudukkottai</option>
<option value='Pulwama'>Pulwama</option>
<option value='Pune'>Pune</option>
<option value='Purba Medinipur'>Purba Medinipur</option>
<option value='Puri'>Puri</option>
<option value='Purnia'>Purnia</option>
<option value='Purulia'>Purulia</option>
<option value='Raebareli'>Raebareli</option>
<option value='Raichur'>Raichur</option>
<option value='Raigad'>Raigad</option>
<option value='Raigarh'>Raigarh</option>
<option value='Raipur'>Raipur</option>
<option value='Raisen'>Raisen</option>
<option value='Rajauri'>Rajauri</option>
<option value='Rajgarh'>Rajgarh</option>
<option value='Rajkot'>Rajkot</option>
<option value='Rajnandgaon'>Rajnandgaon</option>
<option value='Rajsamand'>Rajsamand</option>
<option value='Ramabai Nagar (Kanpur Dehat)'>Ramabai Nagar (Kanpur Dehat)</option>
<option value='Ramanagara'>Ramanagara</option>
<option value='Ramanathapuram'>Ramanathapuram</option>
<option value='Ramban'>Ramban</option>
<option value='Ramgarh'>Ramgarh</option>
<option value='Rampur'>Rampur</option>
<option value='Ranchi'>Ranchi</option>
<option value='Ratlam'>Ratlam</option>
<option value='Ratnagiri'>Ratnagiri</option>
<option value='Rayagada'>Rayagada</option>
<option value='Reasi'>Reasi</option>
<option value='Rewa'>Rewa</option>
<option value='Rewari'>Rewari</option>
<option value='Ri Bhoi'>Ri Bhoi</option>
<option value='Rohtak'>Rohtak</option>
<option value='Rohtas'>Rohtas</option>
<option value='Rudraprayag'>Rudraprayag</option>
<option value='Rupnagar'>Rupnagar</option>
<option value='Sabarkantha'>Sabarkantha</option>
<option value='Sagar'>Sagar</option>
<option value='Saharanpur'>Saharanpur</option>
<option value='Saharsa'>Saharsa</option>
<option value='Sahibganj'>Sahibganj</option>
<option value='Saiha'>Saiha</option>
<option value='Salem'>Salem</option>
<option value='Samastipur'>Samastipur</option>
<option value='Samba'>Samba</option>
<option value='Sambalpur'>Sambalpur</option>
<option value='Sangli'>Sangli</option>
<option value='Sangrur'>Sangrur</option>
<option value='Sant Kabir Nagar'>Sant Kabir Nagar</option>
<option value='Sant Ravvalueas Nagar'>Sant Ravvalueas Nagar</option>
<option value='Saran'>Saran</option>
<option value='Satara'>Satara</option>
<option value='Satna'>Satna</option>
<option value='Sawai Madhopur'>Sawai Madhopur</option>
<option value='Sehore'>Sehore</option>
<option value='Senapati'>Senapati</option>
<option value='Seoni'>Seoni</option>
<option value='Seraikela Kharsawan'>Seraikela Kharsawan</option>
<option value='Serchhip'>Serchhip</option>
<option value='Shahdol'>Shahdol</option>
<option value='Shahjahanpur'>Shahjahanpur</option>
<option value='Shajapur'>Shajapur</option>
<option value='Shamli'>Shamli</option>
<option value='Sheikhpura'>Sheikhpura</option>
<option value='Sheohar'>Sheohar</option>
<option value='Sheopur'>Sheopur</option>
<option value='Shimla'>Shimla</option>
<option value='Shimoga'>Shimoga</option>
<option value='Shivpuri'>Shivpuri</option>
<option value='Shopian'>Shopian</option>
<option value='Shravasti'>Shravasti</option>
<option value='Sibsagar'>Sibsagar</option>
<option value='Svaluedharthnagar'>Svaluedharthnagar</option>
<option value='Svaluehi'>Svaluehi</option>
<option value='Sikar'>Sikar</option>
<option value='Simdega'>Simdega</option>
<option value='Sindhudurg'>Sindhudurg</option>
<option value='Singrauli'>Singrauli</option>
<option value='Sirmaur'>Sirmaur</option>
<option value='Sirohi'>Sirohi</option>
<option value='Sirsa'>Sirsa</option>
<option value='Sitamarhi'>Sitamarhi</option>
<option value='Sitapur'>Sitapur</option>
<option value='Sivaganga'>Sivaganga</option>
<option value='Siwan'>Siwan</option>
<option value='Solan'>Solan</option>
<option value='Solapur'>Solapur</option>
<option value='Sonbhadra'>Sonbhadra</option>
<option value='Sonipat'>Sonipat</option>
<option value='Sonitpur'>Sonitpur</option>
<option value='South 24 Parganas'>South 24 Parganas</option>
<option value='South Delhi'>South Delhi</option>
<option value='South Garo Hills'>South Garo Hills</option>
<option value='South Goa'>South Goa</option>
<option value='South Sikkim'>South Sikkim</option>
<option value='South Tripura'>South Tripura</option>
<option value='South West Delhi'>South West Delhi</option>
<option value='Sri Muktsar Sahib'>Sri Muktsar Sahib</option>
<option value='Srikakulam'>Srikakulam</option>
<option value='Srinagar'>Srinagar</option>
<option value='Subarnapur (Sonepur)'>Subarnapur (Sonepur)</option>
<option value='Sultanpur'>Sultanpur</option>
<option value='Sundergarh'>Sundergarh</option>
<option value='Supaul'>Supaul</option>
<option value='Surat'>Surat</option>
<option value='Surendranagar'>Surendranagar</option>
<option value='Surguja'>Surguja</option>
<option value='Tamenglong'>Tamenglong</option>
<option value='Tarn Taran'>Tarn Taran</option>
<option value='Tawang'>Tawang</option>
<option value='Tehri Garhwal'>Tehri Garhwal</option>
<option value='Thane'>Thane</option>
<option value='Thanjavur'>Thanjavur</option>
<option value='The Dangs'>The Dangs</option>
<option value='Theni'>Theni</option>
<option value='Thiruvananthapuram'>Thiruvananthapuram</option>
<option value='Thoothukudi'>Thoothukudi</option>
<option value='Thoubal'>Thoubal</option>
<option value='Thrissur'>Thrissur</option>
<option value='Tikamgarh'>Tikamgarh</option>
<option value='Tinsukia'>Tinsukia</option>
<option value='Tirap'>Tirap</option>
<option value='Tiruchirappalli'>Tiruchirappalli</option>
<option value='Tirunelveli'>Tirunelveli</option>
<option value='Tirupur'>Tirupur</option>
<option value='Tiruvallur'>Tiruvallur</option>
<option value='Tiruvannamalai'>Tiruvannamalai</option>
<option value='Tiruvarur'>Tiruvarur</option>
<option value='Tonk'>Tonk</option>
<option value='Tuensang'>Tuensang</option>
<option value='Tumkur'>Tumkur</option>
<option value='Udaipur'>Udaipur</option>
<option value='Udalguri'>Udalguri</option>
<option value='Udham Singh Nagar'>Udham Singh Nagar</option>
<option value='Udhampur'>Udhampur</option>
<option value='Udupi'>Udupi</option>
<option value='Ujjain'>Ujjain</option>
<option value='Ukhrul'>Ukhrul</option>
<option value='Umaria'>Umaria</option>
<option value='Una'>Una</option>
<option value='Unnao'>Unnao</option>
<option value='Upper Siang'>Upper Siang</option>
<option value='Upper Subansiri'>Upper Subansiri</option>
<option value='Uttar Dinajpur'>Uttar Dinajpur</option>
<option value='Uttara Kannada'>Uttara Kannada</option>
<option value='Uttarkashi'>Uttarkashi</option>
<option value='Vadodara'>Vadodara</option>
<option value='Vaishali'>Vaishali</option>
<option value='Valsad'>Valsad</option>
<option value='Varanasi'>Varanasi</option>
<option value='Vellore'>Vellore</option>
<option value='Vvalueisha'>Vvalueisha</option>
<option value='Viluppuram'>Viluppuram</option>
<option value='Virudhunagar'>Virudhunagar</option>
<option value='Visakhapatnam'>Visakhapatnam</option>
<option value='Vizianagaram'>Vizianagaram</option>
<option value='Vyara'>Vyara</option>
<option value='Warangal'>Warangal</option>
<option value='Wardha'>Wardha</option>
<option value='Washim'>Washim</option>
<option value='Wayanad'>Wayanad</option>
<option value='West Champaran'>West Champaran</option>
<option value='West Delhi'>West Delhi</option>
<option value='West Garo Hills'>West Garo Hills</option>
<option value='West Kameng'>West Kameng</option>
<option value='West Khasi Hills'>West Khasi Hills</option>
<option value='West Siang'>West Siang</option>
<option value='West Sikkim'>West Sikkim</option>
<option value='West Singhbhum'>West Singhbhum</option>
<option value='West Tripura'>West Tripura</option>
<option value='Wokha'>Wokha</option>
<option value='Yadgir'>Yadgir</option>
<option value='Yamuna Nagar'>Yamuna Nagar</option>
<option value='Yanam'>Yanam</option>
<option value='Yavatmal'>Yavatmal</option>
          
                                                            
            <!-- <select id ="state" class="form-control select wide" required></select>     -->

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <h4>Couple Details</h4>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="bridefname">Bride First Name</label>
                                                        <input id="bridefname" name="bride_fname" type="text" placeholder="" class="form-control " required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="bridelname">Bride Last Name</label>
                                                        <input id="bridelname" name="bride_lname" type="text" placeholder="" class="form-control " required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="groomfname">Groom First Name</label>
                                                        <input id="groomfname" name="groom_fname" type="text" placeholder="" class="form-control " required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="control-label" for="groomlname">Groom last Name</label>
                                                        <input id="groomlname" name="groom_lname" type="text" placeholder="" class="form-control " required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body border-top">
                                            <input type="submit" name="save" class="btn btn-default" value="Save Changes">
                                            <!-- <button class="btn btn-default" type="submit" name="save">Save Changes</button> -->
                                        </div>
                                    </form>
                                
                            </div>
                        </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="card">
                                    <div class="card-header">Password Change</div>
                                    <div class="card-body">
                                <?php change_couples_password(); ?> 
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



                        <div class="tab-pane " id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
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
    $view_vender_query1 = " DELETE FROM wedding_info WHERE coupleID= $listing";
    $delete_user_all_listing = mysqli_query($connection, $view_vender_query1);
    }else{
        $listing = "";
    }
    if(isset($_POST['account'])){
    $account = $_POST['account'];
    $view_vender_query = " DELETE FROM couples WHERE id= $account";
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
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-ui.js"></script>
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
    <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/cities.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#image-upload").click(function() {
                alert("Image Size Should Be 100 × 100");
            });

        });
    </script>
</body>

<?php include "include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:35:36 GMT -->
</html>