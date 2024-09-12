<?php 
    include('sidebar.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM `tbl_news` WHERE `id` = '$id'";
    $res=$con->query($sql);
    $row=mysqli_fetch_array($res);
    
    $select_national='';
    $select_international='';
    if($row['7']=='National'){
        $select_national='selected';
    }else{
        $select_international='selected';
    }
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Update Sport News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <input type="hidden" id="edit_id" name="edit_id" value="<?php echo $row[0]?>">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title" value="<?php echo $row[2]?>">
                                    </div>
                                    <div class="form-group">
                                        <label>news Type</label>
                                        <select class="form-select" name="type">
                                            <option value="sport">sport</option>
                                            <option value="education">social</option>
                                            <option value="komsan">Komsan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-select" name="category">
                                            <option value="National" <?php echo $select_national?>>National</option>
                                            <option value="Intinationnal"  <?php echo $select_international?>>International</option>
                                        
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="file" class="form-control" name="image">
                                        <img class="mt-2" src="./assets/icon/<?php echo $row[5]?>" width="70" height="70" alt="">
                                        <input type="hidden" name="old_img_thumnail" value="<?php echo $row[5]?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Benner</label>
                                        <input type="file" class="form-control" name="benner">
                                        <img class="mt-2" src="./assets/icon/<?php echo $row[4]?>" width="70" height="70" alt="">
                                        <input type="hidden" name="old_img_benner" value="<?php echo $row[4]?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" value="<?php echo $row[2]?>" name="description" class="form-control">
                                      
                                      
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="update_new" class="btn btn-primary">Update</button>
                                        <button type="submit" class="btn btn-success">Success</button>
                                        <button type="submit" class="btn btn-danger">Danger</button>
                                    </div>
                                </form>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>