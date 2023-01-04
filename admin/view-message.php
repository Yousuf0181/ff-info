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
                            <h3 class="panel-title"> <i class="fa fa-dashboard"></i> View Message </h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Sl #</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <?php 

                                    $sql = "SELECT * FROM user" ;

                                    $result = $db->query($sql) ;

                                    while($row =  $result->fetch_assoc()){

                                    $name =  $row['name'] ;
                                    $id = $row['id'] ;
                                    $email =  $row['email'] ;
                                    $message = $row['message'] ;

                                 ?>
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $id; ?>
                                        </td>
                                        <td>
                                            <?php echo $name; ?>
                                        </td>
                                        <td>
                                            <?php echo $email;  ?>
                                        </td>
                                        <td>
                                            <?php $data = userMessage($id) ; ?>
                                            <a class="btn btn-primary btn-xs" data-toggle="modal" href='#modal-id'><i class="fa fa-envelope"></i> View Message</a>
                                        </td>
                                        <td>
                                            <form action="" method="GET" role="form">
                                                <input type="hidden" name="id" value="<?php echo $id ; ?>">
                                                <button name="submit" type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
<?php include 'inc/footer.php' ; ?>
<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">User Message</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <?php 
                            while($row = $data->fetch_assoc()){
                            echo $row['message'] ;
                            }
                        ?> 
                        </div>
                    </div>
                </div>
             
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<?php 

if(isset($_GET['submit']))
{

    $id = $_GET['id'] ;

    $result = deleteMessage($id) ;

    if($result)
    {
        redirectTo('view-message.php') ;
    }
}


?>
