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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"> <i class="fa fa-user"></i> Add History </h3>
                        </div>
                        <div class="panel-body">
                            <form action="history_insert.php" method="POST" role="form" enctype="multipart/form-data">
                            	<legend>Welcome to add History</legend>
                                <div class="form-group">
                            		<label for="">Title</label>
                            		<input name="title" type="text" class="form-control" id="" placeholder="Enter image name" required="required">
                            	</div> 
                            
                            	<div class="form-group">
                            		<label for="">History1</label>
                            		<input name="history1" type="text" class="form-control" id="" placeholder="Enter image name" required="required">
                            	</div> 
                                <div class="form-group">
                            		<label for="">History2</label>
                            		<input name="history2" type="text" class="form-control" id="" placeholder="Enter image name" required="required">
                            	</div>   
                                <div class="form-group">
                            		<label for="">Image</label>
                            		<input name="image" type="file" class="form-control" id="" placeholder="Enter Father's Name" required="required">
                            	</div>

                                                                                      
                            	<button type="submit" class="btn btn-primary"> <i class="fa fa-user"></i> Add History</button>
                            	<button type="Reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>





<?php include 'inc/footer.php'  ; ?>