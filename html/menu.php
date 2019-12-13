<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<nav id="menu">

<<<<<<< HEAD
    <div id="menu-bar">
        <!-- LOGIN -->
        <div class="login"><a href="user.php">Login</a></div>
        <div id="search-container"><input id="search-data" type="text" placeholder="Search"/>
            <div id="search-result-container"></div>
        </div>
        <div class="banner"><img id ="banner"src="../img/Sports-Sweden-full-logo.png"></div>
        <div class="home"><a href="homepage.php"><img id="homepage-icon" src="../img/homepage-icon.png"></a></div>
        <div class="category"><a href="category.php">Catalog</a> </div>
        <div class="about-us"><a href="about-us.php">About us</a></div>
    </div>
=======
    <ul id="menu-bar">
        <li><a href="homepage.php"><img class="menu-logo" src="../img/Sports-Sweden-full-logo.png"></a></li>
            <li><a href="category.php">Catalog</a> </li>
            <li><a href="about-us.php">About us</a></li>
        <?php
            if(isset($_SESSION['role'])){

            }else{
                echo "<li><a href='user.php'>Login</a></li>";
            }
        ?>
            <li id="search-container"><input id="search-data" type="text" placeholder="Search"/>
                <div id="search-result-container">
                </div> </li>
        </ul>
>>>>>>> welcome back to hell
</nav>
<body>
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


</script>
</body>
</html>