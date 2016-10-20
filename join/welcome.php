<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>EBISU Bulletin Board</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../css/welcome.css" media="all">
</head>


<body>
    <!--header-->
    <header>
        <h1>EBISU Bulletin Board</h1>
        <p>-Welcome-</p>
    </header>
    <!--main-->
    <main>
        <img src="../img/icon.png" alt="アドエビスくん">
        <h3>「EBISU Bulletin Board」とは</h3>
        <p>
            ロックオン内定者の藤本が、必死こいてPHPと格闘した、藤本の成果物となる、掲示板である。
        </p>

        <div class="btn">
            <form method="post" action="index.php">
                <input type="submit" value="アカウント作成" name="index" id="index">
            </form>

            <form method="post" action="../login.php">
                <input type="submit" value="ログイン" name="login" id="login">
            </form>
        </div>
    </main>
    <!--fotter-->
    <footer>
        <hr>
        <small> Copyright (c) 2015 Fujimoto Sachiko, All Rights Reserved.</small>
        <hr>
    </footer>
</body>

</html>
