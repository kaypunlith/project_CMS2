  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure to remove this post?</h5>
            </div>
            <div class="modal-footer">
                <form action="logo_distroy_post.php" method="post">
                    <input type="hidden" id="value_remove" name="remove_id" value="0">
                    <button type="submit" class="btn btn-danger">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>  
                </form>
            </div>
        </div>
    </div>
</div>
<script>
     function Delete_logo(id){
       $('#value_remove').val(id);
    }
</script>