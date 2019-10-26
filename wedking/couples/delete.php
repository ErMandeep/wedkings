<?php session_start(); ?>
<?php include_once "../config/db.php"; ?>
<?php include_once "include/function.php"; ?>


<?php 
$login_id = "";
if (isset($_SESSION['coupleID'])) {
$login_id = $_SESSION['coupleID'];
}
 ?>




<?php 

if(isset($_GET['id']) && $_GET['cid'] && $_GET['image'] == true)
		{
			$id = $_GET['id'];
			$login_id = $_GET['cid'];
			$image = $_GET['image'];
			
			$query = query("DELETE FROM couple_images WHERE coupleID = $login_id AND image= '$image' AND id=$id");
			if($query){
				unlink($_GET['image']);
				header('Location: couple-dashboard-realwedding.php');
			}
		}


 ?>




