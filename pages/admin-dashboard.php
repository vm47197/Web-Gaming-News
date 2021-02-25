<?php
include('connection.php');
if ($_SESSION['admin-active'] != 1) {
    header("location: login.php");
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
    <title>Gamehub / Dashboard</title>
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/admin-dashboard.min.css">
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example,#example2,#example3,#example4').DataTable();
        });
    </script>
    <style>
        .accordion-container {
            width: 96%;
            margin-left: auto;
            margin-right: auto;
        }

        .error {
            color: red;
            font-weight: 500 !important;
        }

        *:focus-visible {
            border-radius: 4px;
            -webkit-animation-name: showFocus;
            animation-name: showFocus;
            -webkit-animation-duration: 0.32s;
            animation-duration: 0.32s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        *:focus {
            outline: none;
        }

        details {
            margin-bottom: 8px;
            background: #fff;
            border-radius: 4px;
        }

        summary {
            position: relative;
            padding: 24px 24px 24px 56px;
            font-weight: 600;
            cursor: pointer;
            list-style-type: none;
            font-size: 24px;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        details[open]>div {
            opacity: 0;
            -webkit-animation-name: showContent;
            animation-name: showContent;
            -webkit-animation-duration: 0.6s;
            animation-duration: 0.6s;
            -webkit-animation-delay: 0.16s;
            animation-delay: 0.16s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        details summary:after {
            content: "";
            position: absolute;
            margin-top: 2px;
            left: 24px;
            width: 8px;
            height: 8px;
            border: solid;
            border-color: #929AB9;
            border-width: 0 2px 2px 0;
            -webkit-animation-name: flipArrowDown;
            animation-name: flipArrowDown;
            -webkit-animation-duration: 0.32s;
            animation-duration: 0.32s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        details[open] summary:after {
            margin-top: 6px;
            -webkit-animation-name: flipArrowUp;
            animation-name: flipArrowUp;
            -webkit-animation-duration: 0.24s;
            animation-duration: 0.24s;
            -webkit-animation-fill-mode: forwards;
            animation-fill-mode: forwards;
        }

        @-webkit-keyframes showFocus {
            from {
                box-shadow: none;
            }

            to {
                box-shadow: 0 0 0 2px #303859;
            }
        }

        @keyframes showFocus {
            from {
                box-shadow: none;
            }

            to {
                box-shadow: 0 0 0 2px #303859;
            }
        }

        @-webkit-keyframes showContent {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes showContent {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes flipArrowUp {
            100% {
                transform: rotate(-135deg);
            }
        }

        @keyframes flipArrowUp {
            100% {
                transform: rotate(-135deg);
            }
        }

        @-webkit-keyframes flipArrowDown {
            100% {
                transform: rotate(45deg);
            }
        }

        @keyframes flipArrowDown {
            100% {
                transform: rotate(45deg);
            }
        }

        .modal {
            visibility: hidden;
            opacity: 0;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(77, 77, 77, .7);
            transition: all .4s;
        }

        .modal:target {
            visibility: visible;
            opacity: 1;
        }

        .modal__content {
            border-radius: 4px;
            position: relative;
            width: 500px;
            max-width: 90%;
            background: #fff;
            padding: 1em 2em;
        }

        .modal__close {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #585858;
            text-decoration: none;
        }

        .form {
            width: 400px;
        }

        .file-upload-wrapper {
            position: relative;
            width: 100%;
            height: 62px;
            border: 1px solid #c2c2c2;
            border-radius: 6px;
        }

        .file-upload-wrapper:after {
            content: attr(data-text);
            font-size: 18px;
            position: absolute;
            top: 0;
            left: 0;
            background: #fff;
            padding: 10px 15px;
            display: block;
            width: calc(100% - 40px);
            pointer-events: none;
            z-index: 20;
            height: 40px;
            line-height: 40px;
            color: #999;
            border-radius: 5px 10px 10px 5px;
            font-weight: 300;
        }

        .file-upload-wrapper:before {
            content: "Upload";
            position: absolute;
            top: 0;
            right: 0;
            display: inline-block;
            height: 60px;
            background: #4daf7c;
            color: #fff;
            font-weight: 700;
            z-index: 25;
            font-size: 16px;
            line-height: 60px;
            padding: 0 15px;
            text-transform: uppercase;
            pointer-events: none;
            border-radius: 0 5px 5px 0;
        }

        .file-upload-wrapper:hover:before {
            background: #3d8c63;
        }

        .file-upload-wrapper input {
            opacity: 0;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 99;
            height: 40px;
            margin: 0;
            padding: 0;
            display: block;
            cursor: pointer;
            width: 100%;
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
                    <a href="admin-dashboard.php?logout='1'" class="nav-link">Logout</a>
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
                                            <a class="btn btn-lg btn-success" href="#demo-modal2" style="margin-bottom:1%">Add new Users</a>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">User Table</h3>
                                                </div>
                                                <div class="card-body p-2">
                                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
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
                                                                            <input type="hidden" name="id" value=" <?php echo $item['id'] ?> ">
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
                                                                        <a class="btn btn-info" href="admin-dashboard.php?edit=<?php echo $item['id']; ?>#demo-modal">Edit</a>
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
                                            <a class="btn btn-lg btn-success" href="#demo-modal-post" style="margin-bottom:1%">Add new Posts</a>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title">Post Table</h3>
                                                </div>
                                                <div class="card-body p-2">
                                                    <table id="example3" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Title</th>
                                                                <th>Author</th>
                                                                <th>Content</th>
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
                                                                        <?php echo $item['content']; ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php echo $find_user_name ?>
                                                                    </td>
                                                                    <td style="width:1%;text-align:center">
                                                                        <form method="post" action="admin-dashboard.php">
                                                                            <input type="hidden" name="id" value="<?php echo $item['id'] ?> ">
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
                                                                        <a class="btn btn-info" href="admin-dashboard.php?post_edit=<?php echo $item['id']; ?>#demo-modal3">Edit</a>
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
        </div>
        <div id="demo-modal-post" class="modal">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
                <h1>Add new Post</h1>
                <hr>
                <form name="form" method="post" action="admin-dashboard.php" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id'];  ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="add_post_title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" name="add_post_author">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <input type="text" class="form-control" name="add_post_content">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Upload Image For Post</label>
                        <input type="file" name="my_file" /><br /><br />
                    </div>
                    <button type="submit" name="add_new_post" class="btn btn-success">Add</button>
                </form>
            </div>
        </div>
        <div id="demo-modal" class="modal">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
                <h1>Edit</h1>
                <hr>
                <form method="post" action="admin-dashboard.php" id="registerform">
                    <input type="hidden" name="id" value="<?php echo $_SESSION["edit_id"] ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" class="form-control" name="full_name" value="<?php echo $_SESSION["edit_full_name"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $_SESSION["edit_username"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $_SESSION["edit_email"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="text" class="form-control" name="password" value="<?php echo $_SESSION["edit_password"] ?>">
                    </div>
                    <div class="animation a4" style="margin-top:2%;">
                        <input id="r1" type="radio" name="role" value="User">
                        <label for="r1">User</label>
                        <input id="r2" type="radio" name="role" value="Admin" checked>
                        <label for="r2">Admin</label>
                    </div>
                    <button type="submit" name="edit" value="<?php echo $_SESSION["edit_id"] ?>" class="btn btn-success">Modify</button>
                </form>
            </div>
        </div>
        <div id="demo-modal2" class="modal">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
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
        <div id="demo-modal3" class="modal">
            <div class="modal__content">
                <a href="#" class="modal__close">&times;</a>
                <h1>Edit</h1>
                <hr>
                <form method="post" action="admin-dashboard.php">
                    <input type="hidden" name="post_id" value="<?php echo $_SESSION["post_edit_id"] ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="post_title" value="<?php echo $_SESSION["post_edit_title"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Author</label>
                        <input type="text" class="form-control" name="post_author" value="<?php echo $_SESSION["post_edit_author"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Content</label>
                        <input type="text" class="form-control" name="post_content" value="<?php echo $_SESSION["post_edit_content"] ?>">
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
                        <label for="exampleInputEmail1">Created By</label>
                        <input type="text" readonly="readonly" class="form-control" name="post_created_by" value="<?php echo $find_user_name ?>">
                    </div>
                    <button type="submit" name="post_edit" value="<?php echo $_SESSION["post_edit_id"] ?>" class="btn
                    btn-success">Modify</button>
                </form>
            </div>
        </div>

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
                        minlength: 2
                    }
                }
            });
            $("#registerform3").validate({
                rules: {
                    add_post_title: {
                        required: true,
                    },
                    add_post_author: {
                        required: true,
                    },
                    add_post_content: {
                        required: true,
                    },
                    file: {
                        required: true,
                    },
                }
            });
            $("#red-green").click(function(e) {
                $(this).hide();
                $()
            });
        </script>

</body>

</html>