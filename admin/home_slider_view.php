<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; 
$sql = "SELECT * FROM homeslider" ;

$result = $db -> query($sql);
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
                            <h3 class="panel-title"> <i class="fa fa-dashboard"></i> Freedom Fighter List </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <?php while ($row = $result -> fetch_assoc()){ ?>

                                <tbody>
                                    <tr>
                                        <th><?php echo $row['id'];?></th>
                                        <th><?php echo $row['name'];?></th>
                                        <th><img src="<?php echo"img/" .$row['image'];?>" alt="" srcset="" width="100"></th>
                                        <td>
                                            <form action="" method="GET" role="form">
                                                <input type="hidden" name="id" value="<?php echo $id ; ?>">
                                                <button name="submit" type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php }  /*End while loop*/ ?>

                            </table>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php' ; ?>
