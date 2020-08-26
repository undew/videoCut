<?php 
// if(isset($_POST["search"])){
//   $cn     =   mysqli_connect('localhost','root','','hackson');
//   mysqli_set_charset($cn,'utf8');
// $sql    =   "SELECT * from youtube where name='".$_POST["search"]."'";
// $result =     mysqli_query($cn,$sql);
// $player_list = [];
// while($rs){
//   $player_list[] = $rs;
//   $rs = mysqli_fetch_assoc($result);
// }
// }
// var_dump($player_list);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="destyle.css" />
    <link rel="stylesheet" href="style.css" />
    <title>Document</title>
  </head>
  <body>
<form action="top.php" method="post">
    <header>
      <h1><a href="top.php">ココスキ</a></h1>
      <p><input type="text" class="search" name="search"/></p>
      <nav>
        <ul>
          <li><a href="index.php">切り取る</a></li>
          <li><a href="">検索</a></li>
          <li><a href="">ABOUT</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <article id="content"></article>
    <footer>
      <h3>VideoCut</h3>
      <p>copyright all rights reserved .videoCut</p>
    </footer>
    </main>
    </form>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="topPage.js"></script>
  </body>
</html>

