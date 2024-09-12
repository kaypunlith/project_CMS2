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
                                   
                                    <div class="form-group">
                                        <button type="submit" name="add_logo" class="btn btn-primary">add</button>
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