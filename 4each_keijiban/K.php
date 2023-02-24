<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form>
    <h1>内容確認</h1>
    <div class="confirm">
        <p>内容はこちらでよろしいでしょうか？
            <br>よろしければ「登録する」ボタンを押して下さい。
        </p>

        <p>ハンドルネーム
            <br>
            <?php echo $_POST['handlename'];?>
        </p>

        <p>タイトル
            <br>
            <?php echo $_POST['title'];?>
        </p>

        <p>コメント
            <br>
            <?php echo $_POST['comments'];?>
        </p>

        <form action="index.php">
            <input type="submit" class="button2" value="戻って修正する" />
        </form>

        <form action="insert.php" method="post">
            <input type="submit" class="button2" value="登録する" />
            <input type="hidden" value="<?php echo $_POST['handlename'];?>" name="handlename">
            <input type="hidden" value="<?php echo $_POST['title'];?>" name="title">
            <input type="hidden" value="<?php echo $_POST['comments'];?>" name="comments">
        </form>
    </form>
    </div>

</body>

</html>
