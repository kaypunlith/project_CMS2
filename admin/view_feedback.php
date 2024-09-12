<?php 
    include('sidebar.php');
?>
                <div class="col-10">
                    <div class="content-right">
                        <div class="top">
                            <h3>view Feedback</h3>
                        </div>
                        <div class="bottom view-post">
                            <figure>
                                <form method="post" enctype="multipart/form-data">
                                    <!-- <div class="block-search">
                                        <input type="text" class="form-control" placeholder="SEARCH HERE">
                                        <button type="submit">
                                        <img src="search.png" alt=""></button>
                                    </div> -->
                                    <table class="table align-middle shadow" border="1px">
                                        <tr class="table-dark">
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Telephon</th>
                                            <th>Address</th>
                                            <th width="500px">Message</th>
                                            <th>Date</th>
                                           
                                        </tr>
                                          <?php Select_Feedback()?>
                                      
                                    
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