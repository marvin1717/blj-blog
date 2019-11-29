<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>schreiben</title>
    <link rel="stylesheet" href="css/stylesschreiben.css">
    <link rel="friends" href="">
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
            <a href="http://10.20.18.104/Blog/"><li>Home</li></a>
            <a href="http://10.20.18.104/Blog/schreiben/schreiben.php"><li>Blogs schreiben</li></a>
            <a href="http://10.20.18.104/Blog/andere/andere.php"><li>Die anderen Blogs</li></a>
          </ul>
        </div>
      </nav>
      <h2>Hier könnte ihre Werbung stehen</h2>
  </header>
      
<div class = "container">

  <form action="schreiben.php" method="post">
    <!--Eingabe-->
    <label for="name">Dein Name</label><br>
    <input name="name" type="text" id="name"><br>
    <label for="title">Titel</label><br>
    <input name="title" type="text" id="title"><br>
    <label for="url">Bild</label><br>
    <textarea htmlentities type="text" id="post_url" name="post_url"></textarea>
    <label for="text"></label><br>
    <textarea name="text" cols="55%%" rows="12%"></textarea> <br>	
    <input class="blogbutton" type="submit" value="Blog teilen">
    
  </form>  

  <!--Datenbankverbindung-->
  <?php
  
  $errors  = [];
  $formSent  = false;
  $user = 'root';
  $pass ='';

  $created_by   = trim($_POST['name'] ?? '');
  $post_title   = trim($_POST['title'] ?? '');
  $post_text    = trim($_POST['text'] ?? '');
  $bild         = trim($_POST['post_url'] ?? '');


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($created_by === '') {
          $errors[] = 'Bitte geben Sie einen Namen ein.';
    }

    if ($post_title === '' ) {
          $errors[] = 'Bitte wählen sie einen Titel aus.';
    } 

    if ($post_text === '') {
          $errors[] = 'Schreiben sie doch etwas aus ihrem Leben.';
    } 
    if ($bild === '') {
      $errors[] = 'Fügen sie ein Bild ein.';
} 

    if (count($errors) === 0) {
      $formSent = true;
  
      $db = new PDO('mysql:host=localhost;dbname=blog', $user, $pass );
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
      $stmt = $db->prepare("insert into posts (created_by, post_text, post_title, bildurl) VALUES(:createdBy, :postText, :postTitle, :bildUrl,) ");
      $stmt->execute([':createdBy' => $created_by, ':postText' => $post_text, ':postTitle' => $post_title, ':bildUrl' => $bild,]); 
    
    
     
    }
  }  
    
  ?>

      &amp;
      &lt;
      &gt;
      &quot;
      &#x27;     
      &#x2F;
      

</body>
</html>


