<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>schreiben</title>
    <link rel="stylesheet" href="css/stylesschreiben.css">
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

  <form action="schreiben.php" method="post">
    <!--Eingabe-->
    <label for="name">Dein Name</label>
    <input name="name" type="text" id="name"><br>
    <label for="title">Titel</label>
    <input name="title" type="text" id="title"><br>
    <label for="text"></label>
    <input name="text" type="textarea" id="text"><br>
    <input type="submit" value="Blog teilen">
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


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($created_by === '') {
          echo  ""
    }

    if ($post_title === '') {
          $errors[] = 'Bitte wählen sie einen Titel aus.';
    } 

    if ($post_text === '') {
          $errors[] = 'Schreiben sie doch etwas aus ihrem Leben.';
    } 

    if (count($errors) === 0) {
      $formSent = true;
  
      $db = new PDO('mysql:host=localhost;dbname=blog', $user, $pass );
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
      $stmt = $db->prepare("insert into posts (created_by, post_text, post_title) VALUES(:createdBy, :postText, :postTitle) ");
      $stmt->execute([':createdBy' => $created_by, ':postText' => $post_text, ':postTitle' => $post_title]); 
    }
  }  
  ?>

</body>
</html>

