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
                            <a class=" dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="user-icon">  <img src="images/dashboard-profile-couple.jpg" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name">Eva J. Giles</span> 
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
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    <img src="images/dashboard-profile-couple.jpg" alt="" class="rounded-circle"></div>
                <h3 class="vendor-profile-name">Eva J. Giles</h3>
                <a href="#" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="couple-dashboard-overview.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="couple-dashboard-mywishlist.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> My Wishlist </a></li>
                    <li class="active"><a href="couple-dashboard-todolist.php"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>To Do List</a></li>
                    <li><a href="couple-dashboard-budget.php"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>Budget</a></li>
                    <!-- <li><a href="couple-dashboard-guest-manager.php"><span class="dash-nav-icon"><i class="fas fa-users"></i></span>Guestlist </a></li> -->
                    <!-- <li><a href="couple-dashboard-table-planner.php"><span class="dash-nav-icon"><i class="fas fa-table"></i></span>Seating Table </a></li> -->
                     <li><a href="couple-dashboard-website.php"><span class="dash-nav-icon"><i class="fas fa-link"></i></span>Wedding Website </a></li>
                      <li><a href="couple-dashboard-realwedding.php"><span class="dash-nav-icon"><i class="fas fa-images"></i></span>Real Wedding </a></li>
                    <li><a href="couple-dashboard-profile.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="#logout" data-toggle="modal"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Logout </a></li>
                </ul>
            </div>
        </div>


