
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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Guest Manager</h3>
                            <p>Guest manager allows you to take your guest management for wedding events.</p>
                        </div>
                    </div>
                </div>
                <div class="rsvp-summary-section">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card summary-block rsvp-summary bg-light-violate">
                                <div class="card-body summary-content">
                                    <div class="summary-count">200</div>
                                    <p class="summary-text">Guests</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card summary-block rsvp-summary  bg-light-green">
                                <div class="card-body summary-content">
                                    <div class="summary-count">120</div>
                                    <p class="summary-text">Accepted</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card summary-block rsvp-summary bg-light-yellow">
                                <div class="card-body summary-content">
                                    <div class="summary-count">40</div>
                                    <p class="summary-text">Waiting</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card summary-block rsvp-summary bg-light-orange">
                                <div class="card-body summary-content">
                                    <div class="summary-count">40</div>
                                    <p class="summary-text">Declined</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="guest-list-block">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-7 col-sm-6 col-6">
                            <h4 class="guest-list-block-title">My Guest List</h4>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-6 text-right">
                            <a href="couple-dashboard-add-new-guest.php" class="btn btn-default">Add new guest</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="guestlist-management">
                            <div class="card">
                                <div class="card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="allguest-tab" data-toggle="tab" href="#allguest" role="tab" aria-controls="allguest" aria-selected="true">All Guest (200)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="confirmguest-tab" data-toggle="tab" href="#confirmguest" role="tab" aria-controls="confirmguest" aria-selected="false">Completed (120)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Waiting (40)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="declined-tab" data-toggle="tab" href="#declined" role="tab" aria-controls="declined" aria-selected="false"> Declined(40)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="allguest" role="tabpanel" aria-labelledby="allguest-tab">
                                        <div class="guest-filter">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-single-tab" data-toggle="pill" href="#pills-single" role="tab" aria-controls="pills-single" aria-selected="true">Single <span class="badge badge-light">150</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-couple-tab" data-toggle="pill" href="#pills-couple" role="tab" aria-controls="pills-couple" aria-selected="false">Couple  <span class="badge badge-light">25</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-household-tab" data-toggle="pill" href="#pills-household" role="tab" aria-controls="pills-household" aria-selected="false">Household  <span class="badge badge-light">25</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="guest-filter-content">
                                            <div class="tab-pane fade show active" id="pills-single" role="tabpanel" aria-labelledby="pills-single-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="single-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Email Address</th>
                                                                    <th data-orderable="false">Invite Sent</th>
                                                                    <th>RSVP</th>
                                                                    <th data-orderable="false">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">
                                                                        <div class="round">
                                                                            <input type="checkbox" id="checkbox1" />
                                                                            <label for="checkbox1"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td class="guest-invite">
                                                                        <div class="round">
                                                                            <input type="checkbox" id="checkbox2" />
                                                                            <label for="checkbox2"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="dot-badge dot-badge-danger"></span> Declined</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td class="guest-invite">
                                                                        <div class="round">
                                                                            <input type="checkbox" id="checkbox3" />
                                                                            <label for="checkbox3"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Irene Davidson</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Irene@gmail.com</td>
                                                                    <td class="guest-invite">
                                                                       <div class="round">
                                                                            <input type="checkbox" id="checkbox4" />
                                                                            <label for="checkbox4"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael Murphy</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Michael@gmail.com</td>
                                                                    <td class="guest-invite">
                                                                        <div class="round">
                                                                            <input type="checkbox" id="checkbox5" />
                                                                            <label for="checkbox5"></label>
                                                                        </div>
                                                                    </td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-couple" role="tabpanel" aria-labelledby="pills-couple-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="couple-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Anna Coleman</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4
                                                                        </a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Dorothy Reynolds</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-danger"></span> Declined</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Julie Bias</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Bias</li>
                                                                                     <li class='list-group-item'>Anna Bias</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Julie@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Leonard Barrios</li>
                                                                                     <li class='list-group-item'>Theresa Barrios</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-household" role="tabpanel" aria-labelledby="pills-household-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="household-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Brian Coleman</li>
                                                                                      <li class='list-group-item'>Rebecca Coleman</li>
                                                                                  <li class='list-group-item'>Sarah Coleman</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Steven Reynolds</li>
                                                                                      <li class='list-group-item'>Robert Reynolds</li>
                                                                                  <li class='list-group-item'>Ray Reynolds</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-danger"></span> Declined</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dora Lees</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Dora Jefferson</li>
                                                                                     <li class='list-group-item'>Anna Jefferson</li>
                                                                                      <li class='list-group-item'>Andrea Jefferson</li>
                                                                                  <li class='list-group-item'>Peter Jefferson</li>
                                                                                  <li class='list-group-item'>Victoria Jefferson</li>
                                                                                  <li class='list-group-item'>Charles Jefferson</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">6</a>
                                                                    </td>
                                                                    <td>doradlees@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-warning"></span> Waiting</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rajeshbhai Mahavar</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Rakeshbhai Mahaver</li>
                                                                                     <li class='list-group-item'>Umaben Mahaver</li>
                                                                                      <li class='list-group-item'>Artiben Mahaver</li>
                                                                                  <li class='list-group-item'>Hitesh Mahavar</li>
                                                                                  <li class='list-group-item'>Bhoomika Mahavar</li>
                                                                                  <li class='list-group-item'>Komal Mahavar</li>
                                                                                  <li class='list-group-item'>Rahul Mahavar</li>
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">7</a>
                                                                    </td>
                                                                    <td>nathanielcmcville@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-danger"></span> Declined</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jitu Chauhan</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jitu Chauhan</li>
                                                                                     <li class='list-group-item'>Nitu Chauhan</li>
                                                                                      <li class='list-group-item'>Tisha Chauhan</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">3</a>
                                                                    </td>
                                                                    <td>jeremy@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="confirmguest" role="tabpanel" aria-labelledby="confirmguest-tab">
                                        <div class="guest-filter">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-confirm-single-tab" data-toggle="pill" href="#pills-confirm-single" role="tab" aria-controls="pills-confirm-single" aria-selected="true">Single <span class="badge badge-light">100</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-confirm-couple-tab" data-toggle="pill" href="#pills-confirm-couple" role="tab" aria-controls="pills-confirm-couple" aria-selected="false">Couple <span class="badge badge-light">10</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-confirm-household-tab" data-toggle="pill" href="#pills-confirm-household" role="tab" aria-controls="pills-confirm-household" aria-selected="false">Household <span class="badge badge-light">10</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-confirm-single" role="tabpanel" aria-labelledby="pills-confirm-single-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="single-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Irene Davidson</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Irene@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael Murphy</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Michael@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-confirm-couple" role="tabpanel" aria-labelledby="pills-confirm-couple-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="couple-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Anna Coleman</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Dorothy Reynolds</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Julie Bias</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Bias</li>
                                                                                     <li class='list-group-item'>Anna Bias</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Julie@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Leonard Barrios</li>
                                                                                     <li class='list-group-item'>Theresa Barrios</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-confirm-household" role="tabpanel" aria-labelledby="pills-confirm-household-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="household-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Brian Coleman</li>
                                                                                      <li class='list-group-item'>Rebecca Coleman</li>
                                                                                  <li class='list-group-item'>Sarah Coleman</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Steven Reynolds</li>
                                                                                      <li class='list-group-item'>Robert Reynolds</li>
                                                                                  <li class='list-group-item'>Ray Reynolds</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dora Lees</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Dora Jefferson</li>
                                                                                     <li class='list-group-item'>Anna Jefferson</li>
                                                                                      <li class='list-group-item'>Andrea Jefferson</li>
                                                                                  <li class='list-group-item'>Peter Jefferson</li>
                                                                                  <li class='list-group-item'>Victoria Jefferson</li>
                                                                                  <li class='list-group-item'>Charles Jefferson</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">6</a>
                                                                    </td>
                                                                    <td>doradlees@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rajeshbhai Mahavar</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Rakeshbhai Mahaver</li>
                                                                                     <li class='list-group-item'>Umaben Mahaver</li>
                                                                                      <li class='list-group-item'>Artiben Mahaver</li>
                                                                                  <li class='list-group-item'>Hitesh Mahavar</li>
                                                                                  <li class='list-group-item'>Bhoomika Mahavar</li>
                                                                                  <li class='list-group-item'>Komal Mahavar</li>
                                                                                  <li class='list-group-item'>Rahul Mahavar</li>
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">7</a>
                                                                    </td>
                                                                    <td>nathanielcmcville@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jitu Chauhan</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jitu Chauhan</li>
                                                                                     <li class='list-group-item'>Nitu Chauhan</li>
                                                                                      <li class='list-group-item'>Tisha Chauhan</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">3</a>
                                                                    </td>
                                                                    <td>jeremy@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="guest-filter">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-waiting-single-tab" data-toggle="pill" href="#pills-waiting-single" role="tab" aria-controls="pills-waiting-single" aria-selected="true">Single <span class="badge badge-light">20</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-waiting-couple-tab" data-toggle="pill" href="#pills-waiting-couple" role="tab" aria-controls="pills-waiting-couple" aria-selected="false">Couple <span class="badge badge-light">10</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-waiting-household-tab" data-toggle="pill" href="#pills-waiting-household" role="tab" aria-controls="pills-waiting-household" aria-selected="false">Household <span class="badge badge-light">10</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-waiting-single" role="tabpanel" aria-labelledby="pills-waiting-single-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="single-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Irene Davidson</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Irene@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael Murphy</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Michael@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-waiting-couple" role="tabpanel" aria-labelledby="pills-waiting-couple-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="couple-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Anna Coleman</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Dorothy Reynolds</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Julie Bias</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Bias</li>
                                                                                     <li class='list-group-item'>Anna Bias</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Julie@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Leonard Barrios</li>
                                                                                     <li class='list-group-item'>Theresa Barrios</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-waiting-household" role="tabpanel" aria-labelledby="pills-waiting-household-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="household-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Brian Coleman</li>
                                                                                      <li class='list-group-item'>Rebecca Coleman</li>
                                                                                  <li class='list-group-item'>Sarah Coleman</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Steven Reynolds</li>
                                                                                      <li class='list-group-item'>Robert Reynolds</li>
                                                                                  <li class='list-group-item'>Ray Reynolds</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dora Lees</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Dora Jefferson</li>
                                                                                     <li class='list-group-item'>Anna Jefferson</li>
                                                                                      <li class='list-group-item'>Andrea Jefferson</li>
                                                                                  <li class='list-group-item'>Peter Jefferson</li>
                                                                                  <li class='list-group-item'>Victoria Jefferson</li>
                                                                                  <li class='list-group-item'>Charles Jefferson</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">6</a>
                                                                    </td>
                                                                    <td>doradlees@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rajeshbhai Mahavar</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Rakeshbhai Mahaver</li>
                                                                                     <li class='list-group-item'>Umaben Mahaver</li>
                                                                                      <li class='list-group-item'>Artiben Mahaver</li>
                                                                                  <li class='list-group-item'>Hitesh Mahavar</li>
                                                                                  <li class='list-group-item'>Bhoomika Mahavar</li>
                                                                                  <li class='list-group-item'>Komal Mahavar</li>
                                                                                  <li class='list-group-item'>Rahul Mahavar</li>
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">7</a>
                                                                    </td>
                                                                    <td>nathanielcmcville@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jitu Chauhan</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jitu Chauhan</li>
                                                                                     <li class='list-group-item'>Nitu Chauhan</li>
                                                                                      <li class='list-group-item'>Tisha Chauhan</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">3</a>
                                                                    </td>
                                                                    <td>jeremy@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="declined" role="tabpanel" aria-labelledby="declined-tab">
                                        <div class="guest-filter">
                                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="pills-declined-single-tab" data-toggle="pill" href="#pills-declined-single" role="tab" aria-controls="pills-waiting-single" aria-selected="true">Single <span class="badge badge-light">20</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-declined-couple-tab" data-toggle="pill" href="#pills-declined-couple" role="tab" aria-controls="pills-declined-couple" aria-selected="false">Couple <span class="badge badge-light">10</span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="pills-declined-household-tab" data-toggle="pill" href="#pills-declined-household" role="tab" aria-controls="pills-declined-household" aria-selected="false">Household <span class="badge badge-light">10</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade show active" id="pills-declined-single" role="tabpanel" aria-labelledby="pills-declined-single-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="single-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Irene Davidson</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Irene@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Michael Murphy</td>
                                                                    <td>Groom Family</td>
                                                                    <td>Michael@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-declined-couple" role="tabpanel" aria-labelledby="pills-declined-couple-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="couple-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Anna Coleman</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Dorothy Reynolds</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Julie Bias</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Bias</li>
                                                                                     <li class='list-group-item'>Anna Bias</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Julie@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Leonard Barrios</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="couple-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Leonard Barrios</li>
                                                                                     <li class='list-group-item'>Theresa Barrios</li>
                                                                                   
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>Leonard@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-declined-household" role="tabpanel" aria-labelledby="pills-declined-household-tab">
                                                <div class="guest-list-table table-responsive">
                                                    <div class="household-guest-tab">
                                                        <table class="table" id="allguest-datatables">
                                                            <thead>
                                                                <tr>
                                                                    <th>Guest Name</th>
                                                                    <th>Group</th>
                                                                    <th>Member</th>
                                                                    <th>Email Address</th>
                                                                    <th>Invited</th>
                                                                    <th>RSVP</th>
                                                                    <th>Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="guest-name">Jane Coleman</td>
                                                                    <td class="guest-group">Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jane Coleman</li>
                                                                                     <li class='list-group-item'>Brian Coleman</li>
                                                                                      <li class='list-group-item'>Rebecca Coleman</li>
                                                                                  <li class='list-group-item'>Sarah Coleman</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td class="guest-email-id">janecoleman@gmail.com</td>
                                                                    <td class="guest-invite">Yes</td>
                                                                    <td class="guest-rsvp"><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td class="guest-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Ofelia Reynolds</td>
                                                                    <td>Bride Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Ofelia Reynolds</li>
                                                                                     <li class='list-group-item'>Steven Reynolds</li>
                                                                                      <li class='list-group-item'>Robert Reynolds</li>
                                                                                  <li class='list-group-item'>Ray Reynolds</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">4</a>
                                                                    </td>
                                                                    <td>ofeliacreynolds@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dora Lees</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Dora Jefferson</li>
                                                                                     <li class='list-group-item'>Anna Jefferson</li>
                                                                                      <li class='list-group-item'>Andrea Jefferson</li>
                                                                                  <li class='list-group-item'>Peter Jefferson</li>
                                                                                  <li class='list-group-item'>Victoria Jefferson</li>
                                                                                  <li class='list-group-item'>Charles Jefferson</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">6</a>
                                                                    </td>
                                                                    <td>doradlees@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Rajeshbhai Mahavar</td>
                                                                    <td>Groom Friend</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Rakeshbhai Mahaver</li>
                                                                                     <li class='list-group-item'>Umaben Mahaver</li>
                                                                                      <li class='list-group-item'>Artiben Mahaver</li>
                                                                                  <li class='list-group-item'>Hitesh Mahavar</li>
                                                                                  <li class='list-group-item'>Bhoomika Mahavar</li>
                                                                                  <li class='list-group-item'>Komal Mahavar</li>
                                                                                  <li class='list-group-item'>Rahul Mahavar</li>
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">7</a>
                                                                    </td>
                                                                    <td>nathanielcmcville@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Jitu Chauhan</td>
                                                                    <td>Groom Family</td>
                                                                    <td class="household-guest-member">
                                                                        <a href="javascript:void(0)" class="example-popover" data-trigger="hover" data-toggle="popover" title="Household Member" data-content="

                                                                                <ul class='list-group list-group-flush'>
                                                                                    <li class='list-group-item'>Jitu Chauhan</li>
                                                                                     <li class='list-group-item'>Nitu Chauhan</li>
                                                                                      <li class='list-group-item'>Tisha Chauhan</li>
                                                                                  
                                                                                 
                                                                                </ul>

                                                                            " data-php="true">3</a>
                                                                    </td>
                                                                    <td>jeremy@gmail.com</td>
                                                                    <td>Yes</td>
                                                                    <td><span class="dot-badge dot-badge-success"></span> Confirmed</td>
                                                                    <td><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="# " class="btn btn-outline-pink btn-xs">delete</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="js/offcanvas.js"></script>
    <script type="text/javascript" src="js/datatables.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#allguest-datatables, #completed-guest, #waiting-guest, #declined-guest').DataTable({
            "searching": false,
            "lengthChange": false,
        });

    });
    </script>
    <script>
    $(function() {
        $('.example-popover').popover({
            container: 'body',
            php: true
        })
    })
    </script>
</body>

<?php include "include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-guest-manager.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:35:35 GMT -->
</html>