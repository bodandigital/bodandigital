<?php

require_once './classes/database.php';

$db = new database('localhost', 'sevenyea_bdweb', 'w3b*user', 'sevenyea_bdig');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$conpswd = trim($_POST['conpswd']);

if ($firstname) {
    if ($lastname) {
        if ($email) {
            if ($username) {
                if ($password && $conpswd) {
                    if ($password == $conpswd) {
                        $password = sha1($password);

                        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                        if (!$email) {
                            // The email address is not valid
                            header('Location: signup_form.php');
                        } else {
                            $db->query("INSERT INTO users VALUES(NULL,'" . $firstname . "','" . $lastname . "','" . $email . "','" . $username . "','" . $password . "')");
                            $_SESSION['username'] = $username;
                            if (!$db) {
                                // TODO better error handling
                                echo mysql_error();
                            }
                            echo $db->numRows();
                            mail('office@bodandigital.com','email error',  mysql_error());
                            header('Location: index.php');
                        }
                    } else {
                        header('Location: signup_form.php');
                    }
                } else {
                    header('Location: signup_form.php');
                }
            } else {
                header('Location: signup_form.php');
            }
        } else {
            header('Location: signup_form.php');
        }
    } else {
        header('Location: signup_form.php');
    }
} else {
    header('Location: signup_form.php');
}
?>
