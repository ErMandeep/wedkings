 <?php session_start(); ?>
 <?php include "../config/db.php"; ?>
<?php 
 
               $login_id = "";
              if (isset($_SESSION['coupleID'])) {
              $login_id = $_SESSION['coupleID'];
              }

 ?>
 <?php  
/// add venue
      if($_POST["action"] =="Venue")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'Venue')";  
            
          mysqli_query($connection, $procedure);  
               
      }  


/// add Ceremony
      if($_POST["action"] =="Ceremony")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'Ceremony')";  
            
          mysqli_query($connection, $procedure);  
               
      }  



/// add makeup
      if($_POST["action"] =="makeup")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'makeup')";  
            
          mysqli_query($connection, $procedure);  
               
      }  

/// add Flowers
      if($_POST["action"] =="Flowers")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'Flowers')";  
            
          mysqli_query($connection, $procedure);  
               
      }  

      /// add Cake
      if($_POST["action"] =="Cake")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'Cake')";  
            
          mysqli_query($connection, $procedure);  
               
      }  


       /// add Photography
      if($_POST["action"] =="Photography")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'Photography')";  
            
          mysqli_query($connection, $procedure);  
               
      }       



       /// add Printed
      if($_POST["action"] =="Printed")  
      {  
           $event=$_POST['event'];
           $estimate=$_POST['estimate'];
           $actual=$_POST['actual'];
           $paid=$_POST['paid'];
           $pending=$_POST['pending'];
           $procedure = "INSERT INTO budget(coupleID, event, estimate, actual, paid, pending , type) VALUES ('$login_id', '$event', '$estimate', '$actual', '$paid', '$pending', 'Printed')";  
            
          mysqli_query($connection, $procedure);  
               
      }   






     // Delete budget querys

         if($_POST["action"] =="remove")  
      {  
          $id = $_POST['id'];
          // echo '$music_number';
          $qry = "DELETE FROM budget WHERE id ='$id'";
          $result=mysqli_query($connection ,$qry);
               
      }    




  
 ?>  