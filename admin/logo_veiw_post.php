<?php 
    include('sidebar.php');
    // include('./logo_delete_post.php')
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>View Websiste Logo</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <!-- <div class="block-search">
                                        <input type="text" class="form-control" placeholder="SEARCH HERE">
                                        <button type="submit">
                                        <img src="search.png" alt=""></button>
                                    </div> -->
                                    <table class="table align-middle" border="1px">
                                        <tr>
                                            <th>ID</th>
                                            <th>Thumbnail</th></th>
                                            <th>status</th>
                                            <th>Actions</th>
                                        </tr>
                                       <?php viewAll_logo();?>
                                    </table>
                                    <ul class="pagination">
                                        <li>
                                            <a href="">1</a>
                                            <a href="">2</a>
                                            <a href="">3</a>
                                            <a href="">4</a>
                                        </li>
                                    </ul>

                                  
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