<?php createtask(); ?>
        <div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My To Do List</h3>
                            <p>Create and manage your wedding planning checklist. Its ultimate and real simple.</p>
                        </div>
                    </div>
                </div>

                
                <div class="row">
                    <div class="offset-xl-8 col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 text-right mb20">
                        <div id='slide-panel' class="slide-panel-light">
                            <h3>Create Task</h3>
                            <form autocomplete="off" method="post">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <div class="form-group">
                                            <label class="control-label" for="tasktitle">Task Title</label>
                                            <input id="tasktitle" name="tasktitle" type="text" placeholder="Write task here" class="form-control " required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="taskdate">Task Date</label>
                                            <input id="taskdate" name="taskdate" type="text" placeholder="Task Date" class="form-control " required="">
                                            <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <button type="submit" id="swal" name="createtask" class="swal btn btn-default">Submit to do </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="#" class="btn btn-default" id='trigger'>Add New Task</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE status ='complete' ";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                             ?>
                                    <div class="summary-count"><?php echo $rowcount; ?></div>
                                    <p>Completed Task</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                    <?php 
                            $quer2 = "SELECT * FROM task WHERE status ='due' ";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                             ?>
                                    <div class="summary-count"><?php echo $rowcount; ?></div>
                                    <p>Due Task </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                    <div class="summary-count"><?php echo $rowcount; ?></div>
                                    <p>Pending </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="card card-summary">
                            <div class="card-body">
                                <div class="float-left">
                                     <?php 
                            $quer2 = "SELECT * FROM task";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                             ?>
                                    <div class="summary-count"><?php echo $rowcount; ?></div>
                                    <p>Total Task </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- accordions -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div id="accordion" class="todo">
                            <!-- accordion-card -->
                            <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'January'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                             ?>
                             <?php if($rowcount != 0): ?>
                            
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="<?php echo $month; ?>">
                                    <h5 class="mb-0">
                                        
                                    <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                 Jaunary (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span></a></h5>
                                </div>
                                <div id="collapseOne" class="collapse show" aria-labelledby="<?php echo $month; ?>" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll">
                                                            <label class="custom-control-label" for="customCheckAll">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                             
    <?php 

   $query = "SELECT * FROM task WHERE month = 'January'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
                                                                <!-- <a href="#" class="btn btn-outline-violate btn-xs">edit</a> -->
                                                                <!-- <a href="# " class="btn btn-outline-pink btn-xs">delete</a> -->
                                                                <a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
                                              

<?php } ?>
                                          
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>



                            <!-- /.accordion-card -->
                            <!-- accordion-card -->
                            <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'February'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                    <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    February (<?php echo $rowcount; ?>) <span class="fas fa-plus float-right"></span>
                                    </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll2">
                                                            <label class="custom-control-label" for="customCheckAll2">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">

                            <?php 

   $query = "SELECT * FROM task WHERE month = 'February'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
                                                        <a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!-- /.accordion-card -->
                            <!-- accordion-card -->
                            <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'March'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                 March (<?php echo $rowcount; ?>) <span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                           


    <?php 

   $query = "SELECT * FROM task WHERE month = 'March'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>
                                                


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                            <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'April'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#April" aria-expanded="false" aria-controls="April">
                 April (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="April" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                                

    <?php 

   $query = "SELECT * FROM task WHERE month = 'April'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>

      


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                             <!-- accordion-card -->
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'May'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#May" aria-expanded="false" aria-controls="May">
                 May (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="May" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                               
    <?php 

   $query = "SELECT * FROM task WHERE month = 'May'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>


                                            


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                             <!-- accordion-card -->
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'June'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#Jun" aria-expanded="false" aria-controls="Jun">
                 Jun (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="Jun" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                               

    <?php 

   $query = "SELECT * FROM task WHERE month = 'June'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>


 


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                            <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'July'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#July" aria-expanded="false" aria-controls="July">
                 July (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="July" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                               

    <?php 

   $query = "SELECT * FROM task WHERE month = 'July'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'August'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#August" aria-expanded="false" aria-controls="August">
                 August (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="August" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                                

                                                    <?php 

   $query = "SELECT * FROM task WHERE month = 'August'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'September'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#September" aria-expanded="false" aria-controls="September">
                 September (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="September" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
   <?php 

   $query = "SELECT * FROM task WHERE month = 'September'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'October'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#October" aria-expanded="false" aria-controls="October">
                 October (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="October" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                                

                                                   <?php 

   $query = "SELECT * FROM task WHERE month = 'October'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                             <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'November'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#November" aria-expanded="false" aria-controls="collapseThree">
                 November (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="November" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
                                                    <?php 

   $query = "SELECT * FROM task WHERE month = 'November'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                            <!--/. accordion-card -->
                            <?php 
                            $quer2 = "SELECT * FROM task WHERE month = 'December'";
                            $task2 = mysqli_query($connection, $quer2); 
                            $rowcount=mysqli_num_rows($task2);  
                                         ?>
                                         <?php if($rowcount != 0): ?>
                             <!-- accordion-card -->
                            <div class="accordion-card card">
                                <div class="accordion-card-header" id="headingThree">
                                    <h5 class="mb-0">
                   <a role="button" href="#" class="accordion-card-title" data-toggle="collapse" data-target="#December" aria-expanded="false" aria-controls="collapseThree">
                 December (<?php echo $rowcount; ?>)<span class="fas fa-plus float-right"></span>
                       </a>
                             </h5>
                                </div>
                                <div id="December" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <!-- to do header -->
                                        <div class="todo-thead">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                    <div class=" ">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheckAll3">
                                                            <label class="custom-control-label" for="customCheckAll3">
                                                                All
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" ">Task Date</span>
                                                </div>
                                                <div class="col-xl-2">
                                                    <span class=" "> Status </span>
                                                </div>
                                                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                    Action
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.to do header -->
                                        <div class="todo-list">
                                            <ul class="list-unstyled">
    <?php 

   $query = "SELECT * FROM task WHERE month = 'December'";
        $select_image = mysqli_query($connection, $query); 
       $rowcount=mysqli_num_rows($select_image);     
      while($row = mysqli_fetch_assoc($select_image)){
          $id = $row['id'];
          $tasktitle = $row['tasktitle'];
          $taskdate = $row['taskdate'];
          $status = $row['status'];



 ?>                                         
                                                <li>
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-10 col-md-8 col-sm-12 col-12">
                                                            <div class="todo-list-content">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                    <label class="custom-control-label" for="customCheck2">
                                                                        <?php echo $tasktitle; ?>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-2">
                                                            <span class="todo-date"><?php echo $taskdate; ?></span>
                                                        </div>
                    <!-- task complete -->
                                    <?php 

                                    if(isset($_GET['is'])){

                                            $pid = $_GET['is'];
                                            $taskc = "UPDATE task SET status = 'complete' WHERE id={$pid}";
                                            $update_img = query($taskc);
                                            echo '<script>
                                        {
                                            window.location = "couple-dashboard-todolist.php";  
                                        }
                                    </script>';

                                    }
                                     ?>


                                                        <?php if($status == 'due'): ?>
                                                        <div class="col-xl-2">
                                          <a href="couple-dashboard-todolist.php?is=<?php echo $id; ?>" class="badge badge-danger" onclick="return confirm('Are you complete your task ?')"><?php echo $status; ?></a>             
                                                        </div>
                                                        <?php else: ?>
                                                         <div class="col-xl-2">
                                                            <span class="to-do-status"><span class="badge badge-success">Complete</span></span>
                                                        </div>
                                                        <?php endif; ?>
                                                        <!-- <button type="submit" id="due" class="badge badge-danger">dddd</button> -->

                                                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-12 col-12">
                                                            <div class="todo-list-btn">
<a href="#delete<?php echo $id; ?>" data-toggle="modal" class="btn btn-outline-pink btn-xs">Delete</a>                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
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
                                                ?</strong> </div>
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
             $not_delete_client_query = "DELETE  FROM task WHERE id = $the_client_id";
             $note_delete_query = mysqli_query($connection, $not_delete_client_query);
             header ("Location: couple-dashboard-todolist.php");
             
                            
         }      

   ?>
<?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/. accordion-card -->
                        <?php endif; ?>

                        </div>
                    </div>
                </div>
                <!-- /.accordions -->
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
    <script src="js/jquery.slidereveal.js"></script>

<script type="text/javascript">
    
</script>
</body>
<?php include "include/footer.php"; ?>
</html>



