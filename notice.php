
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <style>
      h1, footer { text-align:center; }
      div { width: 650px; margin: 0 auto; }
      p.text-right { text-align:right }
    </style>
  </head>
  <body>
    <?php $body =
    '<h1>株式会社サンプルカンパニーから工事のお知らせ</h1>
    <div>
      <p>拝啓　時下ますますご清祥のこととお喜び申し上げます。<p>
      <p>さて、皆様がお住まいの○○○○において、○○○○工事を下記のとおり行います。</p>
      <p>
        期間中は搬入のためのエレベーター使用、および工事による騒音・振動の発生が予想されます。ご入居者様には大変ご迷惑をおかけいたしますが、何卒ご容赦くださいますようお願い申し上げます。また、工事中何かお気づきの点がございましたら弊社までご連絡ください。<br>
        何卒、ご理解ご協力の程お願い申し上げます。
      </p>
      <p class="text-right">敬具<p>
      <p>
        問い合わせ先<br>
        株式会社サンプルカンパニー<br>
        担当　◯◯ ◯◯<br>
        TEL　03-0000-0000
      </p>
    </div>
    <hr>
    <footer>&copy; 株式会社サンプルカンパニー</footer>
  </body>' ?>
  <?php
  $body = str_replace("サンプルカンパニー", "やじまカンパニー",$body);
  echo $body;
  ?>

</html>

<!-- HTMLのエスケープ処理について､
どうゆうことを指すのか(エスケープ処理の定義?)･なぜ必要なのか
①意味をもつ文字列にエンコードする(文字列に意味をもたせる)
･･･エンコーディング変換(一般にすべての標記を別の形式に変換すること(例:&→&amp;など))
特定のルールの一部がセキュリティに役立つ場合があるので､エスケープ処理の一種とされるときもある
②キーボードから入力できない文字を表現する
ヌルなど
③望まない解釈となる文字の意味を打ち消す
特別な意味がある文字の場合、
ユーザー入力などをそのまま出力するとシステムが誤作動する｡
悪意を持った入力の場合、システムに不正な処理を実行させる事が可能になるから｡ -->


