いつも<?php echo Configure::read('info.siteName'); ?>をご利用いただきありがとうございます。<br>
下記の商品の購入が完了しました。<br><br>
<?php $pointTotal = null; ?>
<?php foreach ($datas as $value) : ?>
▼ 商品情報<br>
商品ID : <?php echo $value['item_id']; ?><br>
商品名 : <?php echo $value['item_name']; ?><br>
出品者 : <?php echo $value['nickname'] ?><br>
▼ 支払い金額<br>
決済方法 : ポイント<br>
決済ポイント : <?php echo $value['total']; ?> ポイント<br><br>
<?php $pointTotal += $value['total']; ?>
--------------------------<br>
<?php endforeach; ?>
支払い合計金額（ポイント） : ￥<?php echo $pointTotal; ?><br><br>
--------------------------<br>
※注文履歴の確認はこちら<br>
https://shop.release.sc/mypage/purchased<br>
<br>
▼ お問い合わせ先<br>
RELEASE コマース 運営会社<br>
株式会社スマイルホールディングス<br>
〒810-0022　福岡県福岡市中央区薬院1-11-14-6F<br>
TEL：092-761-8739　FAX：092-761-8758<br>
Mail：shop@release.co.jp <br>
---------------------------------------------------------------------