<html>
<head>
</head>
<body>
    <div id = "feed">
    <?php
      include 'post.php';
      $post = new post.getPost();
        
      function displayPostInfo()
      {   
          echo('<h1>post.getHeader()</h1><br>');
          echo('<h3>post.getUser()</h3><br>');
          echo('<h4>post.getContent()</h4>');
      }     
    ?>
    </div>
    
</body>

</html>