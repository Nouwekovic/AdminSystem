<?php
require "header.php";
?>
<main>
    <div class="padding container d-flex justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="signup-form">
                <form action="includes/signup.inc.php" method="post">
                    <h2 class="text-center">Registrace</h2>
                    <hr>
                    <?php
                    if (isset($_GET['error'])) {
                        if (($_GET['error'] == "emptyfields")) {
                            echo '<p class="error">Vyplňte všechna pole!</p>';
                        }
                        if (($_GET['error'] == "invaliduidmail")) {
                            echo '<p class="error">Nesprávné uživatelské jméno a heslo!</p>';
                        }
                        if (($_GET['error'] == "invalidmail")) {
                            echo '<p class="error">Nesprávný formát emailu!</p>';
                        }
                        if (($_GET['error'] == "invaliduid")) {
                            echo '<p class="error">Uživatelské jméno obashuje nepovolné znaky!</p>';
                        }
                        if (($_GET['error'] == "passwordcheck")) {
                            echo '<p class="error">Zadaná hesla se neshodují</p>';
                        }
                        if (($_GET['error'] == "usertaken")) {
                            echo '<p class="error">Uživatelské jméno je již používané!</p>';
                        }
                    }


                    ?>
                    <div class="form-group"> <input type="text" class="form-control" name="uid" placeholder="Uživatelské jméno"> </div>
                    <div class="form-group"> <input type="email" class="form-control" name="mail" placeholder="Emailová adresa"> </div>
                    <div class="form-group"> <input type="password" class="form-control" name="pwd" placeholder="Heslo"> </div>
                    <div class="form-group"> <input type="password" class="form-control" name="pwd-repeat" placeholder="Zopakujte heslo"> </div>
                    <div class="form-group text-center"> <button type="submit" name="signup-submit" class="btn btn-blue btn-block">Registrovat</button> </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
require "footer.php";
?>