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
                            <h3 class="panel-title"> <i class="fa fa-user"></i> Add Freedom fighter </h3>
                        </div>
                        <div class="panel-body">
                            <form action="add-freedom-fighterProcess.php" method="POST" role="form">
                            	<legend>Welcome to add freedom fighter</legend>
                            
                            	<div class="form-group">
                            		<label for="">Freedom Fighter Name</label>
                            		<input name="name" type="text" class="form-control" id="" placeholder="Enter Freedom Fighter Name" required="required">
                            	</div>
                            	<div class="form-group">
                            		<label for="">Father's Name</label>
                            		<input name="father_name" type="text" class="form-control" id="" placeholder="Enter Father's Name" required="required">
                            	</div>
                            	 	<div class="form-group">
                            		<label for="">Mother's Name</label>
                            		<input name="mother_name" type="text" class="form-control" id="" placeholder="Enter Mother's Name" required="required">
                            	</div>
                            	<div class="form-group">
                            		<label for="">Address</label>
                            		<input name="address" type="text" class="form-control" id="" placeholder="Enter Address" required="required">
                            	</div>
                            	<div class="form-group">
                            		<label for="">Date Of Birth</label>
                            		<input name="date_of_birth"  type="text" class="form-control" id="" placeholder="Date Of Birth" required="required">
                            	</div>
                            	<div class="form-group">
                            		<label for="">Freedom Fight Area</label>
                            		<input name="area" type="text" class="form-control" id="" placeholder="Freedom Fight Area" required="required">
                            	</div>
                            	<div class="form-group">
                            		<label for="">Sector no</label>
                            		<input name="sector"  type="text" class="form-control" id="" placeholder="Enter Sector no" required="required">
                            	</div>
                            	<div class="form-group">
                            		<label for="">Martyr</label>
                            		<select name="martyr" id="input" class="form-control" required="required" required="required">
                            			<option value="yes">YES</option>
                            			<option value="no">NO</option>
                            		</select>
                            	</div>
                            	
                            
                            	<button type="submit" class="btn btn-primary"> <i class="fa fa-user"></i> Add Freedom Fighter</button>
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