いつも<?php echo Configure::read('info.siteName'); ?>をご利用いただきありがとうございます。<br>
下記の商品が購入者に配達されました。<br><br>
▼ 商品情報<br>
注文ID : <?php echo sprintf('%08d', $OrderItem['id']); ?><br>
商品ID : <?php echo sprintf('%05d', $Item['id']); ?><br>
商品名 : <?php echo $Item['title']; ?><br><br>
▼ お問い合わせ先<br>
<?php echo Configure::read('info.adminMail'); ?><br>
---------------------------------------------------------------------
