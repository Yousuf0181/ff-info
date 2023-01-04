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
                            <h3 class="panel-title"> <i class="fa fa-dashboard"></i> Freedom Fighter List </h3>
                        </div>
                        <div class="panel-body">
                            <form action="search-freedom-fighterProcess.php" method="GET" role="form">
                                <legend>Welcom to search</legend>
                            
                                <div class="form-group">
                                    <input name="id" type="text" class="form-control" id="" placeholder="Enter freedom fighter id">
                                </div>
                            
                                
                            
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-search"> </i> Search</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php' ; ?>
