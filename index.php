<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>fff</title>
	<style type="text/css">
	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
margin:0px;
padding:0px;
list-style: none;
}

	body {
	background:#e5e5e5;
	margin-top:40px;
	}
	.gen {
	width:300px;
    height:700px;
	margin:auto;
	background:#0096ff;
	padding: 40px;
	}
	.for {
	width:300px;
    height:30px;
	background:#e9e9e9;
	text-align:center
	}
	h1{
	font:17px bold;
	}
	</style>
</head>
<body>
<div class="gen">
  <h1>Ad Soyad:</h1>
  <div class="for">
	<?php
$kisi[0] = "mehmet";
$kisi[1] = "ahmet";
$kisi[2] = "ayse";
$kisi[3] = "ayhan";
$kisi[4] = "necmi";
$kisi[5] = "huseyin";
$kisi[6] = "can";
$kisi[7] = "elif";
$kisi[8] = "Aslan";
$kisi[9] = "kahraman";
$kisi[10] = "Aktug";
$kisi[11] = "alev";
$kisi[12] = "Aynur";
$kisi[13] = "abdi";
$kisi[14] = "hasan";
$kisi[15] = "emin";
$kisi[16] = "davut";
$kisi[17] = "hikmet";
$kisi[18] = "kaya";
$kisi[19] = "sibel";
$kisi[20] = "ezgi";
$kisi[21] = "deniz";
$kisi[22] = "hasan";
$kisi[23] = "ferdi";
$kisi[24] = "fetih";
$kisi[25] = "ali";
$kisi[26] = "ugur";
$kisi[27] = "huseyin";
$kisi[28] = "gulcan";
$kisi[29] = "dilara";
$kisi[30] = "duygu";
$kisi[31] = "nilufer";
$kisi[32] = "enes";
$kisi[33] = "mert";
$kisi[34] = "isa";

$sonuc = rand(0,34);

$ad = $kisi[$sonuc];

echo $ad;
?>
&nbsp;
<?php

$soyad[0] = "yıldız";
$soyad[1] = "filikci";
$soyad[2] = "yarma";
$soyad[3] = "dikmen";
$soyad[4] = "coskun";
$soyad[5] = "şirin";
$soyad[6] = "oz";
$soyad[7] = "toprak";
$soyad[8] = "okuducu";
$soyad[9] = "demir";
$soyad[10] = "can";
$soyad[11] = "buyuk";
$soyad[12] = "aktas";
$soyad[13] = "aydogan";
$soyad[14] = "boyacı";
$soyad[15] = "aydogan";
$soyad[16] = "gul";
$soyad[17] = "tayfun";
$soyad[18] = "ardıc";
$soyad[19] = "koc";
$soyad[20] = "kutlu";
$soyad[21] = "adanır";
$soyad[22] = "kaba";
$soyad[23] = "sahin";
$soyad[24] = "yılmaz";
$soyad[25] = "uygun";
$soyad[26] = "konuk";
$soyad[27] = "karaaslan";
$soyad[28] = "öztürk";
$soyad[29] = "keles";
$soyad[30] = "datron";
$soyad[31] = "inci";
$soyad[32] = "yorulmaz";


$son2 = rand(0,32);

$soyad = $soyad[$son2];

echo $soyad;

?>
</div>
<br />
<h1>e-mail:</h1>
<div class="for">
<?php
echo rand(0,1000)
?>
@hotmail.com (Mail adresi geçerli değildir.)
</div>
<br />
<h1>kullanıcı adı:</h1>
<div class="for">
<?php
echo $ad , $soyad ;
echo rand(0,1000)
?>
</div>
</div>

</body>
</html>
