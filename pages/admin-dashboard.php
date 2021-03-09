<?php
include('connection.php');
if ($_SESSION['admin-active'] != 1) {
    header("location: login.php");
}
if($_SESSION['role'] == "User"){
    header("location: ../index.php");
}

$conn = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
$users_active = $conn->query("SELECT * FROM users WHERE active = 1");
$query_non_active = $conn->query("SELECT * FROM users WHERE active = 0");
$query_total = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamehub | Dashboard</title>
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/admin-dashboard.min.css">
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/admin-dashboard.css">
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
    $(document).ready(function() {
        $('#example,#example2,#example3,#example4').DataTable();
        $(".modal").css("visibility", "hidden");
        $(".modal").css("opacity", "0");
    });

    $(".modal__close").on('click', function() {
        window.location.href = "admin-dashboard.php";
    });
    $(window).on('beforeunload', function() {
        $(window).scrollTop(0);
    });

    function UserCreateModal() {
        $("#create-user-modal").css("visibility", "visible");
        $("#create-user-modal").css("opacity", "1");
    }

    function PostCreateModal() {
        $("#create-post-modal").css("visibility", "visible");
        $("#create-post-modal").css("opacity", "1");
    }

    function UserEditModalData(id) {
        $("#edit-user-modal").css("visibility", "visible");
        $("#edit-user-modal").css("opacity", "1");
        $.ajax({
            url: 'modal-pages/get-user-data.php',
            type: 'get',
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $('input[name ="edit-user-id"]').val(data.id).attr("value", data.id);
                $('input[name ="edit-user-full_name"]').val(data.full_name).attr("value", data.full_name);
                $('input[name ="edit-user-username"]').val(data.username).attr("value", data.username);
                $('input[name ="edit-user-email"]').val(data.email).attr("value", data.email);
                $('input[name ="edit-user-password"]').val(data.password).attr("value", data.password);
            }
        });
    }

    function PostsEditModalData(id) {
        $("#edit-post-modal").css("visibility", "visible");
        $("#edit-post-modal").css("opacity", "1");
        $.ajax({
            url: 'modal-pages/get-posts-data.php',
            type: 'get',
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $('input[name ="edit-post-id"]').val(data.id).attr("value", data.id);
                $('input[name ="edit-post-title"]').val(data.title).attr("value", data.title);
                $('input[name ="edit-post-author"]').val(data.author).attr("value", data.author);
                $('input[name ="edit-post-author"]').val(data.author).attr("value", data.author);
                $('textarea[name ="edit-post-content"]').val(data.content).attr("value", data.content);
            }
        });
    }

    function EmailEditModalData(id) {
        $("#edit-contact-modal").css("visibility", "visible");
        $("#edit-contact-modal").css("opacity", "1");
        $.ajax({
            url: 'modal-pages/get-contact-data.php',
            type: 'get',
            data: {
                id: id
            },
            dataType: "JSON",
            success: function(data) {
                $('input[name ="edit-contact-id"]').val(data.id).attr("value", data.id);
                $('input[name ="edit-contact-checked"]').val(data.checked).attr("value", data.checked);
                $('textarea[name ="edit-contact-message"]').val(data.message).attr("value", data.message);
            }
        });
    }
    </script>
    <?php if(isset($_SESSION["pass_error"])): ?>
    <script type="text/javascript">
    toastr.success("<?php echo $_SESSION["pass_error"];?>");
    </script>
    <?php endif; unset($_SESSION["pass_error"]);?>
    <style>
    .checked-button {
        border: none;
        outline: none;
        background: transparent;
        display: flex;
        justify-content: center;
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="admin-dashboard.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="login.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="register.php" class="nav-link">Register</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="modal-pages/change-password.php" class="nav-link">Change Password</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="admin-dashboard.php?logout='1'" class="nav-link">Logout</a>
                </li>
                <li>
                    <?php if(isset($_SESSION['useredit'])) 
                    {
                        echo $_SESSION['useredit'];
                    }
                    ?>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="admin-dashboard.php" class="brand-link">
                <img src="/Web-Gaming-News/images/MainLogo.png" width="200" height="100">
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="info" style="padding:0px 5px 5px 10px">
                        <a href="#" class="d-block" style="color:#fff">
                            <?php echo $_SESSION['full_name']; ?>
                        </a>
                    </div>
                </div>
            </div>
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="accordion-container">
                    <details-accordion aria-role="region" aria-labelledby="h-details-accordion">
                        <details open>
                            <summary aria-describedby="">Users</summary>
                            <!--#region User Counts -->
                            <section class="content" style="margin:0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $users_active->num_rows;
                                                        ?>
                                                    </h3>
                                                    <p>Active Users</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $query_non_active->num_rows;
                                                        ?><sup style="font-size: 20px"></sup>
                                                    </h3>
                                                    <p>Deleted Users</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $query_total->num_rows;
                                                        ?><sup style="font-size: 20px"></sup>
                                                    </h3>
                                                    <p>Total Users</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-list fa-1x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--#endregion -->
                            <div>
                                <section class="content" style="margin-bottom:1%">
                                    <div class="container-fluid">
                                        <div class="col-md-6" style="max-width:100%;padding-bottom:1%">
                                            <a class="btn btn-lg btn-success" id="create-user-btn"
                                                onclick="UserCreateModal()" href="#create-user-modal"
                                                style="margin-bottom:1%">Add new Users</a>
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <table id="example"
                                                        class="table table-striped table-bordered dt-responsive nowrap"
                                                        style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Full Name</th>
                                                                <th>Username</th>
                                                                <th>Email</th>
                                                                <th>Password</th>
                                                                <th>Role</th>
                                                                <th>Active</th>
                                                                <th>Modify</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($query_total as $item) : ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $item['full_name']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $item['username']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $item['email']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $item['password']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                        echo $item['role'];
                                                                        ?>
                                                                </td>
                                                                <td style="width:1%;text-align:center">
                                                                    <form method="post" action="admin-dashboard.php">
                                                                        <input type="hidden" name="id"
                                                                            value=" <?php echo $item['id'] ?> ">
                                                                        <?php
                                                                            if ($item['active'] == 0) {
                                                                                echo '<button type="submit" name="active-change" value="1" id="red-green" style="border:none;outline:none;background:transparent"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;"></i></button>';
                                                                                echo '<button type="submit" name="active-change" value="0" id="red-green-active" style="border:none;outline:none;background:transparent"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;display:none"></i></button>';
                                                                            } else {
                                                                                echo '<button type="submit" name="active-change" value="0" id="green-red" style="border:none;outline:none;background:transparent"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></button>';
                                                                                echo '<button type="submit" name="active-change" value="1" id="green-red-active" style="border:none;outline:none;background:transparent"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;display:none;"></i></button>';
                                                                            }
                                                                            if ($item['id'] == $_SESSION['id']) {
                                                                                echo '<b><p style="color:red">ACCOUNT IN USE</p></b>';
                                                                            }
                                                                            ?>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-info"
                                                                        onclick="UserEditModalData(<?php echo $item['id']; ?>);"
                                                                        id="edit-user-button"
                                                                        href="#edit-user-modal">Edit</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                </div>
                </details>
                </details-accordion>
            </div>
            <?php
            #POSTS
            $posts_active = $conn->query("SELECT * FROM posts WHERE active = 1");
            $posts_non_active = $conn->query("SELECT * FROM posts WHERE active = 0");
            $posts_total = $conn->query("SELECT * FROM posts");
            ?>

            <div>
                <div class="accordion-container">
                    <details-accordion aria-role="region" aria-labelledby="h-details-accordion">
                        <details open>
                            <summary aria-describedby="">Posts</summary>
                            <section class="content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $posts_active->num_rows ?>
                                                    </h3>
                                                    <p>Posts Active</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $posts_non_active->num_rows ?>
                                                    </h3>
                                                    <p>Deleted Posts</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                    <h3>
                                                        <?php echo $posts_total->num_rows ?>
                                                    </h3>
                                                    <p>Total Posts</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-list"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div>
                                <section class="content">
                                    <div class="container-fluid">
                                        <div class="col-md-6" style="max-width:100%;padding-bottom:1%">
                                            <a class="btn btn-lg btn-success" id="create-posts-btn"
                                                onclick="PostCreateModal()" href="#create-post-modal"
                                                style="margin-bottom:1%">Add new Posts</a>
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <table id="example3"
                                                        class="table table-striped table-bordered dt-responsive nowrap"
                                                        style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Author</th>
                                                                <th>Created By</th>
                                                                <th>Active</th>
                                                                <th>Modify</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($posts_total as $item) : ?>
                                                            <tr>
                                                                <?php
                                                                    $this_id = $item['created_by'];
                                                                    $user_result = $conn->query("SELECT * FROM users WHERE id=$this_id");
                                                                    if (mysqli_num_rows($user_result) > 0) {
                                                                        $row = mysqli_fetch_assoc($user_result);
                                                                        $find_user_name = $row['full_name'];
                                                                    }
                                                                    ?>
                                                                <td>
                                                                    <?php echo $item['title']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $item['author']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $find_user_name ?>
                                                                </td>
                                                                <td style="width:1%;text-align:center">
                                                                    <form method="post" action="admin-dashboard.php">
                                                                        <input type="hidden" name="id"
                                                                            value="<?php echo $item['id'] ?> ">
                                                                        <?php
                                                                            if ($item['active'] == 0) {
                                                                                echo '<button type="submit" name="post-active-change" value="1" id="red-green" style="border:none;outline:none;background:transparent"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;"></i></button>';
                                                                                echo '<button type="submit" name="post-active-change" value="0" id="red-green-active" style="border:none;outline:none;background:transparent"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;display:none"></i></button>';
                                                                            } else {
                                                                                echo '<button type="submit" name="post-active-change" value="0" id="green-red" style="border:none;outline:none;background:transparent"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></button>';
                                                                                echo '<button type="submit" name="post-active-change" value="1" id="green-red-active" style="border:none;outline:none;background:transparent"><i class="fa fa-times-circle" aria-hidden="true" style="color:red;display:none;"></i></button>';
                                                                            }
                                                                            ?>
                                                                    </form>
                                                                </td>
                                                                <td>
                                                                    <a class="btn btn-info"
                                                                        onclick="PostsEditModalData(<?php echo $item['id']; ?>);"
                                                                        id="post-user-button"
                                                                        href="#edit-post-modal">Edit</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </details>
                    </details-accordion>
                </div>
            </div>
            <div>
                <?php
                #Email-s
                $email_checked = $conn->query("SELECT * FROM contact_request WHERE checked = 1");
                $email_non_checked = $conn->query("SELECT * FROM contact_request WHERE checked = 0");
                $email_total = $conn->query("SELECT * FROM contact_request");
            ?>
                <div class="accordion-container">
                    <details-accordion aria-role="region" aria-labelledby="h-details-accordion">
                        <details open>
                            <summary aria-describedby="">Contact Emails</summary>
                            <!--#region User Counts -->
                            <section class="content" style="margin:0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $email_checked->num_rows;
                                                        ?>
                                                    </h3>
                                                    <p>Checked Emails</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-warning">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $email_non_checked->num_rows;
                                                        ?><sup style="font-size: 20px"></sup>
                                                    </h3>
                                                    <p>Unchecked Emails</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-info">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $email_total->num_rows;
                                                        ?><sup style="font-size: 20px"></sup>
                                                    </h3>
                                                    <p>Total Emails</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-list fa-1x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--#endregion -->
                            <div>
                                <section class="content" style="margin-bottom:1%">
                                    <div class="container-fluid">
                                        <div class="col-md-6" style="max-width:100%;padding-bottom:1%">
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <table id="example"
                                                        class="table table-striped table-bordered dt-responsive nowrap"
                                                        style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Full Name</th>
                                                                <th>Email</th>
                                                                <th>Date</th>
                                                                <th>Checked</th>
                                                                <th>Modify</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($email_total as $item) : ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $item['name']; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $item['email']; ?>
                                                                </td>
                                                                <td><?php echo $item['date_of_register'];?></td>
                                                                <td style="width: 7%;">
                                                                    <?php   
                                                                        if($item['checked'] == 1){
                                                                            echo '<a class="checked-button"><i class="fa fa-check-circle" aria-hidden="true" style="color:green;"></i></a>';
                                                                        }else{
                                                                            echo '<a class="checked-button"><i class="fa fa-check-circle" aria-hidden="true" style="color:red;"></i></a>';
                                                                        }
                                                                        ?>
                                                                </td>
                                                                <td style="width: 7%;">
                                                                    <a class="btn btn-info"
                                                                        onclick="EmailEditModalData(<?php echo $item['id']; ?>);"
                                                                        href="#edit-contact-modal">Edit</a>
                                                                </td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                </div>
                </details>
                </details-accordion>
            </div>
            <div>
                <?php
                #Bug Reports
                $bugs = $conn->query("SELECT * FROM bug_reports");
            ?>
                <div class="accordion-container">
                    <details-accordion aria-role="region" aria-labelledby="h-details-accordion">
                        <details open>
                            <summary aria-describedby="">Bug Reports</summary>
                            <!--#region User Counts -->
                            <section class="content" style="margin:0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-3 col-6">
                                            <div class="small-box bg-success">
                                                <div class="inner">
                                                    <h3>
                                                        <?php
                                                        echo $bugs->num_rows;
                                                        ?>
                                                    </h3>
                                                    <p>Total Reported Bugs</p>
                                                </div>
                                                <div class="icon">
                                                    <i class="fa fa-check"></i>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--#endregion -->
                            <div>
                                <section class="content" style="margin-bottom:1%">
                                    <div class="container-fluid">
                                        <div class="col-md-6" style="max-width:100%;padding-bottom:1%">
                                            <div class="card">
                                                <div class="card-body p-2">
                                                    <table id="example"
                                                        class="table table-striped table-bordered dt-responsive nowrap"
                                                        style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Game</th>
                                                                <th>Bug Type</th>
                                                                <th>Message</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($bugs as $item) : ?>
                                                            <tr>
                                                                <td>
                                                                    <?php echo $item['game_name']; ?>
                                                                </td>
                                                                <?php
                                                                    $bug_id = $item['type_id'];
                                                                    $find_type_id=0;
                                                                    $result = $conn->query("SELECT * FROM bug_type WHERE type_id=$bug_id");
                                                                    if (mysqli_num_rows($result) > 0) {
                                                                        $row = mysqli_fetch_assoc($result);
                                                                        $find_type_id = $row['description'];
                                                                    }
                                                                    ?>
                                                                <td>
                                                                    <?php echo $find_type_id; ?>
                                                                </td>
                                                                <td style="width:65%"><?php echo $item['message'];?></td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                     </div>
                    </details>
                </details-accordion>
            </div>
        </div>

        <!--#region User Create -->
        <div id="create-user-modal" class="modal">
            <div class="modal__content">
                <a type="button" class="close" href="">
                    <span aria-hidden="true">&times;</span>
                </a>
                <h1>Add new User</h1>
                <hr>
                <form method="post" action="admin-dashboard.php" id="registerform2" enctype="multipart/form-data">
                    <input type="hidden" name="id">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" name="add_full_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="add_username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="add_email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" name="add_password">
                    </div>
                    <div class="animation a4" style="margin-top:2%;">
                        <input id="r1" type="radio" value="1" name="add_role">
                        <label for="r1">User</label>
                        <input id="r2" type="radio" value="2" name="add_role" checked>
                        <label for="r2">Admin</label>
                    </div>
                    <button type="submit" name="addnew" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
        <!--#endregion-->

        <!--#region User Edit -->
        <div id="edit-user-modal" class="modal">
            <div class="modal__content">
                <a type="button" class="close" href="">
                    <span aria-hidden="true">&times;</span>
                </a>
                <hs>Edit</h1>
                    <hr>
                    <form method="post" action="admin-dashboard.php" id="registerform">
                        <input type="hidden" name="edit-user-id">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="edit-user-full_name">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="edit-user-username">
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="edit-user-email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" name="edit-user-password">
                        </div>
                        <div class="animation a4" style="margin-top:2%;">
                            <input id="r1" type="radio" name="edit-user-role" value="User">
                            <label for="r1">User</label>
                            <input id="r2" type="radio" name="edit-user-role" value="Admin" checked>
                            <label for="r2">Admin</label>
                        </div>
                        <button type="submit" name="edit-user" class="btn btn-success">Modify</button>
                    </form>
            </div>
        </div>
        <!--#endregion-->

        <!--#region Post Create -->
        <div id="create-post-modal" class="modal">
            <div class="modal__content">
                <a type="button" class="close" href="">
                    <span aria-hidden="true">&times;</span>
                </a>
                <h1>Add new Post</h1>
                <hr>
                <form name="form" method="post" action="admin-dashboard.php" id="registerform3"
                    enctype="multipart/form-data">
                    <input type="hidden" name="post-create-id" value="">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="add_post_title">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="add_post_author">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" class="form-control" name="add_post_content">
                    </div>
                    <div class="form-group">
                        <label>Upload Image For Post</label>
                        <input type="file" name="my_file" /><br /><br />
                    </div>
                    <button type="submit" name="add_new_post" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
        <!--#endregion-->

        <!--#region Post Edit -->
        <div id="edit-post-modal" class="modal">
            <div class="modal__content">
                <a type="button" class="close" href="">
                    <span aria-hidden="true">&times;</span>
                </a>
                <h1>Edit</h1>
                <hr>
                <form method="post" action="admin-dashboard.php">
                    <input type="hidden" name="edit-post-id">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="edit-post-title">
                    </div>
                    <div class="form-group">
                        <label>Author</label>
                        <input type="text" class="form-control" name="edit-post-author">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="edit-post-content"></textarea>
                    </div>
                    <div class="form-group">
                        <?php
                        $this_id = $_SESSION["post_edit_created_by"];
                        $user_result = $conn->query("SELECT * FROM users WHERE id=$this_id");
                        if (mysqli_num_rows($user_result) > 0) {
                            $row = mysqli_fetch_assoc($user_result);
                            $find_user_name = $row['full_name'];
                        }
                        ?>
                        <label>Created By</label>
                        <input type="text" readonly="readonly" class="form-control" name="edit-post-created_by"
                            value="<?php echo $find_user_name;?>">
                    </div>
                    <button type="submit" name="post_edit">Modify</button>
                </form>
            </div>
        </div>
        <!--#endregion-->

        <!--#region Contact Email Edit -->
        <div id="edit-contact-modal" class="modal">
            <div class="modal__content">
                <a type="button" class="close" href="">
                    <span aria-hidden="true">&times;</span>
                </a>
                <h1>Edit</h1>
                <hr>
                <form method="post" action="admin-dashboard.php">
                    <input type="hidden" name="edit-contact-id">
                    <label>Checked</label>
                    <div class="form-group">
                        <div>
                            <label>True</label>
                            <input type="radio" class="" name="checked" value="1">
                        </div>
                        <div>
                            <label>False</label>
                            <input type="radio" class="" name="checked" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" name="edit-contact-message" readonly="readonly"></textarea>
                    </div>
                    <button type="submit" name="email_contact_post" class="btn btn-success">Modify</button>
                </form>
            </div>
        </div>
        <!--#endregion-->

        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
        <script type="text/javascript">
        $("#registerform2").validate({
            rules: {
                add_username: {
                    required: true,
                    minlength: 5
                },
                add_password: {
                    required: true,
                    minlength: 5
                },
                add_email: {
                    required: true,
                    email: true,
                },
                add_full_name: {
                    required: true,
                }
            }
        });
        $("#registerform3").validate({
            rules: {
                add_post_title: {
                    required: true,
                    minlength: 5
                },
                add_post_author: {
                    required: true,
                    minlength: 5
                },
                add_post_content: {
                    required: true,
                    minlength: 5
                },
                my_file: {
                    required: true,
                },
            }
        });
        $("#red-green").click(function(e) {
            $(this).hide();
            $()
        });
        $("#create-user-btn").click(function(e) {
            $("#create-user-modal").css("visibility", "visible");
            $("#create-user-modal").css("opacity", "1");
        });
        $("#create-post-btn").click(function(e) {
            $("#create-post-modal").css("visibility", "visible");
            $("#create-post-modal").css("opacity", "1");
        });
        </script>

</body>

</html>