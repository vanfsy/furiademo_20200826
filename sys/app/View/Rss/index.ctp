<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>RELEASE COMMERCE</title>
<description>RELEASEコマースは、全国の農家や漁師や家庭菜園をされている方々より、丹精込めて栽培した野菜や果物・水揚げされたばかりの新鮮な魚介類などを全国のすべての消費者にお届けする「食」のオンラインマーケットです。</description>
<link>https://shop.release.sc/</link><?php /*<lastBuildDate>Sat, 13 Dec 2003 18:30:02 GMT</lastBuildDate><managingEditor>johndoe@example.com (John Doe)</managingEditor>*/?>
<?php //echo print_r($this);
	foreach($arrNewDatas as $row):

      $item_url = "/item/detail/".$row['Item']['id'];
      $title = mb_strimwidth($row['Item']['title'], 0, 50, "…");
      /*$name_base = $row['Member']['company'].' '.$row['Member']['nickname'];*/
	  $name_base = $row['Member']['nickname'];
      $name = mb_strimwidth($name_base, 0, 50, "…");
      $price = number_format($row['Item']['price']);
      $quantity = number_format($row['Item']['quantity']);
	  $selling = number_format($row['Item']['selling']);
	$id = number_format($row['Item']['id']);
	$discription = str_replace("\r\n", '', mb_strimwidth($row['Item']['discription'], 0, 160, "…"));; 
	$created = $row['Item']['created'];
	$created = new DateTime();

?>
<?php?>
<item>
<title><?php echo $title; ?></title>
<link>https://shop.release.sc/item/detail/<?php echo $id; ?></link>
<guid>https://shop.release.sc/item/detail/<?php echo $id; ?></guid>
<pubDate><?php echo $created->format( DateTime::RFC822 ); ?></pubDate>
<description><?php echo $discription; ?></description>
</item>
<?php endforeach; ?>

</channel>
</rss><?php?>