<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
        <nav id="hamburger" name="navigation">
            <div id="menuToggle">
              
              <input type="checkbox" />
              
              <span></span>
              <span></span>
              <span></span>
              
              <ul id="menu">
                <a href="http://localhost/Blog/index/"><li>Home</li></a>
                <a href="http://localhost/Blog/schreiben/schreiben.php"><li>Blogs schreiben</li></a>
                <a href="http://localhost/Blog/%c3%bcber%20uns/uberuns.php"><li>Über den Inhaber</li></a>
              </ul>
            </div>
        </nav>
    <h1>Willkommen bei meinem Blog</h1>
</header>    
<div id="container">
      
        
        <p class="willkommen"> Willkommen auf meiner Blogwebsite. <br>
            Auf der linken Seite kannst du deinen eigenen Blog verfassen.<br>
            Auf der rechten Seite sind weitere Blogs von anderen Leuten.<br>
            <hr class = "linie1">
        </p>
   
    <?php
        $user = 'root';
        $password = '';
        
        $pdo = new PDO('mysql:host=localhost;dbname=blog', $user, $password, [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ]);

        $stmt = $pdo->query('SELECT * FROM `posts`');
        $fullblog = $stmt->fetchAll();
        foreach($fullblog as $blogpart) {
        echo '<div class = "post">';
        echo 'Am ' . $blogpart ['created_at'] . ' hat ' . $blogpart ['created_by'] . ' gepostet:';
            echo '<div class = aussage>';
        echo '<h2>' . $blogpart['post_title'] . '</h2>';
        
            echo    $blogpart['post_text'];
            echo    '<hr class = "linie">';
        echo '</div>';
        }
        
        
    ?>

        <div id="links-kollegen">
        <ul>
            <li><a href="http://10.20.18.107:8888/" target="_blank">Moritz' Blog</a></li>
        </ul>

</body>
</html>