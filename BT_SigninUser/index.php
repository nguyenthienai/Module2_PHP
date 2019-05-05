  
<!DOCTYPE HTML>
<html>
    <head>
    <title>Sign in User</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <?php
        include "convertsJsonDataIntoArray.php";
        include "saveDataInJSONFile.php";
        include "checkEmptyAndValidateMail.php";
        ?>
        <div>
            <h2>Registration Form</h2>
            <form method="post">
                <fieldset>
                    <legend>Details</legend>
                    Name: <input type="text" name="name" value="<?php echo $name; ?>">
                    <span class="error">* <?php echo $nameErr; ?></span>
                    <br><br>
                    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
                    <span class="error">* <?php echo $emailErr; ?></span>
                    <br><br>
                    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>">
                    <span class="error">*<?php echo $phoneErr; ?></span>
                    <br><br>
                    <input type="submit" name="submit" value="Register">
                    <p><span class="error">* required field.</span></p>
                </fieldset>
            </form>
        </div>
        <?php include "printRegistratorList.php"; ?>
        </table>
    </body>
</html>
