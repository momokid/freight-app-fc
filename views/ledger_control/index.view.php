<?php require("views/partials/head.php");  ?>
<?php require("views/partials/nav_alert.php"); ?>
<?php require("views/partials/sidebar_nav.php"); ?>
<?php require("views/partials/search_bar.php"); ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">New Ledger Control</h4>
                        <p class="card-description">Group Name For Ledgers</p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Control Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter Control Name">
                            </div>
                            
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- content-wrapper ends -->

    <?php //require("views/partials/footer.php"); 
    ?>
</div>
<!-- main-panel ends -->

<?php require("views/partials/footer_assets.php"); ?>