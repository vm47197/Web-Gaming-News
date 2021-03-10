<?php 
$con = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $full_name = mysqli_real_escape_string($con,$_POST['full_name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $role = mysqli_real_escape_string($con,$_POST['role']);
    $active = true;
    if($role == 1){
        $mainrole = "User";
    }
    else if($role == 2){
        $mainrole = "Admin";
    }
        $sql = "INSERT INTO users (username,full_name,email,password,role,active) VALUES ('$username','$full_name','$email','$password','$mainrole','$active')";
        mysqli_query($con,$sql);
        unset($_SESSION['username']);
        unset($_SESSION['full_name']);
        unset($_SESSION['role']);
        $_SESSION['username'] = $username;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['role'] = $role;
        header('location: login.php');
} 

if(isset($_POST['addnew'])){
    $username = mysqli_real_escape_string($con,$_POST['add_username']);
    $full_name = mysqli_real_escape_string($con,$_POST['add_full_name']);
    $email = mysqli_real_escape_string($con,$_POST['add_email']);
    $password = mysqli_real_escape_string($con,$_POST['add_password']);
    $role = mysqli_real_escape_string($con,$_POST['add_role']);
    $active = true;
    if($role == 1){
        $mainrole = "User";
    }
    else if($role == 2){
        $mainrole = "Admin";
    }
        $sql = "INSERT INTO users (username,full_name,email,password,role,active) VALUES ('$username','$full_name','$email','$password','$mainrole','$active')";
        mysqli_query($con,$sql);
        header('location: admin-dashboard.php');
} 
if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $query="SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['admin-active'] = $row['active'];
        $_SESSION['email'] = $row['email'];
        if($_SESSION['role'] == "Admin"){
            header('Location: admin-dashboard.php');
        }else if($_SESSION['role'] == "User"){
            header('Location: ../index.php');
        }
    }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    unset($_SESSION['role']);
    unset($_SESSION['full_name']);
    unset($_SESSION['id']);
    unset($_SESSION['active']);
    unset($_SESSION['email']);
    header('location: login.php');
}

if(isset($_POST['edit-user'])){
    $id = mysqli_real_escape_string($con,$_POST['edit-user-id']);
    $full_name = mysqli_real_escape_string($con,$_POST['edit-user-full_name']);
    $username = mysqli_real_escape_string($con,$_POST['edit-user-username']);
    $email = mysqli_real_escape_string($con,$_POST['edit-user-email']);
    $password = mysqli_real_escape_string($con,$_POST['edit-user-password']);
    $role = mysqli_real_escape_string($con,$_POST['edit-user-role']);
    if($role == 1){
        $mainrole = "User";
    }
    else if($role == 2){
        $mainrole = "Admin";
    }
    $sql = "UPDATE users SET username='$username',full_name='$full_name',email='$email',password='$password',role='$role' WHERE id='$id'";
    $_SESSION['id'] = $id ;
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;
    $_SESSION['full_name'] = $full_name;
    $_SESSION['email'] = $email;
    mysqli_query($con,$sql);
}

if(isset($_POST['active-change'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $active = mysqli_real_escape_string($con,$_POST['active-change']);
    unset($_SESSION['active']);
    $sql = "UPDATE users SET active='$active' WHERE id='$id'";
    mysqli_query($con,$sql);
    $mainId = $_SESSION['id'];
    $query="SELECT * FROM users WHERE id='$mainId'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['admin-active'] = $row['active'];
        
    }
}

if(isset($_POST['post_edit'])){
    $id = mysqli_real_escape_string($con,$_POST['edit-post-id']);
    $title = mysqli_real_escape_string($con,$_POST['edit-post-title']);
    $author = mysqli_real_escape_string($con,$_POST['edit-post-author']);
    $content = mysqli_real_escape_string($con,$_POST['edit-post-content']);
    
    $sql = "UPDATE posts SET title='$title',author='$author',content='$content' WHERE id='$id'";
    mysqli_query($con,$sql);
}
if(isset($_POST['post-active-change'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $active = mysqli_real_escape_string($con,$_POST['post-active-change']);
    unset($_SESSION['active']);
    $sql = "UPDATE posts SET active='$active' WHERE id='$id'";
    mysqli_query($con,$sql);
}
if (isset($_POST['add_new_post'])) {
    $title = mysqli_real_escape_string($con, $_POST['add_post_title']);
    $author = mysqli_real_escape_string($con, $_POST['add_post_author']);
    $content = mysqli_real_escape_string($con, $_POST['add_post_content']);
    $created_by =  mysqli_real_escape_string($con, $_POST['post-create-id']);
    $active = true;
    if (($_FILES['my_file']['name'] != "")) {
        $target_dir = "../images/";
        $file = $_FILES['my_file']['name'];
        $path = pathinfo($file);
        $filename =uniqid().$path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['my_file']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;
        
        if (file_exists($path_filename_ext)) {
            echo "Sorry, file already exists.";
        } else {
            move_uploaded_file($temp_name,$path_filename_ext);
            echo "Congratulations! File Uploaded Successfully.";
        }
    }
    $sql = "INSERT INTO posts (title,author,content,created_by,image,active) VALUES ('$title','$author','$content','$created_by','$filename.$ext','$active')";
        mysqli_query($con, $sql);
        header('location: admin-dashboard.php');
}
if(isset($_POST['change_pass'])){
    $id = mysqli_real_escape_string($con,$_POST['id']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $role = mysqli_real_escape_string($con,$_POST['role']);
    $lastPass = mysqli_real_escape_string($con,$_POST['lastPass']);
    $newPass = mysqli_real_escape_string($con,$_POST['newPass']);
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['password'] == $lastPass){
            $this_id = $row['id'];
            $sql = "UPDATE users SET password='$newPass' WHERE id='$this_id'";
            mysqli_query($con,$sql);
            $_SESSION["pass_error"] = "Password Successfully Changed";
            if($role == "Admin"){
                header('location: /Web-Gaming-News/pages/admin-dashboard.php');
            }
            if($role == "User"){
                header('location: /Web-Gaming-News/index.php');
            }
        }
        else{
            $_SESSION['pass_error'] = "Last Password does not match the records!!";
        }
    }
}

if(isset($_POST['contact'])){
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $message = mysqli_real_escape_string($con,$_POST['message']);
    $datetime = date('Y-m-d');
    $checked = false;
    $sql = "INSERT INTO `contact_request` (`id`, `name`, `email`, `message`, `checked`,`date_of_register`) VALUES (NULL, '$name', '$email', '$message', '$checked', '$datetime');";
    $VAR = mysqli_query($con,$sql);
    if($VAR == 1){
        $_SESSION['contact_success'] = "Email Sent Successfully";
        header('location: /Web-Gaming-News/index.php');
    }
    else{
        unset($_SESSION['contact_success']);
    }
}

if(isset($_POST['email_contact_post'])){
    $id = mysqli_real_escape_string($con,$_POST['edit-contact-id']);
    $checked = mysqli_real_escape_string($con,$_POST['checked']);
    $sql = "UPDATE contact_request SET checked='$checked' WHERE id='$id'";
    mysqli_query($con,$sql);
}

if(isset($_POST['addbug'])){
    $game = mysqli_real_escape_string($con,$_POST['game']);
    $bug_type = mysqli_real_escape_string($con,$_POST['bug_type']);
    $message = mysqli_real_escape_string($con,$_POST['message']);
    $sql = "INSERT INTO bug_reports (type_id,game_name,message) VALUES ('$bug_type','$game','$message')";
    mysqli_query($con,$sql);
    header('location: games.php');
} 

?>