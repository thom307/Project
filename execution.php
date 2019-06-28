<?php 
    include("dbconfig.php");
?>
<?php
    if(isset($_GET["yesdelete"]))
    {

         $del_id=$_GET["yesdelete"];
         // verwijder de notification
         $query = "delete from notification where noti_id=$del_id LIMIT 1";
         $result = mysqli_query($con,$query);
        
         if($result)
         {       echo '<script>alert("delete is gelukt");</script>';
                header("location:notification.php");

         }

    }

?>