<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FF INFO">
    <meta name="MONAYE" content="FF INFO ABOUT 1971">
    <title>HOME || FFINFO </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../index.php">FF MANAGEMENT</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class=" col-md-offset-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">FFMANAGEMENT USER LOGIN</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-10">
                                <form action="loginProcess.php" method="POST" role="form">
                                    <legend>Welcome to user login</legend>
                                    <div class="form-group">
                                        <label for="">Email* </label>
                                        <input type="email" name="email" class="form-control" id="" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password* </label>
                                        <input type="password" name="password" class="form-control" id="" placeholder="Enter Password" require="required">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary"> <i class="fa fa-sign-in"></i> Login</button>
                                    <a class="btn btn-success" data-toggle="modal" href='#modal-id'>Sign up</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section>
        <!-- Sign up form -->
        <div class="modal fade" id="modal-id">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">FF MANAGEMENT</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="POST" role="form">
                            <legend>Welcome to sign up</legend>
                            <div class="form-group">
                                <label for="">Your Name*</label>
                                <input type="text" name="name" class="form-control" id="" placeholder="Enter your name" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Email*</label>
                                <input type="email" name="email" class="form-control" id="" placeholder="Enter email" required="required">
                            </div>
                            <div class="form-group">
                                <label for="">Password*</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Enter password" required="required">
                            </div>
                            <button name="submit" type="submit" class="btn btn-primary">Sign up</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End sign up -->
<?php include 'inc/sign-up.php' ; ?>
<?php include 'inc/footer.php'  ; ?>
