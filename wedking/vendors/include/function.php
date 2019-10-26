<?php 


function confirmQuery($result){

    global $connection;
    if(!$result){
            die("QUERY FAILED .". mysqli_error($connection) );
}

}


// helper functions

// function redirect($location){
//     return header("Location : $location");
// }


function query($sql){
    global $connection;
    return mysqli_query($connection, $sql);
}


function confirm($result){
    global $connection;
    if(!$result) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}


function escape_string($string){
    global $connection;
    return mysqli_real_escape_string($connection, $string);
}

function fetch_array($result){
    return mysqli_fetch_array($result);
}






function add_vender(){
    global $connection;

if(isset($_POST['add_vender']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        // $clientID = $row['clientID'];
        $venderName = $_POST['venderName'];
        $venderPhone = $_POST['venderPhone'];
        $venderEmail = $_POST['venderEmail'];
        $venderAddress = $_POST['venderAddress'];

        $vender_image1 = $_FILES['image1']['name'];
        $vender_image1_tmp = $_FILES['image1']['tmp_name'];

        $vender_image2 = $_FILES['image2']['name'];
        $vender_image2_tmp = $_FILES['image2']['tmp_name'];

        $vender_image3 = $_FILES['image3']['name'];
        $vender_image3_tmp = $_FILES['image3']['tmp_name'];

        $vender_image4 = $_FILES['image4']['name'];
        $vender_image4_tmp = $_FILES['image4']['tmp_name'];
        
        $venderCountry = $_POST['venderCountry'];
        $venderState = $_POST['venderState'];
        $venderCity = $_POST['venderCity'];
        $description = $_POST['description'];
        $vendervideo = $_POST['video'];

        $add_client_query = "INSERT INTO venders (venderName, venderPhone, venderEmail, venderAddress, venderCountry, venderState, venderCity , description)";
        
        $add_client_query .= "VALUES ('{$venderName}', '{$venderPhone}', '{$venderEmail}',  '{$venderAddress}', '{$venderCountry}', '{$venderState}', '{$venderCity}' ,'{$description}')";
        
        
        $clients_result = mysqli_query($connection, $add_client_query);

        $id_guests = mysqli_insert_id($connection);

        move_uploaded_file($vender_image1_tmp, "./images/$vender_image1" );
        move_uploaded_file($vender_image2_tmp, "./images/$vender_image2" );
        move_uploaded_file($vender_image3_tmp, "./images/$vender_image3" );
        move_uploaded_file($vender_image4_tmp, "./images/$vender_image4" );

        $add_images = "INSERT INTO images (venderID, image1, image2, image3, image4, video)";

        $add_images .= "VALUES ('{$id_guests}', '{$vender_image1}', '{$vender_image2}',  '{$vender_image3}', '{$vender_image4}' , '{$vendervideo}')";

        $upload_images = mysqli_query($connection, $add_images);

        
        confirmQuery($clients_result);
        confirmQuery($upload_images);
        
        }
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




        // function login_user(){

        //     if(isset($_POST['login'])){

        //         $username = escape_string($_POST['username']);
        //         $password = escape_string($_POST['password']);

        //         $query = query("SELECT * FROM users WHERE username= '{$username}' AND password='{$password}'");

        //         confirmQuery($query);
        //         if (mysqli_num_rows == 0){
        //             redirect("login.php");
        //         }else{
        //             redirect("dashboard");
        //         }
        //     }

        // }



function update_vender(){
    global $connection;

if(isset($_POST['update']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        // $clientID = $row['clientID'];
        $venderName = $_POST['venderName'];
        $venderPhone = $_POST['venderPhone'];
        $venderEmail = $_POST['venderEmail'];
        $venderAddress = $_POST['venderAddress'];

        $vender_image1 = $_FILES['image1']['name'];
        $vender_image1_tmp = $_FILES['image1']['tmp_name'];

        $vender_image2 = $_FILES['image2']['name'];
        $vender_image2_tmp = $_FILES['image2']['tmp_name'];

        $vender_image3 = $_FILES['image3']['name'];
        $vender_image3_tmp = $_FILES['image3']['tmp_name'];

        $vender_image4 = $_FILES['image4']['name'];
        $vender_image4_tmp = $_FILES['image4']['tmp_name'];
        
        $venderCountry = $_POST['venderCountry'];
        $venderState = $_POST['venderState'];
        $venderCity = $_POST['venderCity'];
        $description = $_POST['description'];
        $vendervideo = $_POST['video'];

        $add_client_query = "UPDATE venders SET WHERE id = {$the_vender_id} (venderName, venderPhone, venderEmail, venderAddress, venderCountry, venderState, venderCity , description)";
        
        $add_client_query .= "VALUES ('{$venderName}', '{$venderPhone}', '{$venderEmail}',  '{$venderAddress}', '{$venderCountry}', '{$venderState}', '{$venderCity}' ,'{$description}')";
        
        
        $clients_result = mysqli_query($connection, $add_client_query);

        $id_guests = mysqli_insert_id($connection);

        move_uploaded_file($vender_image1_tmp, "./images/$vender_image1" );
        move_uploaded_file($vender_image2_tmp, "./images/$vender_image2" );
        move_uploaded_file($vender_image3_tmp, "./images/$vender_image3" );
        move_uploaded_file($vender_image4_tmp, "./images/$vender_image4" );

        $add_images = "UPDATE images SET WHERE id = {$the_vender_id} (venderID, image1, image2, image3, image4, video)";

        $add_images .= "VALUES ('{$id_guests}', '{$vender_image1}', '{$vender_image2}',  '{$vender_image3}', '{$vender_image4}' , '{$vendervideo}')";

        $upload_images = mysqli_query($connection, $add_images);

        
        confirmQuery($clients_result);
        confirmQuery($upload_images);
        
        }
        }


        // update venders data

     if(isset($_POST['update_vender_details'])){

         
         $venderName = $_POST['venderName'];
         $venderPhone = $_POST['venderPhone'];
         $venderEmail = $_POST['venderEmail'];
         $venderAddress = $_POST['venderAddress'];
         // // $post_image = $_FILES['image']['name'] ;
         // // $post_image_temp = $_FILES['image']['tmp_name'] ;
         $venderCountry = $_POST['venderCountry'];
         $venderState = $_POST['venderState'];  
         $venderCity = $_POST['venderCity']; 
         $description = $_POST['description']; 
         $vendervideo = $_POST['video']; 

         $vender_image1 = $_FILES['image1']['name'];
        $vender_image1_tmp = $_FILES['image1']['tmp_name'];

        $vender_image2 = $_FILES['image2']['name'];
        $vender_image2_tmp = $_FILES['image2']['tmp_name'];

        $vender_image3 = $_FILES['image3']['name'];
        $vender_image3_tmp = $_FILES['image3']['tmp_name'];

        $vender_image4 = $_FILES['image4']['name'];
        $vender_image4_tmp = $_FILES['image4']['tmp_name'];

         $lastupdatedOn = $row['lastupdatedOn']; 


      
         
         $update_vender_query = "UPDATE venders SET ";
         $update_vender_query .= "venderName = '{$venderName}', "; 
         $update_vender_query .= "venderPhone = '{$venderPhone}', ";
         // $query .= "client_id = '{$client_id}', "; 
         // $query .= "post_date = now(), "; 
         $update_vender_query .= "venderEmail = '{$venderEmail}', "; 
         $update_vender_query .= "venderAddress = '{$venderAddress}', "; 
         $update_vender_query .= "venderCountry = '{$venderCountry}', "; 
         $update_vender_query .= "venderState = '{$venderState}', "; 
         $update_vender_query .= "venderCity = '{$venderCity}', "; 
         $update_vender_query .= "description = '{$description}', "; 
         $update_vender_query .= "video = '{$vendervideo}', "; 
         $update_vender_query .= "lastupdatedOn = now() "; 
         // $query .= "post_content = '{$post_content}', "; 
         // $query .= "post_image = '{$post_image}' "; 
         $update_vender_query .= "WHERE id = {$the_vender_id} "; 
         // echo $query ;
         $update_vender_data = mysqli_query($connection, $update_vender_query);
         
         confirmQuery($update_vender_data);

        move_uploaded_file($vender_image1_tmp, "./images/$vender_image1");
        move_uploaded_file($vender_image2_tmp, "./images/$vender_image2" );
        move_uploaded_file($vender_image3_tmp, "./images/$vender_image3" );
        move_uploaded_file($vender_image4_tmp, "./images/$vender_image4" );

        if(empty($post_image)){
             $query = "SELECT * FROM images WHERE venderID={$the_vender_id} ";
        $select_image = mysqli_query($connection, $query); 
            
      while($row = mysqli_fetch_assoc($select_image)){
          $vender_image1 = $row['image1'];
          $vender_image2 = $row['image2'];
          $vender_image3 = $row['image3'];
          $vender_image4 = $row['image4'];
      }
         }



         $update_images = "UPDATE images SET ";
         $update_images .= "image1 = '{$vender_image1}', "; 
         $update_images .= "image2 = '{$vender_image2}', ";
         // $query .= "client_id = '{$client_id}', "; 
         // $query .= "post_date = now(), "; 
         $update_images .= "image3 = '{$vender_image3}', "; 
         $update_images .= "image4 = '{$vender_image4}', "; 
         $update_images .= "video = '{$vendervideo}' "; 
         // $query .= "post_content = '{$post_content}', "; 
         // $query .= "post_image = '{$post_image}' "; 
         $update_images .= "WHERE venderID = {$the_vender_id} "; 

        $upload_images = mysqli_query($connection, $update_images);

        confirmQuery($upload_images);

    }
 

 // fetch all 
  function add_new_vender(){
    global $connection;
     if(isset($_POST['add_new_vender']))
       
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        // $clientID = $row['clientID'];
        $tittleName = $_POST['tittleName'];
        $category = $_POST['category'];
        $seatCapacity = $_POST['seatCapacity'];
        $price = $_POST['price'];

        $img1 = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
        $name1 = rand(1,5000).".".$img1;
        move_uploaded_file($_FILES["image1"]["tmp_name"],"./images/$name1");
        
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
     if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
      }


        $add_client_query = "INSERT INTO venders (image1, venderID, tittleName, category, seatCapacity, price, address, city, postcode , state, country, descriptions, latitude, longitude, amenities, video, facebook, twitter, instagram, youtube)";
        
        $add_client_query .= "VALUES ( '$name1','$login_id', '{$tittleName}', '{$category}', '{$seatCapacity}',  '{$price}', '{$address}', '{$city}', '{$postcode}' ,'{$state}' ,'{$country}','{$descriptions}','{$latitude}','{$longitude}','{$amenities}','{$video}','{$facebook}','{$twitter}','{$instagram}','{$youtube}' )";
        
        
        $clients_result = mysqli_query($connection, $add_client_query);

        $id_guests = mysqli_insert_id($connection);

        // move_uploaded_file($vender_image1_tmp, "./images/$vender_image1" );
        // move_uploaded_file($vender_image2_tmp, "./images/$vender_image2" );
        // move_uploaded_file($vender_image3_tmp, "./images/$vender_image3" );
        // move_uploaded_file($vender_image4_tmp, "./images/$vender_image4" );

        // $add_images = "INSERT INTO images (venderID, image1, image2, image3, image4)";

        // $add_images .= "VALUES ('{$id_guests}', '{$vender_image1}', '{$vender_image2}',  '{$vender_image3}', '{$vender_image4}')";

        // $upload_images = mysqli_query($connection, $add_images);

        
        confirmQuery($clients_result);
        // confirmQuery($upload_images);

        if($upload_images || $clients_result){
            header('Location: vendor-dashboard-listing.php?success=1');
        }
        
        }
  }


 function profile(){

    global $connection;
     $login_id = "";
      if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
      }
      
    $view_vender_query = "SELECT * FROM users WHERE id= $login_id";
    $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
    while($row = mysqli_fetch_assoc($select_vender_by_id)){
        // echo"<pre>"; print_r($_SESSION['id']); echo"</pre>"; 
          $id = $row['id'];
          $nm = $row['name'];
          $eml = $row['email'];
          $ph = $row['phone'];
          $descptn = $row['description'];
          $fb = $row['facebook'];
          $twr = $row['twitter'];
          $inst = $row['instagram'];
          $yutb = $row['youtube'];
}

    if(isset($_POST['update']))
    {
        // echo"<pre>"; print_r($row); echo"</pre>"; 
        $nm = $_POST['name'];
        $eml = $_POST['email'];
        $ph = $_POST['phone'];
        $descptn = $_POST['description'];

        $fb = $_POST['facebook'];
        $twr = $_POST['twitter'];
        $inst = $_POST['instagram'];
        $yutb = $_POST['youtube'];

        $add_client_query = "UPDATE users SET ";
        $add_client_query .="name = '{$nm}',";       
        $add_client_query .="email = '{$eml}',";       
        $add_client_query .="phone = '{$ph}',";       
        $add_client_query .="description = '{$descptn}',";       
        $add_client_query .="facebook = '{$fb}',";       
        $add_client_query .="twitter = '{$twr}',";       
        $add_client_query .="instagram = '{$inst}',";       
        $add_client_query .="youtube = '{$yutb}'";       
        $add_client_query .= "WHERE id = $login_id ";      
        
        $clients_result = mysqli_query($connection, $add_client_query);

        confirmQuery($clients_result);

        header('Location: profile.php?success=1');

        }
 }


          function change_vender_password(){

              global $connection;
               $login_id = "";
              if (isset($_SESSION['id'])) {
              $login_id = $_SESSION['id'];
              }

              $view_vender_query = "SELECT * FROM users WHERE id= $login_id";
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
                  $sql="UPDATE users SET password='$newpassword' where  id='$login_id'";

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

// hour ago function
            function time_elapsed_string($datetime, $full = false) {
            global $connection;
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);

            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;

            $string = array(
                'y' => 'year',
                'm' => 'month',
                'w' => 'week',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'minute',
                's' => 'second',
            );
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }

            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }


        function average_rating(){
            global $connection;

            $query = "SELECT * FROM rating";
            $sql = mysqli_query($connection, $query);
            $totalrow = mysqli_num_rows($sql);

            // echo $totalrow;
            // echo "<br>";

            $query = "SELECT SUM(overall_rating) AS overall_rating FROM rating";
            $result = mysqli_query($connection,$query); 
            $row = mysqli_fetch_assoc($result); 
            $sum = $row['overall_rating'];
            // echo $sum;

            $total = $sum/$totalrow;
            // echo "<br/>";
            // echo "total Rating is : ".$total;

        }


// user avatar image fetch in header 
        function avatar(){
            global $connection;
                            $login_id = "";
                  if (isset($_SESSION['id'])) {
                  $login_id = $_SESSION['id'];
                  }
                  
                $view_vender_query = "SELECT * FROM users WHERE id= $login_id";
                $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
                while($row = mysqli_fetch_assoc($select_vender_by_id)){
                      $image1 = $row['image1'];
}

            echo '<span class="user-icon">  <img src="./images/'.$image1.'" alt="" class="rounded-circle mb10"></span>';

        }

// user avatar image fetch in navigation bar
               function avatar2(){
            global $connection;
                            $login_id = "";
                  if (isset($_SESSION['id'])) {
                  $login_id = $_SESSION['id'];
                  }
                  
                $view_vender_query = "SELECT * FROM users WHERE id= $login_id";
                $select_vender_by_id = mysqli_query($connection, $view_vender_query);  
                while($row = mysqli_fetch_assoc($select_vender_by_id)){
                      $image1 = $row['image1'];
}

            echo '<img src="./images/'.$image1.'" alt="" class="rounded-circle"></div>';
        }


 ?>


