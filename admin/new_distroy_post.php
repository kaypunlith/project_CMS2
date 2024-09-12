<?php 
   $con = new mysqli("localhost", "root", "", "cms");
   $del_id=$_POST['new_remove'];
   $sql="DELETE FROM `tbl_news` WHERE `id`=$del_id";
   $res=$con->query($sql);
   if($res){
    header("Location:news_view_post.php");
   }
?>