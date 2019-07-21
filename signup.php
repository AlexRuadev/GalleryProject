<?php require "header.php"; ?>


<main>  
    <div class="container">
        <div class="col-xs-12 col-sm-4 col-md-4 text-center formPlace">

            <h1>Signup</h1>
            <?php 
            
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyfields") {
                    echo '<p class="signupError"> Fill in all fields!</p>';
                }
                else if ($_GET["error"] == "invaliduidmail") {
                    echo '<p class="signupError">Invalid username / email</p>';
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo '<p class="signupError">Invalid username</p>';
                }
                else if ($_GET["error"] == "invalidmail") {
                    echo '<p class="signupError">Invalid email</p>';
                }
                else if ($_GET["error"] == "passwordcheck") {
                    echo '<p class="signupError">Your passwords do not match</p>';
                }
                else if ($_GET["error"] == "usertaken") {
                    echo '<p class="signupError">Username is already taken</p>';
                }
            }
            else if (isset($_GET["signup"]) && ($_GET["signup"] == "success")) {
                echo '<p class="signupsuccess">Signup successful</p>';
            }
            
            ?>
            <form action="includes/signup.inc.php" method="post">
                <div class="form-group">
                    <input type="text" name="uid" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                <input type="text" name="mail" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                <input type="password" name="pwd" placeholder="Password" class="form-control">
                </div>
                <div class="form-group">
                <input type="password" name="pwd-repeat" placeholder="Repeat password" class="form-control">
                </div>
                <div class="form-group">
                <button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
                </div>
            </form>

        </div>
    </div>
</main>

<?php require "footer.php" ?>