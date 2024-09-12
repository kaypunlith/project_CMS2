<!-- @import jquery & sweet alert  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
// @Connection database
$con=new mysqli("localhost","root","","cms");
function view_logo($status){
    global $con;
    $sql="SELECT * FROM `tbl_logo` where `status`='$status'";
    $res=$con->query($sql);
    $row=mysqli_fetch_assoc($res);
    echo $row['thubnail'];
}
function select_new_tyoe($type){
    global $con;
    $sql="SELECT * FROM `tbl_news` where `news_type`='$type'";
    $res=$con->query($sql);
    while($row=mysqli_fetch_array($res)){
       ?>
          <div class="col-4">
                    <figure>
                        <a href="news-detail.php?id=<?php echo $row[0]?>">
                            <div class="thumbnail">
                                <img src="../admin/assets/icon/<?php echo $row[5]?>" alt="">
                            <div class="title">
                                <?php echo $row[2]?>
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>

           
       <?php
    }
}
function Increase_view($post_id){
    global $con;
    $sql="UPDATE `tbl_news` SET `views`=`views`+1 WHERE `id`='$post_id'";
    $res=$con->query($sql);
}
function popular(){
    global $con;
    $sql="SELECT * FROM `tbl_news` ORDER BY `views` DESC LIMIT 1";
    $res=$con->query($sql);
    while($row=mysqli_fetch_array($res)){
       ?>
          <div class="col-8 content-left">
                    <figure>
                        <a href="news-detail.php?id=<?php echo $row[0]?>">
                            <div class="thumbnail">
                                <img src="../admin/assets/icon/<?php echo $row[5]?>" alt="">
                                <div class="title">
                                     <?php echo $row[2]?>
                                </div>
                            </div>
                        </a>
                    </figure>
                </div>
            <?php
            
       }
}
function popular_left(){
    global $con;
    $sql="SELECT * FROM `tbl_news` ORDER BY `views` DESC LIMIT 1,2";
    $res=$con->query($sql);
    while($row=mysqli_fetch_array($res)){
         ?>
            <div class="col-12">
                        <figure>
                            <a href="news-detail.php?id=<?php echo $row[0]?>">
                                <div class="thumbnail">
                                    <img src="../admin/assets/icon/<?php echo $row[5]?>" alt="">
                                <div class="title">
                                  <?php echo $row[2]?>
                                </div>
                                </div>
                            </a>
                        </figure>
                    </div>
         <?php
            
       }
}
function Related_new($post_id,$new_type){
  global $con;
  $sql="SELECT * FROM `tbl_news` WHERE `news_type`='$new_type' AND `ID` NOT IN ('$post_id') ORDER BY id DESC LIMIT 2";
  $res=$con->query($sql);
  while($row=mysqli_fetch_array($res)){
    ?>
         <figure>
        <a href="">
                    <div class="thumbnail">
                        <img src="../admin/assets/icon/<?php echo $row[5]?>" alt="">
                    </div>
                    <div class="detail">
                        <h3 class="title"><?php echo $row[2]?></h3>
                        <div class="date"><?php echo $row[9]?></div>
                        <div class="description">
                        <?php echo $row[3]?>
                    </div>
                </a>
            </figure>
<?php
  }
 
}
function social_news($new_type){
    global $con;
    $sql="SELECT * FROM `tbl_news` WHERE `news_type`='$new_type'";
    $res=$con->query($sql);
    while($row=mysqli_fetch_array($res)){
        ?>
           <div class="col-4">
                    <figure>
                        <a href="news-detail.php?id=<?php echo $row[0]?>">
                            <div class="thumbnail">
                                <img src="../admin/assets/icon/<?php echo $row[5]?>" alt="">
                            <div class="title">
                            <?php echo $row[2]?>    
                            </div>
                            </div>
                        </a>
                    </figure>
                </div>
        <?php
    }

  }
  function Search_result($query){
    global $con;
     $sql="SELECT * FROM `tbl_news` WHERE `title` LIKE '%$query%'";
     $res=$con->query($sql);
     while($row=mysqli_fetch_array($res)){
        ?>

        <div class="col-4 box-search">
                <figure>
                    <a href="news-detail.php?id=<?php echo $row[0]?>">
                        <div class="thumbnail">
                            <img src="../admin/assets/icon/<?php echo $row[5]?>" alt="">
                        </div>
                        <div class="detail">
                            <h3 class="title"><?php echo $row[2]?></h3>
                            <div class="date"><?php echo $row[9]?></div>
                            <div class="description">
                                <?php echo $row[3]?>
                            </div>
                        </div>
                    </a>
                </figure>
            </div>
        <?php
     }
  }
function Seand_message(){
    global $con;
    if(isset($_POST['btn_message'])){
      $username=$_POST['username'];
      $email=$_POST['email'];
      $tellphone=$_POST['telphone'];
      $address=$_POST['address'];
      $message=$_POST['message'];
      $date= date("Y-m-d H:i:s");
      $sql="INSERT INTO `tbl_feedback`(`id`, `name`, `email`, `phone`, `address`, `description`, `create_at`) 
      VALUES (null,'$username','$email','$tellphone','$address','$message','$date')";
      $con->query($sql);
      
      
    }
}
Seand_message();

