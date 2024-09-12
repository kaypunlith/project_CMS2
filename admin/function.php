<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php 
include("./logo_delete_post.php");
include("./new_delete_post.php");
   $con=new mysqli("localhost","root","","cms");
   //function Register
   session_start();
   function rigister(){
    global $con;
      if(isset($_POST['btn_register'])){
        $name=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $profile=$_FILES['profile']['name'];
         if(!empty($name) && !empty(($email) && !empty($password) && !empty(($profile)))){
             $password=md5($password);
             $profile =date('YmdHis').'-'.$profile;
             $path    ='./assets/icon/'.$profile;
             move_uploaded_file($_FILES['profile']['tmp_name'],$path);
              $sql="INSERT INTO `tbl_user`(`username`, `email`, `password`, `profile`) 
              VALUES ('$name','$email','$password','$profile')";
              $res=$con->query($sql);
              if($res){
                echo '
                <script>
                    $(document).ready(function(){
                    swal("Rigister success ", "You clicked the button!", "success")
                    });
              </script>
                ';
              }
              
         }else{
            echo '
             <script>
               $(document).ready(function(){
                swal("Error ", "You clicked the button!", "success")
               });
             </script>
            ';
         }

      }
   }

   rigister();
   //function login 
   function Login(){
    global $con;
     if(isset($_POST['btn_login'])){
           $name_email=$_POST['name_email'];
          $password=md5($_POST['password']);
        $sql="SELECT id FROM tbl_user WHERE (`username`='$name_email' OR `email`='$name_email') AND `password`='$password'";
        $res=$con->query($sql);
        $row=mysqli_fetch_assoc($res);
        // echo $row;
         if(!empty($row)){
            $_SESSION['user']=$row['id'];
            header("Location:index.php");
            
         }else{
          header("Location:login.php");
         }
     }
   }
   Login();
   function Logout(){
      if(isset($_POST['acceplogout'])){
        unset($_SESSION['user']);
        header("Location:login.php");
      }
   }
   Logout();
   function Add_logo()
{
  global $con;
  if (isset($_POST['add_logo'])) {
    $showon = $_POST['show_on'];
    $logo = $_FILES['Thambanail']['name'];
    $path = './assets/icon/' . $logo;
    move_uploaded_file($_FILES['Thambanail']['tmp_name'], $path);
    $sql = "INSERT INTO `tbl_logo`(`id`, `thubnail`, `status`) VALUES (null,'$logo','$showon')";
    $res = $con->query($sql);
    if ($res) {
      echo '
                <script>
                    $(document).ready(function(){
                    swal("Logo added success ", "You clicked the button!", "success")
                    });
              </script>
                ';
    }

  }
}
Add_logo();

