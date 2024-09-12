<?php include('header.php'); ?>
<?php 
$id=$_GET['id'];
$sql="SELECT * FROM `tbl_news` where `id`='$id'";
$res=$con->query($sql);
$row=mysqli_fetch_array( $res);
Increase_view($id);


?>
<main class="news-detail">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="main-news">
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
                    </div>
                </div>
                <div class="col-4">
                    <div class="relate-news">
                        <h3 class="main-title">Related News</h3>
                        <?php Related_new($row[0],$row[6])?>
                     
                        <!-- <figure>
                            <a href="">
                                <div class="thumbnail">
                                    <img src="https://via.placeholder.com/350x200" alt="">
                                </div>
                                <div class="detail">
                                    <h3 class="title">Kloppថា​ Liverpool ត្រូវ​ធ្វើ​បែប​នេះ​ ក្រោយ​អស់​ពី​ Mane</h3>
                                    <div class="date">17/July/2022</div>
                                    <div class="description">
                                        លោក​ Jorgen Klopp អ្នកចាត់ការ​ក្លឹប​ Liverpool បាន​និយាយ​នៅ​ក្នុង​ថ្ងៃ​នេះ​ថា​ បន្ទាប់​ពី​ខ្សែ​ប្រយុទ្ធ​ Sadio Mane ចាកចេញ​ទៅ​កាន់​ Bayern Munich ក្រុម​របស់​លោក​ត្រូវ​តែ​ខិត​ខំ​សហការ​គ្នា​ជា​ធ្លុង​មួយសារ​ជា​ថ្មី​​នឹង​កីឡាករ​ដែល​កំពុង​មាន​វត្តមាន​ស្រាប់​នៅ​ក្លឹប​លោក​។
                                    </div>
                                </div>
                            </a>
                        </figure> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include('footer.php'); ?>