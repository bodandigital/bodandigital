<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="styles/default.css" rel="stylesheet" type="text/css" />
        <title>Bodan Digital: Music</title>
    </head>
    <body>
        <?php require_once './lib/top.php'; ?>
        <script src="scripts/validate.js" language="javascript"></script>
        <div id="container">
            <div id="content_1">
                <div id="signupform">
                <fieldset>
                    <legend>Sign Up</legend>
                    <form id="signup" action="signup.php" method="post">
                        <table border="0">
                            <tr>
                                <td>
                                    <label>First Name</label> 
                                </td>
                                <td>
                                    <input type="text" id="firstname" name="firstname" size="20"/>
                                </td>
                                <td>
                                    <label id="firstmsg"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Last Name</label> 
                                </td>
                                <td>
                                    <input type="text" id="lastname" name="lastname" size="20"/>
                                </td>
                                <td>
                                    <label id="lastmsg"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Email</label> 
                                </td>
                                <td>
                                    <input type="text" id="email" name="email" size="30"/>
                                </td>
                                <td>
                                    <label id="emailmsg"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Username</label> 
                                </td>
                                <td>
                                    <input type="text" id="username" name="username" size="20"/>
                                </td>
                                <td>
                                    <label id="usermsg"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Password</label> 
                                </td>
                                <td>
                                    <input type="password" id="password" name="password" size="20"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>Confirm Password</label> 
                                </td>
                                <td>
                                    <input type="password" id="conpswd" name="conpswd" size="20"/>
                                </td>
                                <td>
                                    <label id="passmsg"></label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input class="button" type="button" value="Join" onclick="validate()"/>
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr>
                        </table>
                    </form>
                </div>
                </fieldset>
            </div>
        </div>
    </body>
</html>