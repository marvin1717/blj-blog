<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>die anderen Blogs</title>
    <link rel="stylesheet" href="css/stylesandere.css">
    
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
    <h2>Die Blogs meiner Kollegen</h2>
  </header>
  <div id = "container">
        <?php
            $user="d041e_gibucher";
            $pass="54321_Db!!!";

            $pdo = new PDO('mysql:host=10.20.18.122;dbname=d041e_gibucher', $user, $pass, [
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
              PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
          ]);
            
            
            $stmt = $pdo->query('SELECT * FROM `ipadressen`');
            foreach($stmt->fetchAll() as $ipadressen) {
              echo '<div class="links-kollegen">';
                echo '<li><a href="http://'. $ipadressen ['Ip']. '" >' . $ipadressen ['vorname']  .'</a></li>' ;
              echo '</div>';
            }
            ?>
            
            
  </div>          
          

            

           
  
</body>
</html>