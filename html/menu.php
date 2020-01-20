<<<<<<< HEAD
=======
<?php
require_once "../php/imports.php";
require "../php/password_check_user.php";
require "../php/password_check_admin.php";

if (isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    header("Location: user.php");
} else if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header("Location: addnews.php");
}

if (isset($_POST['submit'])) {
    if (check_password_admin($_POST['em'], $_POST['psw'])) {
        $_SESSION['role'] = 'admin';
        $_SESSION['email'] = $_POST['em'];
        header("Location: addnews.php");
    } else if (check_password($_POST['uname'], $_POST['psw'])) {
        $_SESSION['role'] = "user";
        $_SESSION['username'] = $_POST['uname'];
        header("Location: category.php");
    } else {
        echo "<h1>Wrong username or password</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu.css">
</head>
>>>>>>> hey
<nav id="menu">

    <div id="menu-bar">
        <!-- LOGIN -->
<<<<<<< HEAD
        <?php
        //require "../php/loggedInStatus.php";
        if(isUserLoggedIn()){
            //echo "<div class='login'><a href=\"#\">".$_SESSION['username']."</a></div>";
            echo "<div class='logout'><a href='../php/logout.php'>Logout</a></div>";
        }else{
            echo '<div class="login" onclick="show_login_popup()"><a href="#">Login</a></div>';
        }
        ?>
=======
        <div class="container edvin-content">
        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        </div>>
>>>>>>> hey
        <div id="search-container"><input id="search-data" type="text" placeholder="Search"/>
            <div id="search-result-container"></div>
        </div>
        <div class="banner"><img id ="banner"src="../img/Sports-Sweden-full-logo.png"></div>
        <div class="home"><a class ="link" href="index.php"><img id="homepage-icon" src="../img/homepage-icon.png"></a></div>
        <div class="category"><a class ="link" href="category.php">Find a club</a> </div>
        <div class="about-us"><a class ="link" href="about-us.php">About us</a></div>
    </div>


<script>
    function searchData(val) {
        $('#search-result-container').show();
        $('#search-result-container').html('<div><img src="preloader.gif" width="50px;" height="50px"> <span style="font-size: 20px;">Please Wait...</span></div>');
        $.ajax({
            url: 'news_search.php',
            method: 'get',
            data: {
                'search-data': val
            },
            success: function (data) {
                $('#search-result-container').html(data)
            }
        })
    }

    $(document).ready(function () {
            $('#search-data').unbind().keyup(function (e) {
                    var value = $(this).val();
                    if (value.length > 0) {
                        searchData(value);
                    } else {
                        $('#search-result-container').hide();
                    }
                }
            );
        }
    );

    <div id="id01" class="modal">

        <form class="modal-content animate" method="post" action='#'>
        <h1>User</h1>
        <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
    title="Close Box">&times;</span>
    <img src="../img/profile.jpg" alt="Profile" class="profile">
        </div>

        <div class="container">
        <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="submit">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
        Cancel
        </button>

        <span class="psw"><a href="/sportsweden/html/register_user.php">Register</a></span>

    </div>
    </form>
    </div>

</script>
</nav>