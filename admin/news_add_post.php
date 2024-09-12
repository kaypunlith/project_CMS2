<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>Add Sport News</h3>
                        </div>
                        <div class="bottom">
                            <figure>
                                <form method="post" class="shadow p-3" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label>news Type</label>
                                        <select class="form-select" name="type">
                                            <option value="sport">sport</option>
                                            <option value="education">Education</option>
                                            <option value="komsan">Komsan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-select" name="category">
                                            <option value="National">National</option>
                                            <option value="Intinationnal">Intinationnal</option>
                                        
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Thumbnail</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label>Benner</label>
                                        <input type="file" class="form-control" name="benner">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control">
                                      
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="add_news" class="btn btn-primary">Submit</button>
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