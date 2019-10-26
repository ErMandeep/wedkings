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
                    <li class="active"><a href="vendor-dashboard-reviews.php"><span class="dash-nav-icon"><i class="fas fa-comments"></i></span>Reviews </a></li>
                    <li><a href="vendor-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="#logout" data-toggle="modal"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container">
                <div class="dashboard-page-header">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="dashboard-page-title">Reviews</h3>
                            <p>Check your latest reviews.</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-filter-row mb20">
                    <div class="row">
                        <div class="offset-xl-9 col-xl-3">
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
                <div class="row ">
                    <div class="col-xl-4 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="card card-rating">
                            <div class="card-body">


<?php 
                            $query = "SELECT * FROM rating";
                            $sql = mysqli_query($connection, $query);
                            $totalrow = mysqli_num_rows($sql);
                            $query = "SELECT SUM(overall_rating) AS overall_rating FROM rating";
                            $result = mysqli_query($connection,$query); 
                            $row = mysqli_fetch_assoc($result); 
                            $sum = $row['overall_rating'];
                            // echo $sum;

                            $total = $sum/$totalrow;

                            $avg = round($total, 2);

                                  ?>
                                <h5 class="mb30">Average Ratings</h5>
                                <div class="review-total"><?php echo $avg; ?> </div>
                                <div class="review-text">Reviews</div>
                                <span class="rated mt40  d-block">
                                   
                                    <?php 
                                    for($x=1;$x<=$total;$x++) {
                                    echo '<i class="fa fa-star"></i>';
                                    // echo '1';
                                    }
                                    if (strpos($total,'.')) {
                                    echo '<i class="fa fa-star-half"></i>';
                                    // echo '0.5 ';
                                    $x++;
                                    }
                                    while ($x<=5) {
                                    echo '<i class="far fa-star-half"></i>';
                                    // echo '0';
                                    $x++;
                                    }
                                     ?>



                               <!--  <h5 class="mb30">Average Ratings</h5>
                                <div class="review-total">4.8 </div>
                                <div class="review-text">Reviews</div>
                                <span class="rated mt40  d-block"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa  fa-star"></i> <i class="fa fa-star-half"></i> </span>
                                <small>4.8 average based on 8 ratings.</small> -->

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12 col-sm-6 col-12">
                        <div class="card card-review-summary">
                            <div class="card-body">
                                <h5 class="mb30">Reviews Summary</h5>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Quality Service</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 86%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3  col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">86%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Facilities</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">35%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Staff</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 7%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">7%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Flexibility</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 5%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">5%</h6>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                        <h5 class="mb0 text-right">Value of money</h5>
                                    </div>
                                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12 col-12">
                                        <div class="progress mt10">
                                            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-3 col-sm-12 col-12 text-right">
                                        <h6 class="text-dark mb0">10%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


               <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card review-summary-table table-responsive">
                            <table class="table">
                                <thead>

                                    <tr>
                                        <th>Name</th>
                                        <th>Rating</th>
                                        <th>Email</th>
                                        <th>Time</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>


               
                                    <tr>
                   <?php 

                $query = "SELECT * FROM clients";
                $result = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $review = $row['review'];
                $date = $row['date'];
                $img = $row['image'];


                $query2 = "SELECT * FROM rating WHERE clientID='$id'";
                $result2 = mysqli_query($connection,$query2);
                while($rows = mysqli_fetch_assoc($result2)){

                $overall_rating = $rows['overall_rating'];
                $qalityService = $rows['qalityService'];
                $facilities = $rows['facilities'];
                $flexibility = $rows['flexibility'];
                $staff = $rows['staff'];
                $valueofmoney = $rows['valueofmoney'];


                ?>                      
                                        <td class="review-summary-name"><?php echo $name; ?></td>
                                        <td class="review-summary-rating"> 
                                            <span class="rated">
                                            <!-- <i class="fas fa-star"></i> 
                                            <i class="fas fa-star"></i> 
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i> 
                                            <i class="fas fa-star"></i> -->
                            <?php 
// $query = "SELECT overall_rating FROM rating WHERE clientID='$id'";
// $result = mysqli_query($connection,$query);
// $row = mysqli_fetch_array($result);
// $overall_rating = $row['overall_rating'];

for($x=1;$x<=$overall_rating;$x++) {
echo '<i class="fa fa-star"></i>';
// echo '1';
}
if (strpos($overall_rating,'.')) {
echo '<i class="fa fa-star-half"></i>';
// echo '0.5 ';
$x++;
}
while ($x<=5) {
echo '<i class="far fa-star"></i>';
// echo '0';
$x++;
}
?>
                                            


                                        </span><span class="ml-2"><?php echo $overall_rating; ?></span></td>
                                        <td class="review-summary-id"><?php echo $email; ?></td>
                                        <td class="review-summary-time"><?php echo time_elapsed_string($date); ?></td>
                                        <td class="review-summary-action"><a class="btn btn-outline-pink btn-xs" data-toggle="collapse" id="example-one" data-text-swap="close" data-text-original="Details" href="#<?php echo $id; ?>" aria-expanded="false" aria-controls="collapseExample">Details  </a></td>
                                    </tr>


                                    <tr>
                                        <td colspan="12" class="expandable-info">
                                            <div class="collapse expandable-collapse" id="<?php echo $id; ?>">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- review-user -->
                                                        <div class="review-user">
                                                            <div class="user-img"> <img src="images/<?php echo $img; ?>" alt="star rating jquery" class="rounded-circle"></div>
                                                            <div class="user-meta">
                                                                <span class="user-name"><?php echo $name; ?></span>
                                                                <span class="user-review-date"><?php echo $date; ?></span>
                                                                <div class="given-review">
                                                                    <span class="rated"> 
                            <?php 
                            for($x=1;$x<=$overall_rating;$x++) {
                            echo '<i class="fa fa-star"></i>';
                            // echo '1';
                            }
                            if (strpos($overall_rating,'.')) {
                            echo '<i class="fa fa-star-half"></i>';
                            // echo '0.5 ';
                            $x++;
                            }
                            while ($x<=5) {
                            echo '<i class="far fa-star"></i>';
                            // echo '0';
                            $x++;
                            }
                            ?>                                                                                                                                             </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.review-user -->
                                                        <!-- review-descripttions -->
                                                        <div class="review-descriptions">
                                                            <p><?php echo $review; ?> </p>
                                                            <div class="row">
                                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Quality Service</div>
                                                                        <div class="review-rating"><span class="rated">

<?php 
for($x=1;$x<=$qalityService;$x++) {
echo '<i class="fa fa-star"></i>';
// echo '1';
}
if (strpos($qalityService,'.')) {
echo '<i class="fa fa-star-half"></i>';
// echo '0.5 ';
$x++;
}
while ($x<=5) {
echo '<i class="far fa-star"></i>';
// echo '0';
$x++;
}
 ?>
                                                                         </span></div>
                                                                        <div class="review-number"><?php echo $qalityService; ?></div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">  Facilities</div>
                                                                        <div class="review-rating"><span class="rated">
<?php 
for($x=1;$x<=$facilities;$x++) {
echo '<i class="fa fa-star"></i>';
// echo '1';
}
if (strpos($facilities,'.')) {
echo '<i class="fa fa-star-half"></i>';
// echo '0.5 ';
$x++;
}
while ($x<=5) {
echo '<i class="far fa-star"></i>';
// echo '0';
$x++;
}
 ?>
                                                                         </span></div>
                                                                        <div class="review-number"><?php echo $facilities; ?></div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Staff</div>
                                                                        <div class="review-rating"><span class="rated">

<?php 
for($x=1;$x<=$staff;$x++) {
echo '<i class="fa fa-star"></i>';
// echo '1';
}
if (strpos($staff,'.')) {
echo '<i class="fa fa-star-half"></i>';
// echo '0.5 ';
$x++;
}
while ($x<=5) {
echo '<i class="far fa-star"></i>';
// echo '0';
$x++;
}
 ?>
                                                                        </span></div>
                                                                        <div class="review-number"><?php echo $staff; ?></div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Flexibility</div>
                                                                        <div class="review-rating"><span class="rated">
<?php 
for($x=1;$x<=$flexibility;$x++) {
echo '<i class="fa fa-star"></i>';
// echo '1';
}
if (strpos($flexibility,'.')) {
echo '<i class="fa fa-star-half"></i>';
// echo '0.5 ';
$x++;
}
while ($x<=5) {
echo '<i class="far fa-star"></i>';
// echo '0';
$x++;
}
 ?>
                                                                         </span></div>
                                                                        <div class="review-number"><?php echo $flexibility; ?></div>
                                                                    </div>
                                                                    <!-- /.review-list -->
                                                                    <!-- review-list -->
                                                                    <div class="review-list">
                                                                        <div class="review-for">Value of money</div>
                                                                        <div class="review-rating"><span class="rated">

<?php 
for($x=1;$x<=$valueofmoney;$x++) {
echo '<i class="fa fa-star"></i>';
// echo '1';
}
if (strpos($valueofmoney,'.')) {
echo '<i class="fa fa-star-half"></i>';
// echo '0.5 ';
$x++;
}
while ($x<=5) {
echo '<i class="far fa-star"></i>';
// echo '0';
$x++;
}
 ?>
                                                                         </span></div>
                                                                        <div class="review-number"><?php echo $valueofmoney; ?></div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.review-list -->
                                                            </div>
                                                        </div>
                                                        <!-- /.review-descripttions -->
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

<?php } }?>

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
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/offcanvas.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/custom-script.js"></script>
        <script src="js/fastclick.js"></script>
    <script>
        $("#example-one, #example-two, #example-three, #example-four, #example-five, #example-six  ").on("click", function() {
            var el = $(this);
            el.text() == el.data("text-swap") ?
                el.text(el.data("text-original")) :
                el.text(el.data("text-swap"));
        });
        </script>
</body>

<?php include"include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-dashboard-reviews.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:36:57 GMT -->
</html>