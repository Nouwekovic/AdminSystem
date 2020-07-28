<?php
// Checking if user clicked the Login button, and making sure he cannot access the index page by any other means
if (isset($_POST['login-submit'])) {
    // Including file with db info
    require 'dbh.inc.php';
    // Defining variables
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    // Making sure that all fields have values
    if (empty($mailuid) || empty($password)) {
        header("Location: ../login.php?error=emptyfields");
        exit();
    } else {
        // Defining sql querry 
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        // Initializing SQL statement
        $stmt = mysqli_stmt_init($conn);
        // Checking if database connection is successfully established and the SQL statement doesn't throw any errors 
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error=sqlerror");
            exit();
        } else {
            // If it goes successfully, this binds the params to question marks in the SQL statement, executes it and saves the returned value to result variable
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            // Fetches other data from row of specific db entry
            if ($row = mysqli_fetch_assoc($result)) {
                // Verifies hashed password entered and if it matches with hashed password stored in db
                $pwdCheck = password_verify($password, $row['pwdUsers']);
                // If it doesn't match then the user will not be let through
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error=wrongpwd&mailuid=" . $mailuid);
                    exit();
                }
                // However, if the last check is true, then session is started and user is let through to the index page
                else if ($pwdCheck == true) {
                    session_start();
                    $_SESSION['userId'] = $row['idUsers'];
                    $_SESSION['userUid'] = $row['uidUsers'];
                    header("Location: ../index.php?login=success");
                    exit();
                }
                // Something else can go bonkers as well, better to have this fail save then not
                else {
                    header("Location: ../login.php?error=wrongpwd");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
