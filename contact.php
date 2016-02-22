<?php
    include ('php/contact_validate.php');

?>

<!DOCTYPE html>
<html lang="en">
<body onload="myFunction()">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sleepy Pillows - Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-width-pics.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../../../index.html">Robert Sloss</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="overview.html">Overview</a>
                    </li>
                    <li>
                        <a href="prod.html">Products</a>
                    </li>
                    <li>
                        <a href="support.html">Support/FAQ</a>
                    </li>
                    <li class="active">
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Full Width Image Header with Logo -->
    <!-- Image backgrounds are set within the full-width-pics.css file. -->
<!--    <header class="image-bg-fluid-height"></header>-->
<section id="title-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><u> Contact Us - Sleepy Pillows</u></h1>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form role="form" method="post" action="contact.php">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" data-toggle="tooltip" data-placement="right" title="Insert YOUR NAME Here" name="name" class="form-control" id="name" placeholder="Name" value="<?php if(isset($_POST['name'])){echo htmlspecialchars($_POST['name']);} ?>">
                            <?php if(isset($errorName)){echo "<p class='text-danger'>$errorName</p>";} ?>
                        </div>
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input type="text" data-toggle="tooltip" data-placement="right" title="Insert YOUR COMPANY NAME Here" name="company" class="form-control" id="company" placeholder="Company Name" value="<?php if(isset($_POST['company'])){echo htmlspecialchars($_POST['company']);} ?>">
                            <?php if(isset($errorCompany)){echo "<p class='text-danger'>$errorCompany</p>";} ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" data-toggle="tooltip" data-placement="right" title="Insert YOUR EMAIL Here" name="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email']);} ?>">
                            <?php if(isset($errorEmail)){echo "<p class='text-danger'>$errorEmail</p>";} ?>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" data-toggle="tooltip" data-placement="right" title="Insert your MESSAGE Here" type="text" id="message" name="message" rows="5" placeholder="Enter Message" value="<?php if(isset($_POST['message'])){echo htmlspecialchars($_POST['message']);} ?>"></textarea><?php if(isset($errorMessage)){echo "<p class='text-danger'>$errorMessage</p>";} ?>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Submit</button>
                        <div class="form-group">
                            <!-- Display alert -->
                            <?php if(isset($result)){echo "$result";} ?>
                        </div>
                    </form>
                </div></div></div></section>

    <hr>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> RLSloss 2016</p>
                    <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
    100% Page Fully Loaded
  </div>
</div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>