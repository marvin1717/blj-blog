<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>schreiben</title>
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
    </header>

    <form action="eingabe" id="blog">
    <label class="post" form="text">Wichtiger Text</label>
    <label for="name">Name</label> 
    <input type="text" name="vorname" id="vorname" maxlength="30">
 
    
    <button type="reset">Eingaben zurücksetzen</button>
    <button type="submit">Eingaben absenden</button>
</form>


</body>
</html>

