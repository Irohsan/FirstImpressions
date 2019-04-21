<html>
<head>
    <title>Create a Post</title>
    <link href="postpage.css" type="text/css" rel="stylesheet">
    <script>
        function showQuiz()
        {
            document.getElementById("quest").style.display = "inline";
            document.getElementById("quest_box").style.display = "inline";
            document.getElementById("quest_answer").style.display = "inline";
            document.getElementById("quest_ans_box").style.display = "inline";
            document.getElementById("quest_pot_answer").style.display = "inline";
            document.getElementById("quest_pot_ans_box").style.display = "inline";
            
            document.getElementById("toggle").style.display="inline";
            document.getElementById("toggle_quiz").style.display="none";
              
        }
        
        function hideQuiz()
        {
            document.getElementById("quest").style.display = "none";
            document.getElementById("quest_box").style.display = "none";
            document.getElementById("quest_answer").style.display = "none";
            document.getElementById("quest_ans_box").style.display = "none";
            document.getElementById("quest_pot_answer").style.display = "none";
            document.getElementById("quest_pot_ans_box").style.display = "none";
            
            document.getElementById("toggle").style.display="none";
            document.getElementById("toggle_quiz").style.display="inline";
        }
        
               
        function logout()
        {
            window.location.replace("logout.php");
        }
            
        function login()
        {
            window.location.replace("login.php");
        }
            
        function goToProfile()
        {
            window.location.replace("profile_page.php");
        }
        
        function exit()
        {
            window.location.replace("feed.php");
        }
    </script>
</head>
<body>
    <section id = "background">
    <nav>
        <h1 style="display:inline" >First Impressions</h1>
        <?php
            if( isset($_COOKIE["user"]) )
            {
                echo('<h1 id = "logout" onclick = "logout()" style="background-color:lightblue"> Log Out </h1>' );
                echo('<h1 id = "logout" onclick = "goToProfile()">'. $_COOKIE['user'] . '</h1>' );
            }
            else
            {
                echo('<h1 id = "login" onclick = "login()">Log In</h1>' );
                echo('<h1 id = "login" onclick = "register()" style="background-color:lightcoral"> Register </h1>' );
            }
        ?>  
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
    <h1 class = "title">New Post</h1>
    <div id = "create_pannel">
        <form action="create_post.php" method="post" enctype="multipart/form-data" >
            <h3 class="input_title">Title: </h3><input type="text" name = "title" class = "form_btn" id="title">
            <br>
            <h3 class="input_title">Media: </h3><input type="file" name = "media" class = "form_btn" id="pic" accept="image/jpeg"><br>
            <h3 class="input_title">Tell us your story!</h3><br><input type="text" name = "text" class = "form_btn2" id="text"><br><br>
            <h3 class="input_title" id="quest">Quiz Question: </h3><input type="text" name = "quest" class = "form_btn" id="quest_box" value = "question"><br><br>
            <h3 class="input_title" id="quest_answer">Quiz Correct Answer: </h3><input type="text" name = "answer" class = "form_btn" id="quest_ans_box" value="answer"><br><br>
            <h3 class="input_title" id="quest_pot_answer">Quiz Potential Answer: </h3><input type="text" name = "potential_answer" class = "form_btn" id="quest_pot_ans_box" value="potential answer"><br><br>
            <input type="submit" name = "submit" class = "submit" id="submit" value="Create Post"><br>
            
            
        </form>
            <button id="toggle_quiz" onclick="showQuiz()">Create Quiz</button>
            <button id="toggle" onclick="hideQuiz()">Hide Quiz</button>
            <button id="exit" onclick="exit()"> Back </button>
    </div>
    </section>   
</body>
</html>