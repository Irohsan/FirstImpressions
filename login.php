<html>
<head>
    <title>Log into First Impressions</title>
    <link href="login.css" type="text/css" rel="stylesheet">
    <script>
        function back()
        {
            window.location.replace("feed.php");
        }
    </script>
</head>
<body>
    
    <section id = "background">
        <nav>
        <h1 style="display:inline" >First Impressions</h1>
        <div class="dropdown">
            <button class="dropbtn">Categories
            </button>
            <div class="dropdown-content">
              <a href="feed.php" onclick="setCategory(6)">Nature</a>
              <a href="feed.php" onclick="setCategory(1)">Travel</a>
              <a href="feed.php" onclick="setCategory(11)">Animals</a>
              <a href="feed.php" onclick="setCategory(2)">Music</a>
              <a href="feed.php" onclick="setCategory(3)">People</a>
              <a href="feed.php" onclick="setCategory(4)">Food</a>
              <a href="feed.php" onclick="setCategory(5)">Pop Culture</a>
              <a href="feed.php" onclick="setCategory(7)">Books</a>
              <a href="feed.php" onclick="setCategory(8)">Movies</a>
              <a href="feed.php" onclick="setCategory(9)">Daily Life</a>
                <a href="feed.php" onclick="setCategory(10)">Misc</a>
            </div>
        </div>
        </nav>
        <h1 id="title">Log into First Impressions!</h1>
        <div id = "sign_up_pannel">
            <form action = "login_user.php" method="post" >
              <h3 id="user_title">Username</h3>  <input id = "userbox" type ="text" name = "username"/>
              <h3 id="user_pass">Password</h3> <input id="userbox" name="password" type="password"/>
              <br><br><br>
              <input id="submit" type="submit" value = "Log in"/>  
            </form>
            <a id="sign_up" href="signup.php">New Here? Sign up now</a>
            <button id="back_btn" onclick="back()">Back</button>
        </div>    
    </section>
</body>
</html>