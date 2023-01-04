<?php include 'inc/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include 'inc/header.php' ; 
$sql = "SELECT * FROM history" ;

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
                            <h3 class="panel-title"> <i class="fa fa-dashboard"></i> History View </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>History 1</th>
                                    <th>History 2</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <?php while ($row = $result -> fetch_assoc()){ ?>

                                <tbody>
                                    <tr>
                                        <th><?php echo $row['id'];?></th>
                                        <th><?php echo $row['title'];?></th>
                                        <th><?php echo $row['history1'];?></th>
                                        <th><?php echo $row['history2'];?></th>
                                        <th><img src="<?php echo"img/" .$row['image'];?>" alt="" srcset="" width="100"></th>
                                        <td>
                                            <form action="history_edit.php" method="GET" role="form">

                                            <input type="hidden"  name="id" value="<?php echo '$id' ; ?>">
                                                <button type="submit" class="btn btn-sm btn-success"> <i class="fa fa-pencil-square-o"></i> </button>
                                            </form>
                                        </td>
                                         <td>
                                            <form action="delete-history.php" method="GET" role="form">
                                                <input type="hidden"  name="id" value="<?php echo $row['id'] ; ?>">
                                                <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
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
<!-- <?php include 'inc/footer.php' ; ?> -->
