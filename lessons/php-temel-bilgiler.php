<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

	echo "yazı Php-de genel olarak bu komut ile ekrana aktarılır ";

//Bu bir yorum satırıdır.
	echo "string";
 #Bu bir yorum satırıdır.
	echo "string";
 /*Bu bir yorum satırıdır
 		echo "string";
 */

 //Birleştirme operatörü- bilrşetirme işlemi "." ile yapılır 

 		echo "Anıl"." Bey"." Bu gün Çok şıksınız.";

//Değişkenler

/* 
-Değişken operatörü '$' işareti ile başlar.
-Değikenlerde İngilizce karakterler kullanılır.
-Değikenlerde boşlun bırakılmaz yazılanları ayırmak istersek '_' ile ayırabiliriz.
-Değişkenlerde rakam ile başlanmaz fakat ilk harften sonra rakam eklenebilir.
-değişkenlere değer ataması yapmak için '=' kullanılır.
-String yani metinsel ifadeler için "" ya da '' işaretler kullanılır.
-integer sayı değerleri metinsel ifadeler de olduğu gibi ya da direkt bir biçimde yazılabilir.
-değişkenleri echo ile ekrana yazdırabiliriz, değişkenleri  echo içinde "" içinde yazdıramayız salt bir şekilde yazarız.
- değikenlerde birleştirme (.) operatörü ile birleştirilebilir.
-eğer aynı karakterlere(isme) sahip yeni bir değişken oluşturulursa(ilk değişkenin altında yazılmışsa), ilkinci değişken değerini yeni değişkene verilmiş değer ile değiştirir(önce ki değişken etkilenmez yeni değişkenden sonraları yeni değeri alır).
-Değişkenlerde küçük-büyük harf fark eder mesela $Anil- değişkeni ile $anil değişkeni farlı değişkenlerdir.
 */

$anil="Benim Adım Anıl";
$Soyad="Greathill";
$okul1ne_durumda='hazırlık';
$hobiler="İnternet, bisiklet sürmek, sinema, bilgisayar bilimi, mutfak";
echo $yas=18;
$Yas="21";

$yas=21;

echo $anil.$Soyad.$okul1ne_durumda.$hobiler.$Yas.$yas;

//php kodları içinde HTML kodlarını yazmak;
/*TML kodlarını echo komutu içinde yazabiliriz. 
örneğin: echo "<p></p> olabilir. 

echo içinde html kodlarını birleştirme operatörü ile tek bir yerde defalarca kez kullanabiliriz.

*/
echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
echo "<hr>"."<br>". "<br />";
#veya..

echo "<br>"; 

echo "<br>"; 

?>

<?php 
//Uygulama;
#Ad, soyad, no değikenlerini ayrı ayrı oluşturup birleştirme operatörü ile tek bir yerde yaz,
$Ad="Anıl";
$Soyad="Greathill";
$no=87;

echo "<h1>Bilgilerim</h1>"."<hr>";
echo "Adınızı ve soyadınızı giriniz..........: ".$Ad." ".$Soyad." "."<br>"."Numaranızı giriniz........: ".$no;
echo"<hr>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>"."<hr>";
?>

<?php 
#Matematşksel ilem operatörleri;
/*
 + Toplama işlemi
 - Çıkartma İşlemi 
 * Çarpma İşlemi
 / Bölme İşlemi
  
*/

 $sayi1=87;
 $sayi2=88;

  // echo $sayi1+$sayi2; olabilir

 $toplam=$sayi2+$sayi1;

 echo $toplam;

 echo "<br>";
 echo "$sayi1 + $sayi2 = $toplam";
 echo "<br>"."<hr>";

//çıkarma işlemi
 echo "<br>"."<br>";

 $cikar=$sayi2-$sayi1;

 echo "<br>";
 echo "$sayi1 - $sayi2 = $cikar";
 echo "<br>"."<hr>";

//Çarpma işlemi

 echo "<br>"."<br>";

 $carp=$sayi2*$sayi1;

 echo "<br>";
 echo "$sayi1 * $sayi2 = $carp";
 echo "<br>"."<hr>";


//Bölme işlemi

 echo "<br>"."<br>";

 $bol=$sayi2/$sayi1;

 echo "<br>";
 echo "$sayi1 / $sayi2 = $bol";
 echo "<br>"."<hr>";
 echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

//Atama Operatörü
/* değişkenleri anlatırken "=" atama operatörü olduğunu söylemiştim. atama operatör örnek çözlümleri;

*/

$no1=700;


//örnek

echo $no1-=300;

// - operatörünü kullandım ve kolay bir şekilde çıkarma işlemi uyguladım bu işlem diğer varyasyonlar içinde geçerlidir.

echo "<br>";
echo $no1*=2.5;

echo "<br>";


echo $no1/=2.5;

//vs.
echo "<br>";echo "<br>";echo "<br>";
//arttırma operatörlerinde ++ ve -- oldukça kllanışlı operatörlerdir. ++ değişkeni bir arttır -- ise değişkenibir azalt anlamına geliyor. Diğer atama operatörlerinden farklı olarak mesela $degisken+'='1 kullanmak yerine yanı '=' kullanmak yerine direk olarak $degisken++; şeklinde yazarız ve değer bir(1) artrar.


