<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<url>
    <loc>https://shop.release.sc/</loc>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
</url>
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

?>
<url>
    <loc>https://shop.release.sc/<?= $item_url ?></loc>
    <priority>0.8</priority>
</url>
<?php endforeach; ?>
</urlset>