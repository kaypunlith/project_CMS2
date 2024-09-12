<div class="modal fade" id="delete_new" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this News?</h5>
            </div>
            <div class="modal-footer">
                <form action="new_distroy_post.php" method="post">
                    <input type="hidden" id="new_remove" name="new_remove" value="0">
                    <button type="submit" name="del_new" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function Delete_new(id){
        $("#new_remove").val(id)
            }
</script>