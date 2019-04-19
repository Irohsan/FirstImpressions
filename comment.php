<html>
<head>
    <title>Write your thoughts! ....First Impressions</title>
    <link href="comment.css" type="text/css" rel="stylesheet">
    <script>
        function redirect()
        {
            window.location.replace("post_view.php");
        }
        
        function submit()
        {
            document.cookie = "comment_text=" + document.getElementById("comment_box").value;
            window.location.replace("add_comment.php");
        }
    </script>
</head>
<body>
<section id = "background">
        <nav>
        <a>First Impressions</a>
            
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
        <h1 id = "title">Wherefore Art Thou Romeo?</h1>
        <h3 id="subtitle">The world is waiting on you!</h3>
        <div id="commentdiv">
            <input id = "comment_box" type="text" value = "Your comment...">
        </div>
        <button class = "comment_btn" id="bt1" onclick="redirect()">back</button>
        <button class = "comment_btn" onclick ="submit()">submit</button>
        
</section>
</body>
</html>