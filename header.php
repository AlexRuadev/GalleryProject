<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="banner">
            <nav class="navbar navbar-expand-lg sticky-top navbar-light navbar-fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>  
                        <?php 
                
                if (isset($_SESSION['userId'])) {
                    // display logout button if already logged in
                    echo '
                        <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#uploadModal">
                        Upload
                      </button>
                        <div class="col-xs-12 col-sm-2 col-md-2 text-center ">
                            <form action="includes/logout.inc.php" method="post">
                            <button type="submit" class="btn btn-danger mb-2" name="logout-submit">Logout</button>
                            </form>
                        </div>
                        '; 
                }
                else {
                    // display login form if logout
                    echo '
                  
                    <!-- Button trigger modal -->
                    <button type="button" class="myButtonSignin" data-toggle="modal" data-target="#signInModal">
                    <span>Sign In</span>
                    </button>
                    ';

                }
                
                ?>               
                        </ul>



                
                    </div>
                </div>
            </div>
        </nav>   
    </header>