<?php include 'inc/header.php' ; ?>
<?php include 'inc/function.php' ; 
$sql = "SELECT * FROM homeslider" ;

$result = $db -> query($sql);

?>
<section class="slider">
    <div class="row">
        <div class="col-md-12">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/slider/slider-1.png" alt="Chania">
                    </div>
                <?php while ($row = $result -> fetch_assoc()){ ?>

                    <div class="item">
                        <img src="<?php echo"admin/img/" .$row['image'];?>" alt="" srcset="" width="">
                    </div>
                <?php }  /*End while loop*/ ?>
                 
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$sql = "SELECT * FROM freedomfighterslider" ;

$result = $db -> query($sql); 
?>
<section class="solder-section">
    <div class="cotainer">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>SEVEN GOLDEN SOLDERS BANGLADESH </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="solder-slider">
                    <div class="owl-carousel">
                        <?php while ($row = $result -> fetch_assoc()){ ?>
                        <div class="solder-box">
                            <a href="<?php echo $row['pagelink'];?>"><img src="<?php echo"admin/img/" .$row['image'];?>" alt="" srcset="" width=""></a>
                        </div>
                        <?php }  /*End while loop*/ ?>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php' ; ?>
