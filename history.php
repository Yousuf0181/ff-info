<?php include 'inc/header.php' ; ?>
<?php include 'inc/function.php' ; 
$sql = "SELECT * FROM history" ;

$result = $db -> query($sql);

?>
<section class="history-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>HISTORY OF 1971</h2>
                </div>
            </div>
        </div>
    </div>
    <?php while ($row = $result -> fetch_assoc()){ ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4><?php echo $row['title'];?></h4>
                <p>
                    <?php echo $row['history1'];?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <p>
                    <?php echo $row['history2'];?>
                </p>
            </div>
            <div class="col-md-3">
                <img src="<?php echo"admin/img/" .$row['image'];?>" alt="" style="margin-top:20px;" srcset="" width="">
            </div>   
        </div>
    </div>
    <?php }  /*End while loop*/ ?>
    
<?php include 'inc/footer.php' ; ?>
