<?php
    require "header.php";
?>

 <div class="container">
    <section class="gallery-links">
        <div class="wrapper">

            <h2 class="text-center titleh2">gallery</h2>
            
            <div class="gallery-container col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <?php 
                    include_once 'includes/dbh.inc.php';

                    $sql = "SELECT * FROM gallery ORDER BY orderGallery DESC";
                    $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "SQL statement failed !";
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '  
                                <div class="col-xs-12 col-sm-4 col-md-4 no-padding ">
                                <a class="myImg" href="#">
                                    <div class="galleryPhoto" style="background-image: url(img/gallery/'.$row["imgFullNameGallery"].');"></div>
                                    <h3>'.$row["titleGallery"].'</h3>
                                    <p>'.$row["descGallery"].'</p>
                                </a>
                                </div>
                            ';
                            }
                        }

                    
                
                    ?>

                </div>

            </div>
        </div>
    </section>
    </div> 

       
<?php
    require "footer.php";
?>
  
