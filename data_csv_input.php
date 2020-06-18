<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>アンケートフォーム</title>
  <style>
    body {
      height: 100%;
      width: 550px;
      margin-top: 30px;
      margin-right: auto;
      margin-left: auto;
    }

    .header-title {
      padding-top: 20px;
      padding-bottom: 10px;
      margin-top: 30px;
      margin-bottom: 10px;
      font-size: 46px;
      border-bottom: 1px solid #aaa;
      text-align: center;
      color: blue;
    }

    .subtitle {
      text-align: center;
      font-size: 16px;
    }

    .contenttitle {
      text-align: center;
    }

    .btn {
      text-align: center;
    }

    div {
      margin-bottom: 10px;
    }
  </style>

</head>

<body>
  <h1 class="header-title">JIDAI</h1>
  <h2 class="contenttitle">ご利用者アンケート</h2>
  <p class="subtitle">いつも弊社サービスをご利用いただきありがとうございます。<br>サービス品質向上のため、アンケートを実施いたします。ご利用される中で<br>お気づきの点がございましたらご意見・ご要望をいただければ幸いです。</p>



  <form action="data_csv_create.php" method="POST">
    <fieldset class="container">
      <legend class="contenttitle">アンケート入力画面</legend>

      <div>
        1.名前:<br /><input type="text" name="name" size="30" autocomplete="off" value=""><br />
      </div>
      <div>
        2.E-mail:<br /> <input type="text" name="mail" size="30" autocomplete="off" value=""><br />
      </div>

      <div>
        3.弊社のサービスについてご意見・ご要望があればお書きください:<br />
        <textarea rows="8" cols="69" id="memo" name="memo"></textarea><br />
      </div>

      <div class="btn">
        <button>submit</button>
      </div>
    </fieldset>
    <p><a href="data_csv_read.php">一覧表示</a></p>
  </form>



</body>

</html>