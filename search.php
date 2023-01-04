<?php include 'inc/header.php' ?>
<?php include 'inc/function.php' ; ?>
<section class="search-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>SEARCH FREEDOM FIGHTER</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="search-section-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="" method="GET" role="form">
                    <legend>Welcome to search freedom fighter record </legend>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Enter Freedom Fighter id" name="id">
                    </div>
                    <button type="submit" name="submit" class="btn  red-btn"> <i class="fa fa-search"></i> Search</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover">
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
                        </tr>
                    </thead>
                    <?php 
if(isset( $_GET['submit']))
{
    $id = $_GET['id'] ;

    $sql = "SELECT * FROM freedomfighter WHERE id = '".$id."' " ;

    $result = $db->query($sql) ;

while ($row = $result->fetch_assoc()){

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
                        </tr>
                        <?php }  }/*End while loop*/ ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ; ?>
