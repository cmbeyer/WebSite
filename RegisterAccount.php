<?php

if(!empty($_GET["register-user"])) {
    /* Form Required Field Validation */
    foreach($_GET as $key=>$value) {
        if(empty($_GET[$key])) {
            $error_message = "All Fields are required";
            break;
        }
    }
    /* Password Matching Validation */
    if($_GET['password'] != $_GET['confirm_password']){
        $error_message = 'Passwords should be same<br>';
    }

    /* Email Validation */
    if(!isset($error_message)) {
        if (!filter_var($_GET["userEmail"], FILTER_VALIDATE_EMAIL)) {
            $error_message = "Invalid Email Address";
        }
    }

    /* Validation to check if gender is selected */
    if(!isset($error_message)) {
        if(!isset($_GET["gender"])) {
            $error_message = " All Fields are required";
        }
    }


    /* Validation to check if Terms and Conditions are accepted */
    if(!isset($error_message)) {
        if(!isset($_GET["terms"])) {
            $error_message = "Accept Terms and Conditions to Register";
        }
    }

    /*
    $_SESSION["firstName"]=$_GET['firstName'];
    $_SESSION["lastname"]=$_GET['lastName'];
    $_SESSION["userName"]=$_GET['userName'];
    $_SESSION["password"]=$_GET['password'];
    $_SESSION["userPhone"]=$_GET['userPhone'];
    $_SESSION["userDOB"]=$_GET['userDOB'];

    header("Location: registerbackend.php");

    die();
    */

    //to use a hashes on the passwords use this:  md5($_POST["password"])


}
?>
<?php include 'header.php';?>
<div class="third">
    <div id="main-cont" class="third-content" align="center">
<article>
    <section>
        <form name="RegisterAccount" method="post" action="registerbackend.php">
            <table border="0" width="500" align="center" class="demo-table">
                <?php if(!empty($success_message)) { ?>
                    <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
                <?php } ?>
                <?php if(!empty($error_message)) { ?>
                    <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
                <?php } ?>
                <tr>
                    <td>User Name</td>
                    <td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_GET['userName'])) echo $_GET['userName']; ?>"></td>
                </tr>

                <tr>
                    <td>First Name</td>
                    <td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_GET['firstName'])) echo $_GET['firstName']; ?>"></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_GET['lastName'])) echo $_GET['lastName']; ?>"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" class="demoInputBox" name="password" value=""></td>
                </tr>

                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_GET['userEmail'])) echo $_GET['userEmail']; ?>"></td>
                </tr>

                <tr>
                    <td>Cell Phone Number (xxx-xxx-xxxx)</td>
                    <td><input type="tel" pattern="^\d{10}$" class="demoInputBox" name="userPhone" value="<?php if(isset($_GET['userPhone'])) echo $_GET['userPhone']; ?>"></td>
                </tr>

                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" class="demoInputBox"  name="userDOB" value="<?php if(isset($_GET['userDOB'])) echo $_GET['userDOB']; ?>"></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="gender" value="M" <?php if(isset($_GET['gender']) && $_GET['gender']=="M") { ?>checked<?php  } ?>> Male
                        <input type="radio" name="gender" value="F" <?php if(isset($_GET['gender']) && $_GET['gender']=="F") { ?>checked<?php  } ?>> Female
                    </td>
                </tr>

                <tr>
                    <td colspan=2>
                        <input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
                </tr>
            </table>
        </form>
    </section>
</article>
    </div>
</div>


<?php include 'footer.php'; ?>
