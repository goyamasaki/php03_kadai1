<?php
require_once('funcs.php');
$pdo = db_conn();
$id = $_GET['id'];

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id =' . $id . ';');
$status = $stmt->execute();

//３．データ表示
$view = '';
if ($status == false) {
    sql_error($status);
} else {
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ブックマーク</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body id="main">
    <!-- Head[Start]ここがデータの記録を呼び出す画面 -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">データ登録の画面へ</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
 <legend>本のブックマーク↓↓</legend>
 <label>書籍の名前 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <input type="text" name="name" value=<?= $row['name'] ?>></label><br>  
 <label>url（星の数）: <input type="text" name="url" value=<?= $row['url']?>></label><br>
 <label>書籍のコメント<br><textarea name="content" rows="4" cols="40"><?= $row['content']?></textarea></label><br>
             
 <input type="hidden" name="id"value="<?= $row['id'] ?>">
 
 
 <div id="sent"><input type="submit" value="更新"></div>



            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->

</body>

</html>