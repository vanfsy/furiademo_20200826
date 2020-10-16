いつも<?php echo Configure::read('info.siteName'); ?>をご利用いただきありがとうございます。<br>
下記の商品が購入者に配達されました。<br><br>
▼ 商品情報<br>
注文ID : <?php echo sprintf('%08d', $OrderItem['id']); ?><br>
商品ID : <?php echo sprintf('%05d', $Item['id']); ?><br>
商品名 : <?php echo $Item['title']; ?><br><br>
▼ お問い合わせ先<br>
RELEASE コマース 運営会社<br>
株式会社スマイルホールディングス<br>
〒810-0022　福岡県福岡市中央区薬院1-11-14-6F<br>
TEL：092-761-8739　FAX：092-761-8758<br>
Mail：shop@release.co.jp <br>
---------------------------------------------------------------------
