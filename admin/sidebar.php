<!DOCTYPE html>
<?php include("./function.php")?>
<?php 
  if(empty($_SESSION['user'])){
     header('Location:login.php');
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- @theme style -->
    <link rel="stylesheet" href="assets/style/theme.css">
    <!-- @Bootstrap -->
    <link rel="stylesheet" href="assets/style/bootstrap.css">
    <!-- @script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/bootstrap.js"></script>

    <!-- @tinyACE -->
    <script src="https://cdn.tiny.cloud/1/5gqcgv8u6c8ejg1eg27ziagpv8d8uricc4gc9rhkbasi2nc4/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
    <main class="admin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-2">
                    <div class="content-left">
                        <div class="wrap-top">
                            <img src="assets/icon/admin-logo.png" alt="">
                            <h5>Jong Deng News</h5>
                        </div>
                        <div class="wrap-center">
                            <?php 
                               $user_id= $_SESSION['user'];
                                $sql="SELECT * FROM `tbl_user` WHERE `id`=$user_id";
                                $res=$con->query($sql);
                                $row=mysqli_fetch_array($res);
                                
                            ?>
                            <img src="./assets/icon/<?php echo $row[4]?>" width="70" height="70" style="object-fit:cover" alt="">
                            <h6>Welcome Admin <?php echo $row[1]?> </h6>
                        </div>
                        <div class="wrap-bottom">
                            <ul>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>MAIN MENU</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="view-post.php">View Post</a>
                                            <a href="add-post.php">Add New</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>LOGO</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="logo_veiw_post.php">View Logo</a>
                                            <a href="logo_add_post.php">Add Logo</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>Social News</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="social_view_psot.php">View news</a>
                                            <a href="social_add_post.php">Add news</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="view_feedback.php">
                                        <span>Feedback</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                   
                                </li>
                                <li class="parent">
                                    <a class="parent" href="javascript:void(0)">
                                        <span>News</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                    <ul class="child">
                                        <li>
                                            <a href="news_view_post.php">View News</a>
                                            <a href="news_add_post.php">Add news</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a class="parent" href="logout.php">
                                        <span>LOGOUT</span>
                                        <img src="assets/icon/arrow.png" alt="">
                                    </a>
                                   
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>