$arti=13;

 echo $arti++; #birşey fark ettim o da arttırma operatürünü echo iiçinde direk yazınca çalışmıyor ilk değer kalıyor(13), arttırma değeri atadıktan sonra o değişkeni echo ile yazdırınca arttırma operatörü çalışıyor. 

 echo "	".$arti;
 echo "<br>";
 echo $arti--;
 echo " ".$arti;

 echo "<br>";



 echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

//hazır fonksiona bir örnek ;
#rand fonksiyounu hazır bir fonksiyondur, çalıştırıldığında kütüphaneden otomatik kod çağırısında bulunur, fonksiyonların çlaışma prensibini şu şekilde açıklayabiliriz, ilk başta ismi yazılır sonra () arasına değerler girilir ve daha sonra işlem gerej,ktiryorsa {} içine işlemler yazılır.

//Rand fonksiyonu belirli sayılar arasında otomatik sayı üretir mesela () arasına 10,20 yazarsam her sayfa yenilendiğinde 10-20 arasında bir sayıyı oluşturur.

 echo rand(10,20);


 echo "<br>";echo "<br>";

//"" çift tırkank ve '' tırnakların arasında ki  farklar;

 $mrbsd="Anıl";

 echo "Merhaba ben $mrbsd";

 echo "<br>";
 echo 'Merhab ben $mrbsd';

#"çift tırnaklar içine değişkenler yazılabilir" ' tek tırnaklar içine değişkenler yazılamaz(içinde ki değer okunmaz).'
 echo "<br>";echo "<br>"; echo "<hr>";
//Yoksayma ve kaçış etiketi;
#kısaca bir kodu işlevsizleştirmeye yarayan bir araçtır. örneğin;

 $yoksay='tünaydın bugün hava yağmurlu';

echo "bu gün hava nasıl? $yoksay"; //burada bir farklılık yok bu gün hava nasıl sorusundan sonra yoksay değişkenine verilmiş değer çıktısı ekrana yazılır. fakat ben değişkeni yoksaymak istersem bunu nasıl başarabşlirim hatta "" içinde "" tırnak ta kullanabilirim.

echo "<br>";
echo "\"bugün\" hava nasıl? \$yoksay";// şimdi ekranda bu gün "" tırnaklar içinde yazılmış olarak $yoksay değişkeni d $yoksay şeklinde yazılmıştır, normal şartlarda "" içinde "" kullanılamaz, ben \ bu işaret ile bir kodu işlevsizleştirebiliyyorum.
echo "<hr>";echo "<br>";echo "<br>";echo "<br>"; 
//hazır string(metin) fonksiyonlarına geçiş;
#bir çok tane hazır formül bulunmaktadır :) 
//öncelikle bir değişken oluşturalım, hadi yapalım!

$stdegisken="DÜNYAMIZDA Kİ BÜTÜN GÜZELLİKLER İNSAN AKLININ YORUMUDUR.";

echo "$stdegisken";
echo "<br>";
//Her harfi küçük harfe çeviren fonksiyonumuz(belirtmiştim buraya özelilik girilir, buraya değişkenimizi girmeliyiz).;
echo strtolower($stdegisken);
echo "<br>";
//Her harfi BÜYÜK harfe çeviren fonksiyonumuz(belirtmiştim buraya özelilik girilir, buraya değişkenimizi girmeliyiz).;
echo 	strtoupper($stdegisken);
echo "<br>";
echo $stdegisken=strtolower($stdegisken);
echo "<br>";
//Metinde ki her kelimenin ilk harfini Büyük harfe çeviren fonksiyonumuz(belirtmiştim buraya özelilik girilir, buraya değişkenimizi girmeliyiz).;
echo ucwords($stdegisken);
echo "<br>";
echo strtolower($stdegisken);
echo "<br>";
//Metinde ki ilk kelimenin ilk harfini Büyük harfe çeviren fonksiyonumuz(belirtmiştim buraya özelilik girilir, buraya değişkenimizi girmeliyiz).;
echo ucfirst($stdegisken);
echo "<br>";
echo "<br>";

//Metinde kaç karakterin olduğunu hesaplayan ve bunu belirten fonksiyonumuz.not; boşluklarda bir karakter olarak hesaplanır.(belirtmiştim buraya özelilik girilir, buraya değişkenimizi girmeliyiz).;

echo "\$stdegisken karakter uzunluğu :".$stdegisken=strlen($stdegisken);
echo "<br>";
echo "<br>";
//Metinde ki istenilen karakter uzunluğunu gösterir diğerlerinden farklı olarak () içine istenilen uzunlukta değişken isminden sonra verilir. fonksiyonumuz(belirtmiştim buraya özelilik girilir, buraya değişkenimizi girmeliyiz).; bir örnek:
$yazi="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
";

echo "<h1>Haber Başğılı</h1>";
echo "<hr>";

echo "<p>".substr($yazi,0,200)." ... </p>";
echo "<a href=\"#\">Devamını oku</a>";
echo "<br>";
echo "<br>";




echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

?> 



</body>
</html>


