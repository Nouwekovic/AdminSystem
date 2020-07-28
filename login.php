<?php
require "header.php";
?>
<main>
    <div class="padding container d-flex justify-content-center">
        <div class="col-12 col-md-10 col-md-offset-1">
            <div class="signup-form">
                <form action="includes/login.inc.php" method="post">
                    <h2 class="text-center">Login</h2>
                    <hr>
                    <div class="form-group"> <input type="text" class="form-control" name="mailuid" placeholder="Email Address" required="required"> </div>
                    <div class="form-group"> <input type="password" class="form-control" name="pwd" placeholder="Password" required="required"> </div>
                    <div class="form-group text-center"> <button type="submit" name="login-submit" class="btn btn-blue btn-block">Log-in</button> </div>
                    <label class="ml-3" for="register">Ještě nejste zaregistrováni? Klikněte sem!</label>
                    <div class="form-group text-center"> <button type="button" name="register" class="btn btn-blue btn-block mt-2"><a id="register" href="signup.php">Registrovat se</a></button> </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-md-2 col-md-offset-1">
            <div style="text-align:center; width:100%; background-color:white;">
                <p class="mr-4">uid:test</p>
                <p class="mr-4">pwd:test</p>
            </div>
        </div>
    </div>
</main>

<?php
require "footer.php";
?>