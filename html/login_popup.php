<div id="id01" class="modal" style="display:none">
    <form class="modal-content animate" method="post" action='./login.php'>
        <h1>User</h1>
        <?php
        if (isLoginSuccess() === false) {
            echo "<h1 style='color: red'> Invalid username or password </h1>";
            echo "<script> show_login_popup()</script>";
        }
        ?>

        <div id="popup"class="container">
            <div>
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" id="uname" required>
            </div>

            <div>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
            </div>

            <button type="submit" name="submit">Login</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="hide_login_popup()" class="cancelbtn">
                Cancel
            </button>

            <span class="psw"><a href="../html/register_user.php">Register</a></span>

        </div>
    </form>
</div>
