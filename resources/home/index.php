<?php
session_start();
if($_SESSION['count'] == '1')
{
    echo"";
        
}

else
{
    header("Location: /nonreg.php");
    
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    
  </head>
  <body>
    <script src="script.js"></script>





    <div class="topnav">

    <a class="active" href="/resources/home/index.php">Главная страница</a>
    <a href="/resources/home/programs/">Список программ</a>
    <a href="/resources/home/listfiles/">Список файлов</a>
    </div>
  </body>
</html>