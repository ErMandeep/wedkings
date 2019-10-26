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
                    <div class="header-logo"> <a href="index.php"><img src="images/logo.png" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a> </div>
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
                              <!-- <a class="dropdown-item" href="couple-dashboard-table-planner.php">Seating Table </a>  -->
                              <a class="dropdown-item" href="couple-dashboard-profile.php">My Profile </a> 
                              <a href="#logout"  data-toggle="modal" class="dropdown-item">Sign out</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas"> <span id="icon-toggle" class="fa fa-bars"></span> </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <?php avatar3(); ?>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="couple-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="couple-dashboard-mywishlist.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li><a href="couple-dashboard-todolist.php"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li class="active"><a href="couple-dashboard-budget.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <!-- <li><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Budget planner</h3>
                            <p>Start your wedding budget with the Wedding budget planner estimator tool.</p>
                        </div>
                    </div>
                </div>
                <div class="budget-list-block">
                    <div class="row">
                        <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                            <div id="slide-panel" class="slide-panel-light">
                                <h3>Add new category</h3>
                                <form>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6">
                                            <div class="form-group">
                                                <label class="control-label" for="category">Category</label>
                                                <input type="text" class="form-control" id="notes" name="notes" placeholder="Write Category Name">
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label" for="notes">Notes</label>
                                                <textarea class="form-control" id="notes" name="notes" rows="5" placeholder="Write Notes"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default">Add Item</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a href="#" class="btn btn-default" id="trigger">Add Budget Category</a>
                        </div>
                    </div>
                </div>
                <div class="budget-board">
                    <div class="row">
                        <!-- budget-venue -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active" id="allguest-tab" data-toggle="tab" href="#allguest" role="tab" aria-controls="allguest" aria-selected="true">Budget</a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="confirmguest-tab" data-toggle="tab" href="#confirmguest" role="tab" aria-controls="confirmguest" aria-selected="false">Budget Details</a> </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="allguest" role="tabpanel" aria-labelledby="allguest-tab">
                                        <div class="card-body">
                                            <h3>Budget estimator</h3>
                                            <p>Proin nec orci feugiat, bibendum metus et, vestibulum magna. Suspendisse potenti. Etiam ut risus luctus, scelerisque justo ac, porttitor nibh. Mauris at rutrum risus.</p>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th class="wedding-budget-event">Wedding Event</th>
                                                        <th class="wedding-budget-estimate">Estimate</th>
                                                        <th class="wedding-budget-actual">Actual</th>
                                                        <th class="wedding-budget-paid">Paid</th>
                                                        <th class="wedding-budget-pending">Pending</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
<?php 
$login_id = "";
if (isset($_SESSION['coupleID'])) {
$login_id = $_SESSION['coupleID'];
}
$query = "SELECT type, estimate, actual, paid , pending
FROM budget
WHERE coupleID = '$login_id'
GROUP BY type
HAVING COUNT(type) >=1";  
$result = mysqli_query($connection, $query);  

if(mysqli_num_rows($result) > 0)  
{  
while($rows = mysqli_fetch_array($result))  
{  

$type = $rows['type']; 
?>
<?php 
$sql = query("SELECT SUM(estimate),SUM(actual),SUM(paid),SUM(pending)  FROM budget WHERE type ='$type' AND coupleID = '$login_id'");

while($row = mysqli_fetch_array($sql)){

$db_estimate = $row['SUM(estimate)'];
$db_actual = $row['SUM(actual)'];
$db_paid = $row['SUM(paid)'];
$db_pending = $row['SUM(pending)'];

}
?>

<tr>
<td> <?php echo $type; ?> </td>
<td class="estimate-total"><span class="total-amount"> Rs. <?php echo $db_estimate; ?></span></td>
<td class="actual-total"><span class="total-amount">Rs. <?php echo $db_actual; ?></span></td>
<td class="paid-total"><span class="total-amount">Rs. <?php echo $db_paid; ?></span></td>
<td class="pending-total"><span class="total-amount">Rs. <?php echo $db_pending; ?></span></td>
</tr>

<?php }} ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="confirmguest" role="tabpanel" aria-labelledby="confirmguest-tab">
                                        <div class="card-body">
                                            <h3>Budget Details</h3>
                                            <p>Proin nec orci feugiat, bibendum metus et, vestibulum magna. Suspendisse potenti. Etiam ut risus luctus, scelerisque justo ac, porttitor nibh. Mauris at rutrum risus.</p>
                                        </div>
                                        <div class="">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Venue</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs"> delete</a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer1">
