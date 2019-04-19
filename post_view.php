<html>
    <head>
        <title>
            <?php 
                include 'post.php';
                $post = new Post($_COOKIE["post"]);
                echo $post->getTitle();
            ?>, First Impressions
        </title> 
        <link href="post_view.css" type="text/css" rel="stylesheet">
        <script type="text/javascript">
            function show()
            {
                document.getElementById("quiz_content").style.display = "block";
                document.getElementById("quiz_btn").style.display = "none";
                document.getElementById("quiz_btn2").style.display = "inline";
            }
            function hide()
            {
                document.getElementById("quiz_content").style.display = "none";
                document.getElementById("quiz_btn2").style.display = "none";
                document.getElementById("quiz_btn").style.display = "inline";
            }
            
            function correct()
            {
                document.getElementById("correct_btn").style.backgroundColor = "rgb(102, 255, 102)";
                document.getElementById("correct_btn").textContent = "Correct!";
                document.getElementById("incorrect_btn").style.backgroundColor = "rgb(166, 166, 166)";
                
                document.getElementById("correct_btn").disabled = true;
                document.getElementById("incorrect_btn").disabled = true;
                
                
            }
            
            function incorrect()
            {
                document.getElementById("incorrect_btn").style.backgroundColor = "rgb(255, 77, 77)";
                document.getElementById("incorrect_btn").textContent = "Incorrect :(";
                document.getElementById("correct_btn").style.backgroundColor = "rgb(166, 166, 166)";
                
                document.getElementById("correct_btn").disabled = true;
                document.getElementById("incorrect_btn").disabled = true;
            }
            
            function showComment()
            {
                document.getElementById("comment_pannel").style.display = "block";
                document.getElementById("comment_title").style.display = "none";
                document.getElementById("comment_title2").style.display = "inline";
            }
            
            function hideComment()
            {
                document.getElementById("comment_pannel").style.display = "none";
                document.getElementById("comment_title").style.display = "inline";
                document.getElementById("comment_title2").style.display = "none";
            }
            
            function redirect()
            {
                if( getCookie("user") == null )
                {
                    window.location.replace("feed.php");  
                }
                else
                {
                    window.location.replace("comment.php");       
                }
            }
            
            function back()
            {
                window.location.replace("feed.php");
            }
            
            function getCookie(cname) 
            {
                var name = cname + "=";
                var decodedCookie = decodeURIComponent(document.cookie);
                var ca = decodedCookie.split(';');
                for(var i = 0; i <ca.length; i++) 
                {
                    var c = ca[i];
                    while (c.charAt(0) == ' ') 
                    {
                        c = c.substring(1);
                    }
                    if (c.indexOf(name) == 0) 
                    {
                      return c.substring(name.length, c.length);
                    }
                }
                
                return "";
            }
            
        </script>
    </head>
    <body>
    <nav>
        <a>First Impressions</a>    
    </nav>
    <div id="feed">
        <?php
            include 'quiz.php';
            $q = new Quiz();
            $q->getQuiz( $post->getPostID()  );
        
            echo "<h1 id='post_title'>" . $post->getTitle() . "</h1>";
            $post->getPhoto();
            echo "<h2 id='username'>" . $post->getUser() . "</h4>";
            echo "<h4 id='date'>" . $post->getDate() . "</h4>";
            echo "<p id='text'>" . $post->getText() . "</p>";
            
            if( $q->getCurrentQuiz() != null )
            {
                $randFlag = mt_rand(0, 1);
                $quest = $q->getQuestion();         
                $answer = $q->getAnswer();
                $incorrect = $q->getPotential();
                $buttons;
                
                if( $randFlag == 1 )
                {
                    $buttons = '<button class = "quiz_btn" id="correct_btn" onclick = "correct()"> ' . $answer . ' </button>';
                    $buttons .='<button class = "quiz_btn" id="incorrect_btn" onclick = "incorrect()"> ' . $incorrect . ' </button>';
                }
                else
                {
                    $buttons = '<button class = "quiz_btn" id="incorrect_btn" onclick = "incorrect()"> ' . $incorrect . ' </button>';
                    $buttons .= '<button class = "quiz_btn" id="correct_btn" onclick = "correct()"> ' . $answer . ' </button>';
                }
                
                echo '<button id="quiz_btn" onclick="show()">Show Quiz </button>';
                echo '<button id="quiz_btn2" onclick="hide()">Hide Quiz </button>';
                echo "<div id='quiz_content'>
                      <h3 id = 'quiz_quest'> '$quest' </h3>
                      $buttons
                      </div>";
                
            }
        ?>
        <br><br>
        <button id="comment_title" onclick = "showComment()">Comments</button>
        <button id="comment_title2" onclick = "hideComment()">Hide Comments</button>
        <button id="return" onclick="back()">Back</button>
        <div id="comment_pannel">
            <button id ="add_btn" onclick="redirect()">Write a Comment</button>
        <?php
                include_once "utility.php";

                $post = new Post( $_COOKIE["post"] );
                $id = $post->getPostID();
                
                $results = queryDatabase("comment", "*", "WHERE post_id = '$id'", 1);
                
                while( ( $row = mysqli_fetch_array( $results ) ) != null )
                {
                    echo('<div id="comment">
                          <h3 id = "user_comment"> '. $row["username"] . ' </h3><h3 id="comment_date">'. $row["date"].'</h3>
                          <p class = "comment_text">  '. $row['comment_text']. ' </p>
                          </div><br>');        
                }
        ?>
        </div>
    </div>
    <br>
    <br>
    <br>
    </body>
</html>