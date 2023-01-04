<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; ?>

$id = $_GET['id'] ;

$sql = "SELECT * FROM freedomfighter WHERE id  = '".$id."'   " ;

$result = $db -> query($sql);

while ($row = $result -> fetch_assoc()){

$id = $row['id'];

$name = $row['name'];

$fathername = $row['father_name'];

$mothername = $row['mother_name'];

$address = $row['address'];

$date_of_birth = $row['date_of_birth'];

$area = $row['area'];

$sector = $row['sector'];

$martyr = $row['martyr'];
}
?>
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
                            <h3 class="panel-title"> <i class="fa fa-user"></i> Update </h3>
                        </div>
                        <div class="panel-body">
                                <form action="update-freedom-fighter.php" method="POST" role="form">
                                    <input type="hidden"  name="id" value="<?php echo $id ; ?>">
                                <legend>Welcome to add freedom fighter</legend>
                            
                                <div class="form-group">
                                    <label for="">Freedom Fighter Name</label>
                                    <input name="name" value="<?php echo $name ; ?>"   type="text" class="form-control" id="" placeholder="Enter Freedom Fighter Name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="">Father's Name</label>
                                    <input name="father_name"  value="<?php echo $fathername ; ?>"  type="text" class="form-control" id="" placeholder="Enter Father's Name" required="required">
                                </div>
                                    <div class="form-group">
                                    <label for="">Mother's Name</label>
                                    <input name="mother_name"  value="<?php echo $mothername ; ?>" type="text" class="form-control" id="" placeholder="Enter Mother's Name" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input name="address" value="<?php echo $address ; ?>" type="text" class="form-control" id="" placeholder="Enter Address" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="">Date Of Birth</label>
                                    <input name="date_of_birth"  value="<?php echo $date_of_birth ; ?>" type="text" class="form-control" id="" placeholder="Date Of Birth" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="">Freedom Fight Area</label>
                                    <input name="area" type="text"  value="<?php echo $area ; ?>" class="form-control" id="" placeholder="Freedom Fight Area" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="">Sector no</label>
                                    <input name="sector" value="<?php echo $sector ; ?>" type="text" class="form-control" id="" placeholder="Enter Sector no" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="">Martyr</label>
                                    <select name="martyr"  value="<?php echo $martyr ; ?>" id="input" class="form-control" required="required" required="required">
                                        <option value="yes">YES</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success"> <i class="fa fa-user"></i> Update Freedom Fighter</button>
                                <button type="Reset" class="btn btn-danger">Reset</button>
                            </form>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php' ; ?>
