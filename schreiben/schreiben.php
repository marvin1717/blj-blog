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
                <a href="http://localhost/Blog/"><li>Home</li></a>
                <a href="http://localhost/Blog/schreiben/schreiben.php"><li>Blogs schreiben</li></a>
                <a href="http://localhost/Blog/andere/andere.php"><li>Die anderen Blogs</li></a>
              </ul>
            </div>
        </nav>
        <h2>Hier könnte ihre Werbung stehen</h2>
    </header>

    <form action="ziel.php" method="post">

<label for="name">Dein Name</label>
<input name="name" type="text" id="name"><br>
<label for="Titel">Titel</label>
<input name="titel" type="text" id="Titel"><br>
<label for="inhalt"></label>
<input name="inhalt" type="textarea" id="inhalt"><br>

<!-- ====================================== -->

<input type="submit" value="Formular absenden">

<!-- oder -->


<!-- ====================================== -->

</form>  


</body>
</html>

