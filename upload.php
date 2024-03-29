<?php
    session_start();
    if(isset($_SESSION['uname'])){
        header("Location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Daet Spa Central Massage</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't worsk if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

  </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
          
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                           
                            <!--<div class="description">
                              <p>
                                This is a free responsive login form made with Bootstrap. 
                                Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                              </p>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-sm-6 col-sm-offset-3 form-box">
                          <div class="form-top">
                            <div class="form-top-left">
                            <a href="admin.php" class="btn" style="color: red; font-size: 20px;">X</a>
                            <h1 style="color:#ffffff;">Upload Image</h1>
                            </div>
                            <div class="form-top-right">
                              <i class="fa fa-lock"></i>
                            </div>
                            </div>
                            <div class="form-bottom">
                         <!-- <form name="form" action="" method="post" class="login-form"> -->
                          <form action="controller/controller.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                            <p style="color:#ffffff;"><b>Name of Service:</b></p>
                              <label class="sr-only" for="form-service">Service</label>
                                <input type="text" name="service" placeholder="Service..." class="form-service form-control" id="Service">
                              </div>
                              <div class="form-group">
                                <p style="color:#ffffff;"><b>Price:</b></p>
                                <label class="sr-only" for="form-detail">price</label>
                                <input type="text" name="detail" placeholder="Price..." class="form-detail form-control" id="detail">
                              </div>
s
                              <div class="form-group">
                                <p style="color:#ffffff;"><b>Image:</b></p>
                                <input type="file" class="form-control" name="image">
                              </div>

                              <button name="upload" class="btn">Upload</button>
                             
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>