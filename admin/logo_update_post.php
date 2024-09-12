<?php 
    include('sidebar.php');
    
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Add Website Logo</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                  
                                    <div class="form-group">
                                        <label>show on</label>
                                        <select class="form-select" name="show_on">
                                            <option value="header">Header</option>
                                            <option value="footer">Footer</option>
                                            
                                        </select>
                                    </div>
                                  
                                    <div class="form-group">
                                        <label>Thambanail</label>
                                        <input type="file" name="Thambanail" class="form-control">
                                    </div>
                                    <?php  
                                   $id=$_GET['id'];
                                   $sql="SELECT * FROM `tbl_logo` WHERE `id`=$id";
                                   $res=$con->query($sql);
                                   $row=mysqli_fetch_assoc($res);
                                   ?>
                                     <img src="./assets/icon/<?php echo $row['thubnail']?>" height="70px" alt="">
                                   <?php
                                   
                              ?>  
           
                                <input type="hidden" name="old_img" value="<?php echo $row['thubnail']?>">
                                    <div class="form-group mt-2">
                                        <button type="submit" name="update_logo" class="btn btn-primary">Update</button>
                                        <a href="index.php" class="btn btn-danger">close</a>

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