<?php
    require_once './classes/database.php';
    
    $db = new database('localhost', 'sevenyea_bdweb', 'w3b*user', 'sevenyea_bdig');
    
    $password = $_REQUEST['password'];
    $username = $_REQUEST['username'];
    
    $password = sha1($password);
    
    $db->query("SELECT * FROM users WHERE username=".$username." AND password=".$password."'");
?>
<div id="top">
        <div id="login">
            <?php
                if ($db->numRows() >0){
                    $_SESSION['username'] = $usernsme;
                    echo 'Hi '.$_SESSION['username'];
                }else{
                    echo'<form method="post" action="?">
                            <input type="hidden" name="sub" value="1"/>
                            Username
                            <input type="text" size="15" name="username"/><br>
                            Password:
                            <input type="password" size="15" name="password"/><br>
                            <input type="submit" value="Login"/>
                         </form>';
                }
            ?>
        </div>
    <div id="top_container">
        <div id="heading">
            bodan digital
        </div>
        <div id="slogan">
            music production
        </div>
    </div>
    <div id="top_base">
        <div id="top_menu">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="download.php">Downloads</a>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
