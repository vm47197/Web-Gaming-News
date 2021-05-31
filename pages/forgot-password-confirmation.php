<?php
$con = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
$email = mysqli_real_escape_string($con, $_REQUEST['email']);
if (isset($_POST['forgot-password-change'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $newPass = mysqli_real_escape_string($con, $_POST['newPass']);
    $newConfirmPass = mysqli_real_escape_string($con, $_POST['newConfirmPass']);
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($newPass == $newConfirmPass) {
            $this_id = $row['id'];
            $sql = "UPDATE users SET password='$newPass' WHERE id='$this_id'";
            mysqli_query($con, $sql);
            $_SESSION["pass_error"] = "Password Successfully Changed";
            if ($row['role'] == "Admin") {
                header('location: /Web-Gaming-News/pages/admin-dashboard.php');
            }
            if ($row['role'] == "User") {
                header('location: /Web-Gaming-News/index.php');
            }
        } else {
            $_SESSION['forgot_confirmation_error'] = "Passwords do not match!!";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>GameHub | Change Password</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/contact.css" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
    <style>
        input {
            color: #000;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <article id="contact" style="height:75vh">
            <h2 class="major">Change Password</h2>
            <form method="post" action="forgot-password-confirmation.php">
                <div class="fields">
                    <input type="hidden" id="email" value="<?php echo $email; ?>" name="email">
                    <div class="field">
                        <label for="lastPass">New Password</label>
                        <input type="password" id="password" name="newPass">
                    </div>
                    <div class="field">
                        <label for="newPass">Confirm New Password</label>
                        <input type="password" id="password" name="newConfirmPass">
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" name="forgot-password-change" value="Submit" /></li>
                </ul>
                <?php if (isset($_SESSION['forgot_confirmation_error'])) : ?>
                    <?php if ($_SESSION['forgot_confirmation_error'] == "Password Successfully Changed") : ?>
                        <p style="color:green"><?php echo $_SESSION['forgot_confirmation_error']; ?></p>
                    <?php endif; ?>
                    <?php if ($_SESSION['forgot_confirmation_error'] == "Passwords do not match!!") : ?>
                        <p style="color:red"><?php echo $_SESSION['forgot_confirmation_error']; ?></p>
                    <?php endif; ?>
                <?php endif; ?>
            </form>

        </article>

    </div>
</body>

<script></script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Nunito', sans-serif;
        font-size: 100%;
    }

    .container {
        width: 100%;
        display: flex;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-54%);
    }

    .form {
        background: #fff;
        padding: 30px 34px;
        margin: 24px 0 0;
        min-width: 400px;
        min-height: 273px;
        border-radius: 5px;
        line-height: 24px;
        box-shadow: 3px 1px 8px rgba(255, 255, 255, .5), 3px 2px 8px rgba(0, 0, 0, .1)
    }

    .input-field {
        display: flex;
        flex-direction: column;
        gap: 5px;
        width: 100%;
        margin-bottom: 15px;
    }

    .error {
        border: 1px solid red;
    }

    input[type="email"],
    input[type="password"] {
        padding: 15px;
        border-radius: 5px;
        border: 1px solid transparent;
        background: hsl(210, 38%, 95%);
        line-height: 24px;
        outline: none;
        color: #000;
    }

    .action {
        align-items: center;
        border-color: hsl(214, 32%, 91%);
        color: hsl(220, 26%, 14%);
        display: flex;
        gap: normal;
        justify-content: flex-end;
        line-height: 24px;
        margin: 16px 0px 0px;
    }

    .action a {
        border-color: hsl(214, 32%, 91%);
        color: hsl(220, 26%, 14%);
        font-family: Nunito;
        font-size: 14px;
        gap: normal;
        line-height: 21px;
        text-transform: capitalize;
    }

    .btn {
        padding: 10px 20px;
        align-items: flex-start;
        background-color: hsl(218, 17%, 35%);
        border-color: hsla(0, 0%, 0%, 0);
        border-color: hsla(0, 0%, 0%, 0);
        border-radius: 4px;
        border-style: solid;
        border-width: 1px;
        box-shadow: hsla(0, 0%, 0%, 0.1) 0px 4px 6px -1px;
        font-size: 14px;
        font-weight: 600;
        gap: normal;
        letter-spacing: 1.4px;
        line-height: 21px;
        margin: 0px 0px 0px 16px;
        padding: 8px 16px;
        text-align: center;
        text-transform: uppercase;
        color: hsl(0, 0%, 100%);
        font-family: Nunito;
        cursor: pointer;
        transition: .2s ease-in-out;
    }

    .btn:hover {
        background: hsl(218, 17%, 24%);
    }

    a {
        text-decoration: none;
    }
</style>

</html>