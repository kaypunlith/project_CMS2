<?php 
   $con = new mysqli("localhost", "root", "", "cms");
   $del_id=$_POST['remove_id'];
   $sql="DELETE FROM `tbl_logo` WHERE `id`=$del_id";
   $res=$con->query($sql);
   if($res){
    header("Location:logo_veiw_post.php");
   }
?>