<!DOCTYPE html>
<html lang="ja">

<header>
    <meta charset="UTF-8">
    <title>4each掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <div class="logo">
        <img src="4eachblog_logo.jpg">
    </div>

    <ul class="menu">
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
    </ul>

</header>

<body>
    <div class="left">
        <h1>プログラミングに役立つ掲示板</h1>
        <div class="confirm">

            <form action="insert.php" method="post">
            <!-- index.php > insert.php > index.php -->
            <h2 class="form">入力フォーム</h2>

                <div>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" size="35" name="handlename">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="60" rows="7" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="投稿する" />
                </div>
            </form>

        </div>

        <from>
            <?php

                mb_internal_encoding("utf8");
                $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
                $stmt = $pdo->query("select * from 4each_keijiban");

                foreach($stmt as $row){
                    echo "<div class='kiji'>";
                        echo "<h3> ".$row['title']."</h3>";
                        echo "<div class='contents'>";
                            echo $row['comments'];
                            echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                        echo "</div>";
                    echo "</div>";
                }

            ?>
        </form>

    </div>

    <div class="right">
        <ul>
            <p class="caption">人気の記事</p>
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ　Top5</li>
        </ul>

        <ul>
            <p class="caption">オススメリンク</p>
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Bracketsのダウンロード</li>
        </ul>

        <ul>
            <p class="caption">カテゴリ</p>
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
    </div>
</body>

<footer>
    <p>copyright©︎internous| 4each blog the which provides A to Z about programming.</p>
</footer>

</html>
