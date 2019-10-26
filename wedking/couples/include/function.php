<?php 

function confirmQuery($result){

    global $connection;
    if(!$result){
            die("QUERY FAILED .". mysqli_error($connection) );
}

}


function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}


// create new task 

	function createtask(){
    global $connection;

	if(isset($_POST['createtask']))
    {

        $tasktitle = $_POST['tasktitle'];
        $taskdate = $_POST['taskdate'];
        $time=strtotime($taskdate);
		$month=date("F",$time);
		$year=date("Y",$time);

        $add_client_query = "INSERT INTO task (tasktitle, taskdate, status, month)";
        
        $add_client_query .= "VALUES ('{$tasktitle}', '{$taskdate}', 'due' , '{$month}')";

        query($add_client_query);

        $id_guests = mysqli_insert_id($connection);

        }
	}

	// count rows
	function countrow(){
    global $connection;

        $query = "SELECT * FROM task";
        $select_image = mysqli_query($connection, $query); 
        $rowcount=mysqli_num_rows($select_image);  
	}


    function register(){
    global $connection;

if(isset($_POST['register']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        // $clientID = $row['clientID'];
        $fullName = mysqli_real_escape_string($connection,$_POST['fullName']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,md5($_POST['password']));
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        $phone = mysqli_real_escape_string($connection,$_POST['phone']);
        $vendor_purpose = mysqli_real_escape_string($connection,$_POST['vendor_purpose']);
        $user_activation_code = md5(rand());
        // $confirm_password = $_POST['confirm_password'];

        // $options = ['cost' => 12, ];

        // $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);


        $query = "SELECT * FROM users where email = '". $_POST["email"] . "' OR username = '". $_POST["username"] . "'  OR phone = '". $_POST["phone"] . "' ";

        $result = mysqli_query($connection, $query);

        if($result-> num_rows == 0 )      
         {
        // Add new user to database
        $register_query = "INSERT INTO users (fullName, email, password, username, vendor_purpose, phone, status)";
        
        $register_query .= "VALUES ('{$fullName}', '{$email}', '{$password}','{$username}', '{$vendor_purpose}', '{$phone}', 'not active')";
        
        
        $result = mysqli_query($connection, $register_query);
        if($result){
          echo "<b>"."Your Acccount created successfully"."</b>"."<br>";
        }

        confirmQuery($result);

        $id_guests = mysqli_insert_id($connection);


         if(isset($result))
  {


        $actual_link = "http://localhost/vendors/"."activate.php?id=" . $id_guests;
        $toEmail = $_POST["email"];
        $subject = "User Registration Activation Email";
        $content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";



   $base_url = "http://localhost/tutorial/email-address-verification-script-using-php/";
   $mail_body = '<p>test</p>';
   require 'class/class.phpmailer.php';
   $mail = new PHPMailer;
   $mail->IsSMTP();        //Sets Mailer to send message using SMTP
   $mail->Host = 'mail.wedkings.in';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
   $mail->Port = '587';        //Sets the default SMTP server port
   $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
   $mail->Username = 'admin@wedkings.in';     //Sets SMTP username
   $mail->Password = '45rude88mud';     //Sets SMTP password
   $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
   $mail->setFrom('admin@wedkings.in', 'Wedkings ');  //Sets the From email address for the message
   $mail->FromName = 'Wedkings';     //Sets the From name of the message
   $mail->addAddress('msm8829@gmail.com', 'Joe User');   //Adds a "To" address   
   $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
   $mail->IsHTML(true);       //Sets message type to HTML    
   $mail->Subject = $subject;   //Sets the Subject of the message
   $mail->Body = $content;       //An HTML or plain text message body
   if($mail->Send())        //Send an Email. Return true on success or false on error
   {
    // $message = '<label class="text-success">Register Done, Please check your mail.</label>';
    echo "<b>"."Register Done, Please check your mail."."</b>"."<br>";
   }
  }





        } else {
  
          while($row =mysqli_fetch_assoc($result)){
          $usernamedb = $row['username'];
          $emaildb = $row['email'];
          $phonedb = $row['phone'];
        }

         if($username == $usernamedb){
          echo "<b>"."This Username already in use."."</b>"."<br>";
         }
         if ($email == $emaildb) {
           echo "<b>"."This Email already in use."."</b>"."<br>";
         }
        if ($phone == $phonedb) {
          echo "<b>"."This Mobile Number already in use."."</b>"."<br>";
        }


               
        }


        
        
        }
        }




          function change_couples_password(){

              global $connection;
               $login_id = "";
              if (isset($_SESSION['coupleID'])) {
              $login_id = $_SESSION['coupleID'];
              }

              $view_vender_query = "SELECT * FROM couples WHERE coupleID= $login_id";
              $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
              while($row = mysqli_fetch_assoc($select_vender_by_id)){
              $oldpassworddb = $row['password'];
              }

                  if(isset($_POST['update_psss'])){


                  $oldpassword = mysqli_real_escape_string($connection,md5($_POST["oldpassword"]));
                  $newpassword = mysqli_real_escape_string($connection,md5($_POST["newpassword"]));
                  $confirmnewpassword = mysqli_real_escape_string($connection,md5($_POST["confirmnewpassword"]));


                  if ($oldpassword==$oldpassworddb){


                  if (strlen($_POST["newpassword"])>25||strlen($_POST["confirmnewpassword"])<6)   
                  {
                  echo  "<div class='alert alert-warning alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-warning'></i> Alert!</h4>
                Password must be betwwen 6 & 25
              </div>";


                  }else{


                  if($newpassword==$confirmnewpassword){
                  $sql="UPDATE couples SET password='$newpassword' where  coupleID='$login_id'";

                 $result = mysqli_query($connection, $sql);

                  if($result){

                    header('Location: logout.php?success=1');

                  }

         } else
                  {

                 echo  "<div class='alert alert-warning alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-warning'></i> Alert!</h4>
                Passwords do not match
              </div>";

                 }
       }
     }else{
       

       echo  "<div class='alert alert-warning alert-dismissible'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-warning'></i> Alert!</h4>
                old password not matched
              </div>";
     }
              }
          }






// user avatar image fetch in header 
        function avatar(){
            global $connection;
                            $login_id = "";
                  if (isset($_SESSION['coupleID'])) {
                  $login_id = $_SESSION['coupleID'];
                  }
                  
                $view_vender_query = "SELECT * FROM couples WHERE coupleID= $login_id";
                $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
                while($row = mysqli_fetch_assoc($select_vender_by_id)){
                      $image1 = $row['image'];
}
    if($image1 != " "){
            echo '<span class="user-icon">  <img src="./images/'.$image1.'" alt="" class="rounded-circle mb10"></span>';
}
        }



        // images/dashboard-profile-couple.jpg

// user avatar image fetch in navigation bar
               function avatar2(){
            global $connection;
                            $login_id = "";
                  if (isset($_SESSION['coupleID'])) {
                  $login_id = $_SESSION['coupleID'];
                  }
                  
                $view_vender_query = "SELECT * FROM couples WHERE coupleID= $login_id";
                $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
                while($row = mysqli_fetch_assoc($select_vender_by_id)){
                      $image1 = $row['image'];
}

            echo '<img src="./images/'.$image1.'" alt="" class="rounded-circle"></div>';
        }


// left sidebar avatar

               function avatar3(){
            global $connection;
                            $login_id = "";
                  if (isset($_SESSION['coupleID'])) {
                  $login_id = $_SESSION['coupleID'];
                  $name = $_SESSION['coupleName'];

                  }
                  
                $view_vender_query = "SELECT * FROM couples WHERE coupleID= $login_id";
                $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
                while($row = mysqli_fetch_assoc($select_vender_by_id)){
                      $image1 = $row['image'];
}

           echo '<div class="vendor-user-profile">
                            <div class="vendor-profile-img">
                                <img src="./images/'.$image1.'" alt="" class="rounded-circle"></div>
                            <h3 class="vendor-profile-name"> '.$name.' </h3>
                            <a href="couple-dashboard-profile.php" class="edit-link">edit profile</a>
                        </div>';
        }



// register couples

        function couple_register(){
    global $connection;

if(isset($_POST['register_couple']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        // $clientID = $row['clientID'];
        $coupleName = mysqli_real_escape_string($connection,$_POST['coupleName']);
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $password = mysqli_real_escape_string($connection,md5($_POST['password']));
        $username = mysqli_real_escape_string($connection,$_POST['username']);
        // $phone = mysqli_real_escape_string($connection,$_POST['phone']);
        $wedding_date = mysqli_real_escape_string($connection,$_POST['wedding_date']);
        $user_activation_code = md5(rand());
        // $confirm_password = $_POST['confirm_password'];

        // $options = ['cost' => 12, ];

        // $hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);


        $query = "SELECT * FROM couples where email = '". $_POST["email"] . "' OR username = '". $_POST["username"] . "'  ";

        $result = mysqli_query($connection, $query);

        if($result-> num_rows == 0 )      
         {
        // Add new user to database
        $register_query = "INSERT INTO couples (username, coupleName, email, password, wedding_date)";
        
        $register_query .= "VALUES ('{$username}','{$coupleName}', '{$email}', '{$password}', '{$wedding_date}')";
        
        
        $result = mysqli_query($connection, $register_query);



        if($result){
          echo "<b>"."Your Acccount created successfully"."</b>"."<br>";
        }

        confirmQuery($result);

        $id_guests = mysqli_insert_id($connection);

        $register_query2 = query("INSERT INTO wedding_info (coupleID) VALUES ($id_guests)");


         if(isset($result))
  {


        $actual_link = "http://localhost/vendors/"."activate.php?id=" . $id_guests;
        $toEmail = $_POST["email"];
        $subject = "User Registration Activation Email";
        $content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";



   $base_url = "http://localhost/tutorial/email-address-verification-script-using-php/";
   $mail_body = '<p>test</p>';
   require 'class/class.phpmailer.php';
   $mail = new PHPMailer;
   $mail->IsSMTP();        //Sets Mailer to send message using SMTP
   $mail->Host = 'mail.wedkings.in';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
   $mail->Port = '587';        //Sets the default SMTP server port
   $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
   $mail->Username = 'admin@wedkings.in';     //Sets SMTP username
   $mail->Password = '45rude88mud';     //Sets SMTP password
   $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
   $mail->setFrom('admin@wedkings.in', 'Wedkings ');  //Sets the From email address for the message
   $mail->FromName = 'Wedkings';     //Sets the From name of the message
   $mail->addAddress('msm8829@gmail.com', 'Joe User');   //Adds a "To" address   
   $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
   $mail->IsHTML(true);       //Sets message type to HTML    
   $mail->Subject = $subject;   //Sets the Subject of the message
   $mail->Body = $content;       //An HTML or plain text message body
   if($mail->Send())        //Send an Email. Return true on success or false on error
   {
    // $message = '<label class="text-success">Register Done, Please check your mail.</label>';
    echo "<b>"."Register Done, Please check your mail."."</b>"."<br>";
   }
  }





        } else {
  
          while($row =mysqli_fetch_assoc($result)){
          $usernamedb = $row['username'];
          $emaildb = $row['email'];
          // $phonedb = $row['phone'];  
        }

         if($username == $usernamedb){
          echo "<b>"."This Username already in use."."</b>"."<br>";
         }
         if ($email == $emaildb) {
           echo "<b>"."This Email already in use."."</b>"."<br>";
         }
        // if ($phone == $phonedb) {
        //   echo "<b>"."This Mobile Number already in use."."</b>"."<br>";
        // }


               
        }


        
        
        }
        }



 ?>