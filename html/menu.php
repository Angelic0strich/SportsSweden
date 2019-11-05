<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/menu.css">
</head>
<nav id="menu">

    <ul id="menu-bar">
        <li><a href="homepage.php"><img class="menu-logo" src="../img/Sports-Sweden-full-logo.png"></a></li>
            <li><a href="category.php">Catalog</a> </li>
            <li><a href="about-us.php">About us</a></li>
            <li><a href="user.php">Login</a></li>
            <li id="search-container"><input id="search-data" type="text" placeholder="Search"/>
                <div id="search-result-container">
                </div> </li>
        </ul>
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