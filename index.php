<?php 
if(isset($_POST['submit'])){
  $cn     =   mysqli_connect('localhost','root','','hackson');
              mysqli_set_charset($cn,'utf8');
  $sql    =   "INSERT INTO youtube(name,title,tag,url,start,end)
              VALUES(
              '".$_POST['name']."',
              '".$_POST['title']."',
              '".$_POST['tag']."',
              '".$_POST['url']."',
              '".$_POST['start']."',
              '".$_POST['end']."'
              )";
                  mysqli_query($cn,$sql);
  header('location:top.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="destyle.css" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
  </head>
  <body>
    <form action="index.php" method="post">
    <header>
      <h1><a href="top.php">videoCut</a></h1>
      <p><input type="text" class="search"/></p>
      <nav>
        <ul>
          <li><a href="index.php">切り取る</a></li>
          <li><a href="">検索</a></li>
          <li><a href="">ABOUT</a></li>
        </ul>
      </nav>
    </header>

    <hr />
    <main class="cutMain">
    <article class="cut">
    <h2 class="none">切り取り</h2>
    <section class="form-content">
    <h3 class="title">動画埋め込み</h3>
    <ul class="cut-form">
      <li>
      <h4>ユーザーネーム</h4>
      <p><input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Title"></p>
      </li>
      <li>
          <h4>タイトル</h4>
          <p><input type="text" name="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Title"></p>
      </li>
      <li>
        <h4>タグ</h4>
        <p><input type="text" name="tag" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Title"></p>
      </li>
      <li>
      <h4>URL埋め込み</h4>
      <p><input type="text" id="input" name="url" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="URL"/></p>
      </li>
      <li><button type="button" id="button" class="getform">取得</button></li>
    </ul>
      </section>
      <section id="movie" class="form-content time"> 
      <h3>MOVIE</h3>
      <div id="movie-frame"></div>
      </section>

      <section class="form-content">
      <h3>時間指定</h3>
      <ul class="cut-form">
        <li>      
        <h4>START：</h4>
          <p><input type="text" id="before" name="start" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="start"/></p>
        </li>
        <li>      
        <h4>END：</h4>
          <p><input type="text" id="after" name="end" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="end"/></p>
        </li>
        <li><button type="button" id="setting" class="getform">
          セットして再生
        </button></li>
        <li><button type="submit" name="submit" class="getform">再生位置を保存</button></li>
      </ul>
      </section>
      </article>
    </main>
    </form>
    <script src="app.js"></script>
  </body>
</html>
