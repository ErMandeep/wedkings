      <!--Logout Modal -->
    <div id="logout" class="modal fade" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">3
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Logout</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                    <div class="alert alert-danger">Are you Sure you want to logout
                        <strong>
                            <?php echo $_SESSION['coupleName']; ?>?
                        </strong>
                    </div>
                    <div class="modal-footer">
                        <a href="logout.php">
                            <button type="button" class="btn btn-danger">YES </button>
                        </a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>