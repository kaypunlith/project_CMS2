<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>All Sport News</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <!-- <div class="block-search">
                                        <input type="text" class="form-control" placeholder="SEARCH HERE">
                                        <button type="submit">
                                        <img src="search.png" alt=""></button>
                                    </div> -->
                                    <table class="table" border="1px">
                                        <tr>
                                            <th>Title</th>
                                            <th>Post Type</th>
                                            <th>Categories</th>
                                            <th>Thumbnail</th>
                                            <th>Publish Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        <tr>
                                            <td>Why do we use it?</td>
                                            <td>Sport</td>
                                            <td>National</td>
                                            <td><img src="https://via.placeholder.com/80"/></td>
                                            <td>27/June/2022</td>
                                            <td width="150px">
                                                <a href=""class="btn btn-primary">Update</a>
                                                <button type="button" remove-id="1" class="btn btn-danger btn-remove" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Remove
                                                </button>
                                            </td>
                                        </tr>
                                      
                                    
                                    </table>
                                    <ul class="pagination">
                                        <li>
                                            <a href="">1</a>
                                            <a href="">2</a>
                                            <a href="">3</a>
                                            <a href="">4</a>
                                        </li>
                                    </ul>

                                    <!-- Modal -->
                                    
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