function viewAll_logo()
{
  global $con;
  $sql = "SELECT * FROM `tbl_logo`";
  $res = $con->query($sql);
  while($row=mysqli_fetch_assoc($res)) {
     ?>
        <tr>
              <td><?php echo $row['id']?></td>
              <td><img src="./assets/icon/<?php echo $row['thubnail']?>" height="60px"/></td>
              <td><?php echo $row['status']?></td>
              <td width="150px">
                  <a href="logo_update_post.php?id=<?php echo $row['id']?>"class="btn btn-primary">Update</a>
                  <button type="button" remove-id="1" onclick="Delete_logo(<?php echo $row['id']?>)" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Remove
                  </button>  
          </tr>
     <?php
  }

}
function Update_Logo(){
  if(isset($_POST['update_logo'])){
    global $con;
    $id = $_GET['id'];
    $showon = $_POST['show_on'];
    $logo = $_FILES['Thambanail']['name'];
    $old_logo=$_POST['old_img'];
    if(!empty($logo)){
      $path = './assets/icon/'.$logo;
      move_uploaded_file($_FILES['Thambanail']['tmp_name'], $path);

    }else{
      $logo=$old_logo;
    }
    $sql = "UPDATE `tbl_logo` SET `thubnail`='$logo',`status`='$showon' WHERE `id`=$id";
    $res = $con->query($sql);
    if($res){
      echo '
              <script>
                  $(document).ready(function(){
                  swal("Logo updated success ", "You clicked the button!", "success")
                  });
            </script>
              ';
    }
}
}
Update_Logo();
function Upload_image($file){
   $image_name=$_FILES[$file]['name'];
   $image_tmp=$_FILES[$file]['tmp_name'];
   $path="./assets/icon/$image_name";
   move_uploaded_file($image_tmp, $path);
  return $image_name;
}
function add_news_post(){
  global $con;
   if(isset($_POST['add_news'])){
      $autherId=$_SESSION['user'];
      $title=$_POST['title'];
      $type=$_POST['type'];
      $category=$_POST['category'];
      $image=Upload_image('image');
      $benner=Upload_image('benner');
      $description=$_POST['description'];
      $date=date("Y-m-d H:i:s");
      $sql="INSERT INTO `tbl_news`(`id`,`auther_id`,`title`, `description`, `benner`, `thumbnail`, `news_type`,`category`,`create_at`) VALUES
       (null,'$autherId','$title','$description','$benner','$image','$type','$category','$date')";
       $res=$con->query($sql);
       if($res){
        echo '
        <script>
            $(document).ready(function(){
            swal("Create news success ", "You clicked the button!", "success")
            });
          </script>
        ';

       }
      // $image=Upload_image($image_file);
    }
}
add_news_post();
function view_news_post(){
  global $con;
    $sql="SELECT * FROM `tbl_news`";
    $res=$con->query($sql);
    while($row=mysqli_fetch_array($res)){
       ?>
       <tr>
     
            <td><?php echo $row[2]?></td>
            <td><?php echo $row[6]?></td>
            <td><?php echo $row[7]?></td>
            <td><img src="./assets/icon/<?php echo $row[5]?>" width="80" height="80" style="object-fit:cover"/></td>
           
            <td><?php echo $row[9]?></td>
            <td width="150px">
                <a href="new_update_post.php?id=<?php echo $row[0]?>"class="btn btn-primary">Update</a>
                <button type="button" remove-id="1" onclick="Delete_new(<?php echo $row[0]?>)" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#delete_new">
                    Remove
                </button>
            </td>
        </tr>
       <?php
    }
}
function Update_new(){
       global $con;
   if(isset($_POST['update_new'])){
          $edit_id=$_POST['edit_id'];
          $title=$_POST['title'];
          $type=$_POST['type'];
          $category=$_POST['category'];
          $thumail=$_FILES['image']['name'];
          $benner=$_FILES['benner']['name'];
          $old_image=$_POST['old_img_thumnail'];
          $old_benner=$_POST['old_img_benner'];
          $description=$_POST['description'];
          if(!empty($thumail)){
            $image_thumnail=Upload_image('image');
          }else{
            $image_thumnail=$old_image;
          }
          if(!empty($benner)){
              $benner=Upload_image('benner');
          }else{
              $benner=$old_benner;
          }
          $sql="UPDATE `tbl_news` SET `title`='$title',`description`='$description',`benner`='$benner',`thumbnail`='$image_thumnail',`news_type`='$type',`category`='$category' WHERE `id`='$edit_id'";
          $res=$con->query($sql);
          if($res){
            echo '
            <script>
                $(document).ready(function(){
                swal("Update news success ", "You clicked the button!", "success")
                });
              </script>
            ';
           

          }
   }
}
Update_new();
function add_socail_news(){
        if(isset($_POST['social_news'])){
          $autherId=$_SESSION['user'];
          $title=$_POST['title'];
          $type=$_POST['type'];
          $category=$_POST['category'];
          $thumail=Upload_image('image');
          $benner=Upload_image('benner');
          $description=$_POST['description'];
          add_all_news($autherId,$title,$description,$benner,$thumail,$type,$category);
        }
}
add_socail_news();
function add_all_news($autherId,$title,$description,$benner,$thumail,$type,$category){
  global $con;
  $sql="INSERT INTO `tbl_news`(`id`,`auther_id`,`title`, `description`, `benner`, `thumbnail`, `news_type`,`category`) VALUES
  (null,'$autherId','$title','$description','$benner','$thumail','$type','$category')";
  $res=$con->query($sql);
  if($res){
   echo '
   <script>
       $(document).ready(function(){
       swal("Create news success ", "You clicked the button!", "success")
       });
     </script>
   ';

  }
}
function Select_Feedback(){
  global $con;
     $sql="SELECT * FROM `tbl_feedback`";
     $res=$con->query($sql);
     while($row=mysqli_fetch_array($res)){
      ?>
         <tr>
              <td><?php echo $row[1]?></td>
              <td><?php echo $row[2]?></td>
              <td><?php echo $row[3]?></td>
              <td><?php echo $row[4]?></td>
              <td><?php echo $row[5]?></td>
              <td><?php echo $row[6]?></td>
              
          </tr>
      <?php
     }

}

?>