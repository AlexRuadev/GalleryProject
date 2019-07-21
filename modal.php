<div class="wrapper-modal">

<!----------------------------------------------------- Debut Modal Upload ----------------------------------------------------->

<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
      <section id="uploadFile">
        <!-- Display the following form only if we are logged in -->

        
        <?php 
        if (isset($_SESSION['userId'])) {
            echo '  
            <div class="gallery-upload">
                <div class="col-xs-12 col-sm-8 col-md-8 formUpload">
                    <form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="filename" placeholder="File name...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="filetitle" placeholder="Image title...">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="filedesc" placeholder="Image description...">
                        </div>
                        <div class="form-group">
                         <input type="file" class="form-control" name="file">
                        </div>
                </div>
                        <div class="buttons-modal-upload">
                            <button type="submit" class="btn btn-success float-right" name="submit">Upload</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                
              
            </div>
            ';
        }
 
        ?>
    </section>
      </div>

    </div>
  </div>
</div>
<!----------------------------------------------------- Fin Modal Upload ----------------------------------------------------->


<!----------------------------------------------------- Debut Modal SignIn ----------------------------------------------------->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="includes/login.inc.php" method="post" id="loginForm">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" class="form-control" name="mailuid" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="pwd" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2" name="login-submit">Login</button>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
            <a class="signupLink" href="signup.php">Signup</a>
            </div>
            
        </div>
    </div>
</div>
<!----------------------------------------------------- Fin Modal SignIn ----------------------------------------------------->

</div>