<?php
// unsetによって、ちゃんとセッションの中身が削除されているかの確認
// session_start();
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Learn SNS</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/font-awesome.css">
</head>
<body style="margin-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 thumbnail">
                <h2 class="text-center content_header">アカウント作成完了</h2>
                <div class="text-center">
                    <p>ユーザーアカウントの作成が完了しました。</p>
                    <a href="../signin.php" class="btn btn-info">サインイン</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.1.1.js"></script>
    <script src="../assets/js/jquery-migrate-1.4.1.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
</body>
</html>