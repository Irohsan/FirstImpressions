<DOCTYPE! html>

<html>

<head>
<title>
    First Impressions
    </title>
    <meta charset = "utf-8">
    <link rel = "stylesheet" type = "text/css" href="main.css">
    <link href = "https://fonts.googleapis.com.css?
                  family = Quicsand:500" rel = "stylesheet">
    <link href = "https://fonts.googleapis.com.css?
                  family = PlayFair Display" rel = "stylesheet">
    
    <script type = "text/javascript">
        window.location.redirect("index2.html")
    </script>
    
    <body>
    <nav>
        <div class = "logo" onclick="redirect()"><b>First Impressions</b></div>
            <ul>
                <li><a href = "category.html">Categories</a></li>
                <li><a href = "about.html">About</a></li>
                <?php
                    if( isset( $_COOKIE['user']))
                    {
                        echo("<li><a href = 'logout.php'>Log-out</a></li>");
                        echo("<li><a class = 'active' href = 'profile-base.html'> Welcome, ". $_COOKIE['user'] . '</a></li>');
                    }
                    else
                    {
                        echo("<li><a href = 'login_homepage.html'>Log-in</a></li>");
                        echo("<li><a class = 'active' href = 'signup.html'>Register</a></li>");
                    }
                ?>
            </ul>
        </nav>
    <section class = "sec2">
            <div class = "center">Because the most <span style="color:red">extraordinary</span> things,<br>are worth sharing.</div>
    </section>
    </body>