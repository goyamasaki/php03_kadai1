<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>本のブックマーク</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 5px;
            font-size: 20px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
  
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">ブックマークを見る</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start]送り方メソッド場所インサート -->
   

    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>本のブックマーク↓↓</legend>
                <label>書籍の名前 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name"></label><br>  
                <label>url（星の数）: <input type="text" name="url"></label><br>
                <label>書籍のコメント<br><textarea name="content" rows="4" cols="40"></textarea></label><br>
                <div id="sent"><input type="submit" value="送信"></div>
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->

    <!-- ここから星を付けるcodeを入れる中止 -->
   


</body>

</html>
