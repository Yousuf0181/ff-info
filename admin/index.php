<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php include 'inc/sidebar.php' ;  ?>
            </div>
            <div class="col-md-9">
                <article>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"> <i class="fa fa-dashboard"></i> Dashborad </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="tiles">
                                        <h4 class="text-center">Total Freedom Fighrter</h4>
                                        <h2 class="text-center">200</h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="tiles">
                                        <h4 class="text-center">Total User</h4>
                                        <h2 class="text-center">200</h2>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                     <div class="tiles">
                                        <h4 class="text-center">Total Martyr</h4>
                                        <h2 class="text-center">200</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php' ; ?>
