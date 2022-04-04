<?php
    include "database.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Library Management System</title>
    <link rel="stylesheet" href="assets/css/style.css" />

</head>

<body>
    <div id="container">
        <div id="header">
            <h1>E-Library Management System</h1>
        </div>
        <div id="wrapper">
            <h2>Admin Login Here</h2>
            <div id="form_control">
                <?php
                if(isset($_POST["submit"]))
                {
                    $sql="SELECT * FROM admin WHERE ANAME='{$_POST["admin_user"]}' and APASS='{$_POST["admin_pass"]}'";
                    $res=$db->query($sql);


                }
                ?>
                <form action="admin_login.php" method="post">
                    <label>Username</label>
                    <input type="text" placeholder="Enter Username" name="admin_user" required>
                    <label>Passowrd</label>
                    <input type="password" placeholder="Enter Password" name="admin_pass" required>
                    <button type="submit" name="submit">Login Here</button>
                </form>
            </div>
        </div>
        <div id="navi">
            <?php
            include "assets/nav/admin-sideBar.php"
            ?>
        </div>
        <div id="footer">
            <p>Copyright &copy; Aadhil 2022</p>
        </div>
    </div>
</body>

</html>