<!--                                                         <tr>
                                                            <td>
                                                                <input name="DynamicTextBox" type="text" value="" placeholder="Location Fees" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input name="DynamicTextBox" type="text" value="400" placeholder="100" class="form-control form-control-sm venue-cost">
                                                            </td>
                                                            <td>
                                                                <input name="DynamicTextBox" type="text" value="" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input name="DynamicTextBox" type="text" value="" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <input name="DynamicTextBox" type="text" value="" placeholder="0" class="form-control form-control-sm">
                                                            </td>
                                                            <td>
                                                                <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs remove">delete</a></td>
                                                        </tr> -->


                                                      
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="6"><a href="#" id="venue-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp;Add New Item</a></td>
                                                        </tr>
                                                        <!-- <tr>
                                                            <td> Total Cost of Venue </td>
                                                            <td class="estimate-total">Estimate Total <span class="total-amount" id="venue-total">$200</span></td>
                                                            <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                            <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                            <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                            <td></td>
                                                        </tr> -->
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- budget-ceremony -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Ceremony</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs"> delete</a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer2">
                                                        
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="6"><a href="javascript:void(0)" id="ceremony-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp; Add New Item</a></td>
                                                        </tr>
                                                       <!--  <tr>
                                                            <td> Total Cost of Ceremony </td>
                                                            <td class="estimate-total"> Estimate Total <span class="total-amount"> $200</span></td>
                                                            <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                            <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                            <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                            <td></td>
                                                        </tr> -->
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.budget-ceremony -->
                                        <!-- budget-hair-makeup -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Hair & Makeup</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs">delete </a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer3">
                                                     
                                                    </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="6"><a href="javascript:void(0)" id="hair-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp; Add New Item</a></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td> Total Cost of Hair/Makeup </td>
                                                                <td class="estimate-total"> Estimate Total <span class="total-amount"> $100</span></td>
                                                                <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                                <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                                <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                                <td></td>
                                                            </tr> -->
                                                        </tfoot>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-hair-makeup -->
                                        <!-- budget-flowers -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Flowers</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs"> delete</a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer4">
                                                        
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="6"><a href="javascript:void(0)" id="flower-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp; Add New Item</a></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td> Total of Category Venue </td>
                                                                <td class="estimate-total"> Estimate Total <span class="total-amount"> $2000</span></td>
                                                                <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                                <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                                <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                                <td></td>
                                                            </tr> -->
                                                        </tfoot>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-flowers -->
                                        <!-- budget-cake -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Cake</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs"> delete</a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                           <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer5">
                                                       
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="6"><a href="javascript:void(0)" id="cake-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp; Add New Item</a></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td> Total Cost of Flowers </td>
                                                                <td class="estimate-total"> Estimate Total <span class="total-amount"> $1000</span></td>
                                                                <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                                <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                                <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                                <td></td>
                                                            </tr> -->
                                                        </tfoot>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-cake -->
                                        <!-- budget-photography -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Photography</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs"> delete</a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer6">
                                                    
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="6"><a href="javascript:void(0)" id="photography-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp; Add New Item</a></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td> Total Cost of Photography </td>
                                                                <td class="estimate-total"> Estimate Total <span class="total-amount"> $3000</span></td>
                                                                <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                                <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                                <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                                <td></td>
                                                            </tr> -->
                                                        </tfoot>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-cake -->
                                        <!-- budget-printed -->
                                        <div class="budget-category-block">
                                            <div class="budget-category-head d-flex align-items-center">
                                                <h3 class="budget-category-title mr-auto">Printed Materials</h3>
                                                <!-- <a href="javascript:void(0)" class="btn btn-outline-pink btn-xs"> delete</a> -->
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="wedding-budget-event">Wedding Event</th>
                                                            <th class="wedding-budget-estimate">Estimate</th>
                                                            <th class="wedding-budget-actual">Actual</th>
                                                            <th class="wedding-budget-paid">Paid</th>
                                                            <th class="wedding-budget-pending">Pending</th>
                                                            <th class="wedding-budget-action">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="TextBoxContainer7">
                                                        
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="6"><a href="javascript:void(0)" id="print-btn" class="btn btn-primary btn-xs" data-toggle="tooltip" data-original-title="Add more controls"><i class="fas fa-plus"></i>&nbsp; Add New Item</a></td>
                                                            </tr>
                                                            <!-- <tr>
                                                                <td> Total Cost of Printed Materials </td>
                                                                <td class="estimate-total"> Estimate Total <span class="total-amount"> $300</span></td>
                                                                <td class="actual-total"> Actual Total <span class="total-amount">$0</span></td>
                                                                <td class="paid-total"> Paid Total <span class="total-amount">$0</span></td>
                                                                <td class="pending-total"> Pending Total <span class="total-amount">$0</span></td>
                                                                <td></td>
                                                            </tr> -->
                                                        </tfoot>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /. budget-printed -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /. budget-venue -->
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
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/jquery.slidereveal.js"></script>
        <script type="text/javascript">
        $(function() {
            $("#venue-btn").bind("click", function() {  
                var div = $("<tr />");
                div.html(WeddingEvent(""));
                $("#TextBoxContainer1").append(div);
            });
            $("#ceremony-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(Ceremony(""));
                $("#TextBoxContainer2").append(div);
            });
            $("#hair-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(makeup(""));
                $("#TextBoxContainer3").append(div);
            });
            $("#flower-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(Flowers(""));
                $("#TextBoxContainer4").append(div);
            });
            $("#cake-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(Cake(""));
                $("#TextBoxContainer5").append(div);
            });
            $("#photography-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(Photography(""));
                $("#TextBoxContainer6").append(div);
            });
            $("#print-btn").bind("click", function() {
                var div = $("<tr />");
                div.html(Printed(""));
                $("#TextBoxContainer7").append(div);
            });
            $("body").on("click", ".remove", function() {

                $(this).closest("tr").remove();

            });
        });

        function GetDynamicTextBox(value) {
            return '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="DynamicTextBox" type="text" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" class="btn btn-outline-pink btn-xs remove">delete</a></td>'
        }

        function WeddingEvent(value) {
            return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs save">Add</a></td>'
        }

        function Ceremony(value) {
     return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs Ceremony">Add</a></td>'
        }

        function makeup(value) {
     return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs makeup">Add</a></td>'
        }      

        function Flowers(value) {
     return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs Flowers">Add</a></td>'
        }           

        function Cake(value) {
     return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs Cake">Add</a></td>'
        }                   

        function Photography(value) {
     return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs Photography">Add</a></td>'
        }    

        function Printed(value) {
     return '<td><input name ="event" type="text" id="event" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="estimate" id="estimate" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="actual" id="actual" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="paid" id="paid" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><input name ="pending" id="pending" type="number" value ="' + value + '" class="form-control form-control-sm" /></td>' + '<td><a href="javascript:void(0)" id="action" name="action" class="btn btn-outline-secondary btn-xs Printed">Add</a></td>'
        }           

        
        </script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
          $(document).ready(function(){   


// Printed fetch and deletee function

    Printed();  
      function Printed()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "Printed.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer7').html(data); 

                }  
           });  
      }  
 $(document).on('click', '.Printed', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "Printed";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          Printed();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  




// Photography fetch and deletee function

    Photography();  
      function Photography()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "Photography.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer6').html(data); 

                }  
           });  
      }  
 $(document).on('click', '.Photography', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "Photography";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          Photography();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  






// Cake fetch and deletee function

    Cake();  
      function Cake()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "Cake.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer5').html(data); 

                }  
           });  
      }  
 $(document).on('click', '.Cake', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "Cake";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          Cake();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  





// Flowers fetch and deletee function

    Flowers();  
      function Flowers()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "Flowers.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer4').html(data); 

                }  
           });  
      }  
 $(document).on('click', '.Flowers', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "Flowers";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          Flowers();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  





// Hair and makeup fetch and deletee function

    makeup();  
      function makeup()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "makeup.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer3').html(data); 

                }  
           });  
      }  
 $(document).on('click', '.makeup', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "makeup";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          makeup();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  



// Ceremony fetch and deletee function

    Ceremony();  
      function Ceremony()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "Ceremony.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer2').html(data); 

                }  
           });  
      }  
 $(document).on('click', '.Ceremony', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "Ceremony";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          Ceremony();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  



        // Fetch data from database

              fetchUser();  
      function fetchUser()  
      {  
           var action = "select";  
           $.ajax({  
                type: "GET",
                url : "add.php",  
                 dataType: "html",
                success:function(data){  
                     $('#TextBoxContainer1').html(data); 

                }  
           });  
      }  



 $(document).on('click', '.save', function(){
           var event = $('#event').val();  
           var estimate = $('#estimate').val();  
           var actual = $('#actual').val();  
           var paid = $('#paid').val();  
           var pending = $('#pending').val();
           var action = "Venue";
        // alert("Titile :"+event+"," +"estimate"+ estimate +","+"actual"+ actual+ "," + "paid" + paid + "," + "Pending"+pending );
           if(event != '' && estimate != '' && actual != '' && paid != '' && pending != '')  
           {  
                $.ajax({  
                     url : "action.php",  
                     method:"POST",  
                     data:{event:event, estimate:estimate, actual:actual, paid:paid, pending:pending, action:action},  
                     success:function(data){  
                          alert("your Data Save");  
                          fetchUser();  
                     }  
                });  
           }  
           else  
           {  
                alert("All Fields are Required");  
           }  
      });  

                 });





        </script>
<!-- Delete budget query -->
<script type="text/javascript">
    $(document).on('click', '.remove', function(){
        var id = $(this).attr("id");
        var action = 'remove';
        if(confirm("Are you sure you want to remove this ?"))
        {
            $.ajax({
                url:"action.php",
                method:"POST",
                data:{id:id, action:action},
                success:function()
                {
                    alert("Your Event Delete Successfully");
                     Printed();                   
                }
            })
        }
        else
        {
            return false;
        }
    });


</script>
</body>
<?php include "include/footer.php"; ?>
</html>
