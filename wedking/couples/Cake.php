 <?php session_start(); ?>
  <?php include "../config/db.php"; ?>

   <?php  
 //select.php  

   $total_estimate = 0;
   $total_actual = 0;
   $total_paid = 0;
   $total_pending = 0;
 $output = '';  
 if($_POST["action"] ="select")  
 { 

      $login_id = "";
              if (isset($_SESSION['coupleID'])) {
              $login_id = $_SESSION['coupleID'];
              }
                $query = "SELECT * FROM budget WHERE type ='Cake' AND coupleID = '$login_id'"; 

                $result = mysqli_query($connection, $query);  
                $output .= '  
                     <table class="table">   
                ';  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                          $output .= '  
                                    <tr>
                                        <td>
                                            <input name="" type="text" value="'.$row["event"].'" placeholder="Location Fees" class="form-control form-control-sm">
                                        </td>
                                        <td>
                                            <input name="" type="text" value="'.$row["estimate"].'" placeholder="100" class="form-control form-control-sm venue-cost">
                                        </td>
                                        <td>
                                            <input name="" type="text" value="'.$row["actual"].'" placeholder="0" class="form-control form-control-sm">
                                        </td>
                                        <td>
                                            <input name="" type="text" value="'.$row["paid"].'" placeholder="0" class="form-control form-control-sm">
                                        </td>
                                        <td>
                                            <input name="DynamicTextBox" type="text" value="'.$row["pending"].'" placeholder="0" class="form-control form-control-sm">
                                        </td>
                                        <td>
                                            
                                            <button name="remove"  class="btn btn-outline-pink btn-xs remove" id="'. $row["id"].'">Remove</button>
                                            </td>
                                    </tr>                               
                          ';  
    $total_estimate = $total_estimate + ($row["estimate"]);
    $total_actual = $total_actual + ($row["actual"]);
    $total_paid = $total_paid + ($row["paid"]);
    $total_pending = $total_pending + ($row["pending"]);
   
                     }  

                     $output .= "
                                <tfoot>
                                        <tr>
                                            <td> Total Cost of Flowers </td>
                                            <td class='estimate-total'> Estimate Total <span class='total-amount'> Rs.".number_format($total_estimate, 2)."  </span></td>
                                            <td class='actual-total'> Actual Total <span class='total-amount'>Rs.".number_format($total_actual, 2)."   </span></td>
                                            <td class='paid-total'> Paid Total <span class='total-amount'>Rs.".number_format($total_paid, 2)." </span></td>
                                            <td class='pending-total'> Pending Total <span class='total-amount'>Rs.".number_format($total_pending, 2)." </span></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
  ";
                }  
                else  
                {  
                     $output .= '  
                          <tr>  
                               <td colspan="4">Data not Found</td>  
                          </tr>  
                     ';  
                }  
                $output .= '</table>';  
                echo $output;  
                

 }  
 ?>                  