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
                                    <table class="table table-striped align-middle table-hover shadow p-3" border="1px">
                                    <tr class="table-dark">
                                             <th>Title</th>
                                            <th width="90">Post Type</th>
                                            <th>Categories</th>
                                            <th>Thumbnail</th>
                                            <th width="130">Publish Date</th>
                                            <th>Actions</th>
                                        </tr>
                                     <?php 
                                       view_news_post();
                                     ?>
                                      
                                    
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