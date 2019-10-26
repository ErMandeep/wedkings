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
                    <!-- <li><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
                    <!-- <li class="active"><a href="couple-dashboard-table-planner.php"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li> -->
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
                            <h3 class="dashboard-page-title">Table Seating Planner</h3>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <div id='slide-panel' class="slide-panel-light">
                            <h3>Create Table</h3>
                            <form>
                                <div class="row">
                                    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6 mb20">
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option1" autocomplete="off" checked> Circle
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option2" autocomplete="off"> Rectangle
                                            </label>
                                            <label class="btn btn-secondary">
                                                <input type="radio" name="options" id="option3" autocomplete="off"> Square
                                            </label>
                                        </div>
                                    </div> -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6 ">
                                        <div class="form-group">
                                            <label class="control-label" for="tablename">Table Name </label>
                                            <input id="tablename" name="tablename" type="text" placeholder="Table name here" class="form-control " required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seating">Seating</label>
                                            <input id="seating" name="seating" type="text" placeholder="2" class="form-control " required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="seating">Select Guest</label>
                                            <input id="ms1" name="seating" type="text" placeholder="" class="form-control" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default">Create Table </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="btn btn-default" id='trigger'>Add new table</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card seating-table-list table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="seating-table-name">
                                            <h4 class="mb0 font-weight-bold">Family Table A</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="seating-guest-name">Kristi R. Grace</td>
                                        <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="seating-guest-name">Eugene H. Rivera</td>
                                        <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="seating-guest-name">Michael S. Foster</td>
                                        <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="seating-guest-name">Roxann K. Ellis</td>
                                        <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="seating-guest-name">Cornell R. Hitchens</td>
                                        <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                    <tr>
                                        <td class="seating-guest-name">Shelley D. Mace</td>
                                        <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10 ">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card seating-table-list">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2" class="seating-table-name">
                                                <h4 class="mb0 font-weight-bold">Family Table B</h4></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="seating-guest-name">Joey Stevenson</td>
                                            <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="seating-guest-name">Robyn Armstrong</td>
                                            <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="seating-guest-name">Michael Mullenax</td>
                                            <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="seating-guest-name">John Center</td>
                                            <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="seating-guest-name">Helen Couch </td>
                                            <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
                                        </tr>
                                        <tr>
                                            <td class="seating-guest-name">Edward Toles</td>
                                            <td class="seating-table-action"><a href="#" class="btn btn-outline-violate btn-xs mr10">edit</a><a href="#" class="btn btn-outline-pink btn-xs ">delete</a></td>
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
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/magicsuggest.js"></script>
    <script>
    $(function() {
        var ms1 = $('#ms1').magicSuggest({
            data: ['Kristi R. Grace',
                'Eugene H. Rivera',
                'Michael S. Foster',
                'Roxann K. Ellis',
                'Shelley D. Mace',
                'Henry R. Moore',
                'William M. Zuniga',
                'Cindy A. Davis'
            ]
        });
    });
    </script>
    <script src="js/offcanvas.js"></script>
    <script src="js/jquery.slidereveal.js"></script>
</body>

<?php include "include/footer.php"; ?>
<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-table-planner.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Jan 2019 10:35:36 GMT -->
</html>