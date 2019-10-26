<?php

//fetch_images.php

include 'include/controller.php';
if (isset($_SESSION['id'])) {
      $login_id = $_SESSION['id'];
      }

$query = "SELECT * FROM images WHERE venderID =$login_id";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .='
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
    <div class="gallery-upload-img">
   <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" class="img-fluid" />
   <span class="delete-gallery-img"> 
   <a href="vendor-dashboard-add-listing.php?p_id='.$row["id"].'" class="listitem" data-id="'.$row["id"].'"><i class="fa  fa-times-circle"></i></a>
   </span>
  </div>
  </div>
  ';
 }
}

$output .= '</div>';

echo $output;


?>
   <!-- <a id="listc" class="listitem" data-id="<?= $id; ?>" href="#"> <?= $id; ?></a> -->
<!-- <button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button> -->

<!-- <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
        <div class="gallery-upload-img">
            <img src="images/gallery-thumb.html" alt="" class="img-fluid">
            <span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
        </div>
    </div>
</div> -->