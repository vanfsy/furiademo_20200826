<?php



//表示するカウンターの桁数（5に設定し、カウント数が1桁の場合は、00001の様に表示されます）
define("PLACE", 7);

define("SITEDIR", "");


//*****************************　設定ここまで　******************************




$countfile = "count.txt";

$sn = $_SERVER['SCRIPT_NAME'];

$snpath = explode("/",$sn);
$snurl = count($snpath) -2;

for($i=0;$i<$snurl;$i++){
$durl .= $snpath[$i+1] . "/";
}

$rf = $_SERVER['HTTP_REFERER'];
$rfn = count(explode("/",$rf)) -4;

for($i=0;$i<$rfn;$i++){
$uurl .= "";
}



$fp = fopen("count.txt", "r+") or die("Error1");
if(function_exists('stream_set_write_buffer'))stream_set_write_buffer($fp, 0);
flock($fp, LOCK_EX);
$number = fgets($fp);
$number++;
rewind($fp);
fputs($fp, $number);
flock($fp, LOCK_UN);
fclose($fp);
$number = str_pad($number, PLACE, '0', STR_PAD_LEFT);

for($i=0;$i<strlen($number);$i++){
$num = substr($number,$i,1);
$total .= "<img src=\"$uurl${durl}images/${num}.gif\" alt=\"${num}\" border=\"0\">";
}


$js = "\ndocument.write(\"";
$js .= addslashes("<div align=\"center\"><span style=\"color:#989ab5;\">" . $number . "</span></div>");
$js .= "\");";
echo "$js";




?>