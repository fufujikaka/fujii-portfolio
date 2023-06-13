<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    // フォームの送信時にエラーをチェックする
    if ($post['name'] === '') {
        $error['name'] = 'blank';
    }
    if ($post['email'] === '') {
        $error['email'] = 'blank';
    } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
        $error['email'] = 'email';
    }

    if ($post['tel'] === '') {
      $error['tel'] = 'blank';
  }
    if ($post['comment'] === '') {
        $error['comment'] = 'blank';
    }

    if (count($error) === 0) {
        // エラーがないので確認画面に移動
        $_SESSION['form'] = $post;
        header('Location: confirm14.php');
        exit();
    }
} else {
    if (isset($_SESSION['form'])) {
        $post = $_SESSION['form'];
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <link rel="stylesheet" href="stylesheet.css" />
  <title>お問い合わせ:リベルタスシステム株式会社</title>
  <link rel="icon" href="img/favicon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
<header>

<div class="item">
  <img src="img/LSC_LOGO_600px.png" alt="" width="46" height="46">
  <p>リベルタスシステム株式会社</P>
</div>






<div class="spp-menu">
  <span class="material-icons" id="open">menu</span>
</div>

</header>

<div class="overlay">

<span class="material-icons" id="close">close</span>
<nav>

  <ul class="pulldown_menu_7">
    <li onclick="this.className = (this.className != 'menu_on') ? 'menu_on' : 'menu_off';">
      <a class="ho">ホーム</a>

      <ul>
        <li><a href="index.html#service5">サービス</a></li>
        <li><a href="index.html#works-1">仕事内容</a></li>
        <li><a href="index.html#news">お知らせ</a></li>
      </ul>

    <li onclick="this.className = (this.className != 'menu_on') ? 'menu_on' : 'menu_off';">
      <a class="ho">サービス</a>
      <ul>
        <li><a href="service.html#itso">ITソリューション</a></li>
        <li><a href="service.html#system">システム開発</a></li>
        <li><a href="service.html#rimoto">リモートワーク<br>サーバー</a></li>
      </ul>
    </li>
    <li onclick="this.className = (this.className != 'menu_on') ? 'menu_on' : 'menu_off';">
      <a class="ho">仕事内容</a>
      <ul>
      <li><a href="works.html#jirei">事例</a></li>
            <li><a href="works.html#jisseki">実績</a></li>

      </ul>
    </li>
    <li onclick="this.className = (this.className != 'menu_on') ? 'menu_on' : 'menu_off';">
      <a class="ho">会社案内</a>
      <ul>
        <li><a href="company.html#gaiyou1">会社概要</a></li>
        <li><a href="company.html#saiyou">採用情報</a></li>
        <li><a href="company.html#rinenn">理念</a></li>
        <li><a href="company.html#syamei">社名について</a></li>
        <li><a href="company.html#aisatu">社長あいさつ</a></li>

      </ul>
    </li>
    <li onclick="this.className = (this.className != 'menu_on') ? 'menu_on' : 'menu_off';">
      <a class="ho">お問い合わせ</a>
      <ul>
        <li><a href="contact15.php#map" target="_blank">アクセス</a></li>

        <li><a href="contact15.php#contact" target="_blank">お問い合わせ</a></li>
      </ul>
    </li>





  </ul>



</nav>
</div>

<div class="navbernew">
<div class="container">
  <div class="row pc-menu">
    <ul>
      <li class="active" id="home"><a href="index.html#home">ホーム</a>
        <div class="subMenu-1">
          <ul>
            <li><a href="#service5">サービス</a></li>
            <li><a href="#works-1">仕事内容</a></li>
            <li><a href="#news">お知らせ</a></li>
          </ul>
        </div>
      </li>
      <li><a href="service.html#service-6">サービス</a>
        <div class="subMenu-1">
          <ul>
            <li><a href="service.html#itso">ITソリューション</a></li>
            <li><a href="service.html#system">システム開発</a></li>
            <li><a href="service.html#rimoto">リモートワーク<br>サーバー</a></li>
          </ul>
        </div>
      </li>
      <li><a href="works.html#works-3">仕事内容</a>
        <div class="subMenu-1">
          <ul>
          <li><a href="works.html#jirei">事例</a></li>
            <li><a href="works.html#jisseki">実績</a></li>

          </ul>
        </div>
      </li>

      <li><a href="company.html#gaiyou1">会社案内</a>
        <div class="subMenu-1">
          <ul>
            <li><a href="company.html#gaiyou2">会社概要</a></li>
            <li><a href="company.html#saiyou">採用情報</a></li>
            <li><a href="company.html#rinenn">理念</a></li>
            <li><a href="company.html#syamei">社名について</a></li>
            <li><a href="company.html#aisatu">社長あいさつ</a></li>

          </ul>
        </div>
      </li>
      <li><a href="contact15.php#contact5">お問い合わせ</a>
        <div class="subMenu-1">
          <ul>
            <li><a href="contact15.php#map">アクセス</a></li>

            <li><a href="contact15.php#contact">お問い合わせ</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</div>
</div>



 <div class="contact1  d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <!-- <p style="font-size: 25px; margin-bottom: 0;">CONTACT</p> -->
          <h8 style="font-size: 40px">アクセス</h8>
        </div>
      </div>
    </div>
  </div>


  <section id="map">

    <div class="map d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">

            <h2 class="text-center my-4">周辺地図</h2>

            <div class="mt-3 text-center">
              
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3253.215557574781!2d139.6266333153316!3d35.37510935430676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f9197b1c383f%3A0x8d2238937f760da9!2z44Oq44OZ44Or44K_44K544K344K544OG44Og!5e0!3m2!1sja!2sjp!4v1670175081111!5m2!1sja!2sjp"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

              <p>
                〒236-0051
                神奈川県横浜市金沢区富岡東３丁目７－２１
                <br>E-mail:office@librtasystem.com
              </p>


              <h2 class="tw">ツイッター</h2>

              <div class="twi" style="width: 20rem;">
                <a class="twitter-timeline"  href="https://twitter.com/LibertasSystem"  data-widget-id="362010904247795712">@LibertasSystem からのツイート</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


   


    <div class="contact2  d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="mx-auto text-center">
            <section id="contact">
              <h2>お問い合わせフォーム</h2>



              <form action="" method="post" novalidate>
                <dl>
                 
                  <dt><label for="name">お名前</label></dt>
                 
                 
                 
                  <dd><input type="text" name="name" id="name" value="<?php echo htmlspecialchars($post['name']); ?>" required autofocus />
                  
                  <?php if ($error['name'] === 'blank'): ?>
                            <p class="error_msg">※お名前をご記入下さい</p>
                        <?php endif; ?>
                  </dd>

                  
                  <dt><label for="email">メールアドレス</label></dt>

                  <dd><input type="email" id="email" name="email" value="<?php echo htmlspecialchars($post['email']); ?>" required>
                        <?php if ($error['email'] === 'blank'): ?>
                            <p class="error_msg">※メールアドレスをご記入下さい</p>
                        <?php endif; ?>
                        <?php if ($error['email'] === 'email'): ?>
                            <p class="error_msg">※メールアドレスを正しくご記入ください</p>
                        <?php endif; ?>
                      </dd>

                  <dt><label for="email">電話番号</label></dt>

                  <dd><input type="text" id="tel" name="tel" value="<?php echo htmlspecialchars($post['tel']); ?>" required>
                        <?php if ($error['tel'] === 'blank'): ?>
                            <p class="error_msg">※電話番号をご記入下さい</p>
                        <?php endif; ?>
                        <?php if ($error['tel'] === 'tel'): ?>
                            <p class="error_msg">※電話番号を正しくご記入ください</p>
                        <?php endif; ?>
                      </dd>


                  <dt><label for="comment">内容</label></dt>
                  <dd><textarea id="comment" name="comment" cols="30" rows="20" required ><?php echo htmlspecialchars($post['comment']); ?></textarea>
                        <?php if ($error['comment'] === 'blank'): ?>
                            <p class="error_msg">※お問い合わせ内容をご記入下さい</p>
                        <?php endif; ?>
                      </dd>
                </dl>
                <div class="button"><input type="submit" name="b-send" value="確認画面へ"></div>
              </form>
              <!-- <form class="row g-3" method="post" action="contact_check.php">
                
                <div class="col-md-4"> -->
                    <!--<label for="comment" class="form-label">お問い合わせ内容 *</label>-->
                    <!-- <label for="comment" class="form-label">お問い合わせ内容 <font color="red" size="2">【必須】</font></label> -->
                    <!--<textarea class="form-control" id="comment" name="comment" required></textarea>-->
                    <!-- <textarea class="form-control" id="comment" name="comment" placeholder="こちらにお問い合わせ内容を入力してください。" 
                    oninput="checkitem()" required></textarea>
                    <div class="invalid-feedback">お問い合わせ内容を入力してください</div>
                </div>
                <div class="col-md-4"> -->
                    <!--<label for="name" class="form-label">お名前（漢字）*</label>-->
                    <!-- <label for="name" class="form-label">お名前（漢字）<font color="red" size="2">【必須】</font></label> -->
                    <!--<input type="text" class="form-control" id="name" name="name" required>-->
                    <!-- <input type="text" class="form-control" id="name" name="name" value="" placeholder="(例)山田 太郎" 
                    oninput="checkitem()" required>
                    <div class="invalid-feedback">お名前（漢字）を入力してください</div>
                </div>
                <div class="col-md-4"> -->
                    <!--<label for="kana" class="form-label">お名前（フリガナ）*</label>-->
                    <!-- <label for="kana" class="form-label">お名前（フリガナ）<font color="red" size="2">【必須】</font></label> -->
                    <!--<input type="text" class="form-control" id="kana" name="kana" required>-->
                    <!-- <input type="text" class="form-control" id="kana" name="kana" value="" placeholder="(例)ヤマダ タロウ" 
                    oninput="checkitem()" required>
                    <div class="invalid-feedback">お名前（フリガナ）を入力してください</div>
                </div>
                <div class="col-md-4"> -->
                    <!--<label for="company" class="form-label">会社・部署 *</label>-->
                    <!-- <label for="company" class="form-label">会社・部署 <font color="red" size="2">【必須】</font></label> -->
                    <!--<input type="text" class="form-control" id="company" name="company" required>-->
                    <!-- <input type="text" class="form-control" id="company" name="company" value="" placeholder="(例)リベルタスシステム株式会社" 
                    oninput="checkitem()" required>
                    <div class="invalid-feedback">会社・部署を入力してください</div>
                </div> -->
                <!--<div class="col-md-3">-->
                <!-- <div class="col-md-4"> -->
                    <!--<label for="email" class="form-label">E-Mail（半角）*</label>-->
                    <!-- <label for="email" class="form-label">E-Mail（半角）<font color="red" size="2">【必須】</font></label> -->
                    <!--<input type="email" class="form-control" id="email" name="email" >-->
                    <!-- <input type="email" class="form-control" id="email" name="email" value="" placeholder="(例)XXXXX@XXX.com" 
                    oninput="checkitem()" required>
                    <div class="invalid-feedback">E-Mail（半角）を入力してください</div>
                </div> -->
                <!--<div class="col-md-3">-->
                <!-- <div class="col-md-4"> -->
                    <!--<label for="tel" class="form-label">電話番号（半角）*</label>-->
                    <!-- <label for="tel" class="form-label">電話番号（半角）<font color="red" size="2">【必須】</font></label> -->
                    <!--<input type="text" class="form-control" id="tel" name="tel" required>-->
                    <!-- <input type="tel" class="form-control" id="tel" name="tel" value="" placeholder="(例)XXX-XXX-XXXX" 
                    oninput="checkitem()" required>
                    <div class="invalid-feedback">電話番号（半角）を入力してください</div>
                </div>
                <div class="col-12"> -->
                    <!--<button class="btn btn-primary" name="b_send" type="submit">送信内容を確認</button> -->             
                    <!-- <button class="btn btn-primary" id="b_check" name="b_check" type="button" data-toggle="modal" data-target="#CheckModal" disabled>送信内容を確認</button>   -->
                    <!--<button class="btn btn-secondary" name="b_reset" type="reset">リセット</button>--> 
                    <!-- <button class="btn btn-secondary" name="b_reset" type="reset" onclick="btndisabled()">リセット</button>                
                   
                </div>     -->
                   
                <!-- 送信内容確認ボタン・クリック後に表示される画面の内容 -->
                <!-- <div class="modal fade" id="CheckModal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content"> -->
                            <!--ヘッダー-->
                            <!-- <div class="modal-header">
                                <h5 class="modal-title" id="myModalLabel">送信内容の確認</h5>
                            </div> -->
                            <!--本体-->
                            <!-- <div class="modal-body">                         
                                <div>                                                              
                                    <p class="text-dark" >お名前（漢字）<font size="2">【必須】</font></p>                             
                                    <p class="px-4 form-control" id="modalname"></p> 
                                </div>
                                <div>                                
                                    <P class="text-dark">お名前（フリガナ）<font size="2">【必須】</font></P>
                                    <p class="px-4 form-control" id="modalkana"></p>
                                </div>
                                <div>
                                    <p class="text-dark">会社・部署 <font size="2">【必須】</font></p>
                                    <p class="px-4 form-control" id="modalcompany"></p>
                                </div>
                                <div>
                                    <p class="text-dark">E-Mail（半角）<font size="2">【必須】</font></p>
                                    <p class="px-4 form-control" id="modalemail"></p>
                                </div>  
                                <div>
                                    <p class="text-dark">電話番号（半角）<font size="2">【必須】</font></p>
                                    <p class="px-4 form-control" id="modaltel"></p>
                                </div>
                                <div>
                                    <p class="text-dark">お問い合わせ内容 <font size="2">【必須】</font></p>                                
                                    <p class="px-4 form-control" id="modalcomment" style="word-wrap:break-word;"></p>                                                            
                                </div> -->
                                <!--<p class="text-dark">内容確認後、送信してください。</P>-->                          
                            <!-- </div> -->
                            <!--フッター-->
                            <!-- <div class="modal-footer">                            
                                <P class="text-dark">内容確認後、送信してください。</P>                             
                                <button type="submit" class="btn btn-primary" name="b_send" >送信</button>                            
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">戻る</button>
                            </div>
                        </div>
                    </div>
                </div>  
                </form> -->
            </section>
          </div>
        </div>
      </div>
    </div>








</body>
 <!-- footer section -->
 <footer>
    <div class="footer-top">
      <!-- <div class="container"> -->
      <div class="row">

        <div class="col-md-3 col-sm-3 text-center">
          <h5 class="text-white"><a href="index.html#home">ホーム</a></h5>
          <ul class="list-unstyled">
            <li><a href="index.html#service5">サービス</a></li>
            <li><a href="index.html#works-1">仕事内容</a></li>
            <li><a href="index.html#news">お知らせ</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-2 text-center">
          <h5 class="text-white"><a href="service.html#service-6">サービス</a></h5>
          <ul class="list-unstyled">
            <li><a href="service.html#itso">ITソリューション</a></li>
            <li><a href="service.html#system">システム開発</a></li>
            <li><a href="service.html#rimoto">リモートワークサーバー</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-2 text-center">
          <h5 class="text-white"><a href="works.html#works-3">仕事内容</a></h5>
          <ul class="list-unstyled">
            <li><a href="works.html#jirei">事例</a></li>
            <li><a href="works.html#jisseki">実績</a></li>

          </ul>
        </div>
        <div class="col-md-2 col-sm-2 text-center">
          <h5 class="text-white"><a href="company.html#gaiyou1">会社案内</a></h5>
          <ul class="list-unstyled">
            <li><a href="company.html#gaiyou2">会社概要</a></li>
            <li><a href="company.html#saiyou">採用情報</a></li>
            <li><a href="company.html#rinenn">理念</a></li>
            <li><a href="company.html#syamei">社名について</a></li>
            <li><a href="company.html#aisatu">社長あいさつ</a></li>

            <li><a href="compliance1.html#compliance1" target="_blank" rel="noopener noreferrer">コンプライアンス</a></li>
            <li><a href="security1.html#security1" target="_blank" rel="noopener noreferrer">情報セキュリティ</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-2 text-center">
          <h5 class="text-white"><a href="contact15.php#contact5">お問い合わせ</a></h5>
          <ul class="list-unstyled">

            <li><a href="contact15.php#map">アクセス</a></li>
            <li><a href="contact15.php#contact">お問い合わせ</a></li>

          </ul>
        </div>

      </div>
    </div>
    </div>
    <div class="f-name">
      <img src="img/LSC_LOGO_600px.png" alt="" width="30" height="30">
      <p>リベルタスシステム株式会社<br>
        <span style="font-size:14px">
          Libertas System Co.,Ltd.</span>
      </p>
    </div>
    <div class="copyright">
      <p>© 2009-2021 Libertas System Co.,Ltd.</p>

    </div>




  </footer>











  <script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>