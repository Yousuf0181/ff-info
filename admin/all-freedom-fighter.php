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
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Fredom Fighter Id</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Mother Name</th>
                                        <th>Address</th>
                                        <th>Date of birth</th>
                                        <th>Area</th>
                                        <th>Sector</th>
                                        <th>Martyr</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
<?php 

$sql = "SELECT * FROM freedomfighter" ;

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


 ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $id ; ?>
                                        </td>
                                        <td>
                                            <?php echo $name ; ?>
                                        </td>
                                        <td>
                                            <?php echo $fathername ; ?>
                                        </td>
                                        <td>
                                            <?php echo $mothername ; ?>
                                        </td>
                                        <td>
                                            <?php echo $address ; ?>
                                        </td>
                                        <td>
                                            <?php echo $date_of_birth ; ?>
                                        </td>
                                        <td>
                                            <?php echo $area ; ?>
                                        </td>
                                        <td>
                                            <?php echo $sector ; ?>
                                        </td>
                                        <td>
                                            <?php echo $martyr ; ?>
                                        </td>
                                        <td>
                                            <form action="all-freedom-fighterProcess.php" method="GET" role="form">

                                            <input type="hidden"  name="id" value="<?php echo $id ; ?>">
                                                <button type="submit" class="btn btn-sm btn-success"> <i class="fa fa-pencil-square-o"></i> </button>
                                            </form>
                                        </td>
                                         <td>
                                            <form action="delete-freedom-fighter.php" method="GET" role="form">
                                                <input type="hidden"  name="id" value="<?php echo $id ; ?>">
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php }  /*End while loop*/ ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php' ; ?>
