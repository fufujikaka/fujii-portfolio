<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
    header('Location: contact15.php');
    exit();
} else {
    $post = $_SESSION['form'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // メールを送信する
    $to = 'office@libertasystem.com';
    $from = $post['email'];
    $subject = 'お問い合わせが届きました';
    $body = <<<EOT
名前： {$post['name']}
メールアドレス： {$post['email']}
電話番号： {$post['tel']}
内容：
{$post['comment']}
EOT;

        mb_language("ja");
        mb_internal_encoding("UTF-8");

    
    mb_send_mail($to, $subject, $body, "From: {$from}");

    // セッションを消してお礼画面へ
    unset($_SESSION['form']);
    header('Location: thanks.html');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問合せ内容確認:リベルタスシステム株式会社</title>
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <style>
.naiyou {
    font-size: 20px;
    padding: 20px;
    margin: 20px;
    background-color: #dae9fe;
    border-radius: 20px;
}

.naiyou a {
    padding:20px;
}

.naiyou button {
    border-radius: 20px;
    background-color: #a0a0a0;
    color: white;
}

.naiyou button:hover {
    background-color: #787878;
    
}




    </style>
   
</head>
<body>

<div class="item">
      <img src="img/LSC_LOGO_600px.png" alt="" width="40" height="40">
      <p>リベルタスシステム株式会社</P>
    </div>

    <!-- お問合せフォーム画面 -->
    <div class=" d-flex align-items-center naiyou">
      <div class="container">
        <div class="row">
          <div class="col-md-7 mx-auto text-center">
    <!-- <div class="container  align-items-center"> -->
        <form action="" method="POST">
            <p>お問い合わせ内容</p>


            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="name">お名前</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['name']); ?></p>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="email">メールアドレス</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['email']); ?></p>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="tel">電話番号</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo htmlspecialchars($post['tel']); ?></p>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="row">
                    <div class="col-3">
                        <label for="comment">お問い合わせ</label>
                    </div>
                    <div class="col-9">
                        <p class="display_item"><?php echo nl2br(htmlspecialchars($post['comment'])); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto">
                    <a href="contact15.php">戻る</a>
                    <button type="submit">送信する</button>
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    
</body>
</html>