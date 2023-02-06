<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<?php 

	date_default_timezone_set("Europe/Istanbul");

		//Dizilerde sıklıkla kullanılan hazır fonksiyonlar 

	#sort fonksiyonu dizilerde ki değerleri küçükten büyüğe doğru sıralar(string diziler için de geçerlidir) ;

	$dizi=array(3,2,5,5,1,3,4,7,8,111);

	echo "<pre>";
	sort($dizi);
	print_r($dizi);
	echo "</pre>";
	echo "<br>"."<hr>";
	#rsort fonksiyonu dizilerde ki değerleri büyükten küçüğe doğru sıralar(string diziler için de geçerlidir) ;

	$dizi=array(3,2,5,5,1,3,4,7,8,111);

	echo "<pre>";
	rsort($dizi);
	print_r($dizi);
	echo "</pre>";

echo "<br>"."<hr>";
	#rsort ve sor için string örneği  ;

	$dizi=array("a","da","dl","e","kkl","ş");

	echo "<pre>";
	rsort($dizi);
	print_r($dizi);
	echo "</pre>";
	echo "<br>"."<hr>";
	#in_array dzi içerisinde istenilen değerin olup olmadığını sorgulamaya yarar. aranılan nitelik varsa ondan kaç tane olduğu önemli olmayıp 1 değerini verir, eğer yoksa çıktı vermez.;

	$dizi=array(3,2,5,5,1,3,4,7,8,111);


	echo in_array(9,$dizi);
echo "<br>";	
	#implode fonksiyonu dizileri birleştirmeye yarar(string diziler için de geçerlidir) en sonuncu değeri birleştirmiyor [tersten yazınca da değerleri birleştirmek istediğim özelliği tersine atıyor ve bu kez dizide ki ilk elemana etki etmiyor];

	$dizi=array(3,2,5,5,1,3,4,7,8,111,102);
	
 echo implode($dizi," $");

echo "<br>"."<hr>";
echo "<br>";	
	#explode değişkenlerde ki değerleri parçalayıp dizi haline getirir.

	$mevsim="it Windy / in NewYork";
	
echo explode("/", $mevsim);

  $sonuc= explode(" ", $mevsim);
echo "<pre>";
print_r($sonuc);
echo "</pre>";
echo "<br>";

echo "Mevsim....: ".$sonuc[0]." ".$sonuc[1]." "."Nerede ....:".$sonuc[3]." ".$sonuc[4];



echo "<br>"; echo "<br>"; echo "<br>"."<hr>";


echo $zaman=date("m-d-y h:i:s");

$sonuc=explode(" ", $zaman);
echo "<pre>";
print_r($sonuc);
echo "</pre>";
echo "<br>";
echo "tarih :".$sonuc[0]." zaman :".$sonuc[1];

echo "<br>";

//POST VE GET METODLARI

#Post metodi veriyi gizli gönderir(şifrelenmiş değil), Get metodu ise veriyi görünür şekilde gönderir (URL adresinde her değer görünür);

echo $_POST['ad'];
echo $_POST['soyad'];

$kullanici_id=34;

echo "<hr>"."<br>";

//Koşullar ; if, elseif ve else metodları; elseif ve else metodları kesinlikle if ten sonra kullanılır(kullanılmak zorunda değillerdir).

/*koşullar için kullanılabilecek parametreler ;
	
==   => eşit ise
===  => aynısı ise(genelde string değerler için kullanılır tıpatıp aynısı anlamına geliyor)
<    => küçük ise
>    => büyük ise
<=   => küçük ya da eşit ise
>=   => büyük ya da eşit ise 

*/
#if koşulu; koşulsuz if işe yaramaz bir koşulu if de (condition) kısmında belirtiriz mesela $sayi=3 değişkeni ne bir koşul uygulamak istersek;

$sayi=4;

if ($sayi==3) { // $sayi değişkeni == 3 e eşit mi diye sorduk ve doğruya echo da ki çıktıyı yazdır komutu verdik. eğer değerler birbirine uyuşmuyorsa if koşulu çalışmaz. mesela $sayi da ki değer 4 ise ve biz 3 eşitse komutu vermişssek bu koşul çalışmayacaktır.
	echo "bu sayı 3."; 
}

$sayi=5;

if ($sayi<=6) {
	echo "doğru";
} elseif ($sayi<=4) { //bu komut ise eğer if doğru değilse anlamına gelir yani if değilse belki elseif de ki koşul doğrudur. ve elseifler sonsuza kadar çoğaltılabilir.
	 echo "doğru";
}elseif ($sayi==5) {//buranın çıktısının almamasının sebebi yukarıda ki elseif koşulunun doğru olmasıdır eğer o yanlış olsaydı burda ki koşul yazdırılıcaktı.
	echo "bu sayı eşit";
}

echo "<br>";
$sayi=4;

if ($sayi>5) {
	echo "ben daha büyüğüm";
}elseif ($sayi==6) {
	echo "biz eşitiz";
} else{ // else komutunun olsayı koşulu sonsuz döngüye sokmamak adına en sonuncu çıktıyı verkmektir. yani
    echo "bu koşul sağlanamamaktadır"; // yukarıda ki koşullar sağlanamadığı için en sonunda ki bilgi diyebiliriz olmazsa sonsuz döngü olur.
}


echo "<br>";
echo "<hr>";
//Kısa if koşulu === çok uzun if koşulu kodlarını yazmaktan elseif kullanmadan açağıda ki şekilde kod yazmak oldukça pratiktir.

$say=23;

echo $say==33 ? 'Doğru' : ' Yanlış';

//bunu nerelerde kullanırız? 
	echo "<br>";

	$deger="Muz";
//gibi...
	
#---------------------------------------------------------------------------------------------------------

	//if koşulana bir örnek; aynı Zamanda if koşulunun(condition ) kısmında ikinci bir koşulu sorgulayabilmek için yeni 2 parametre kullandık OR ve AND
	#OR metodu ya da anlamına gelir ve iki koşuldan bir tanesi doğru ise if koşulu geçrekleşir AND koşulunda iki koşul doğru olmalıdır.

	echo "<hr>";
	echo "<br>";

$kadi="Anil";
$passs="123456";

$kullanici_adii=$_POST['kullanici_adii'];
$kullanici_pass=$_POST['kullanici_pass'];

if ($kadi==$_POST['kullanici_adii'] or $passs==$_POST['kullanici_pass']) {
	echo "Giriş Başarılı";
}else{
	echo "Giriş Başarısız";
}

	echo "<hr>";

echo "<br>";
echo "<br>";

// Switch case-- if'in alternatifidir gibidir. ifte ki gibi bursaı=(conditon değil X veriable alanıdır buraya sadece değer girilir mesela $deger gibi.) ve sonra { parantezler içine case veya case'ler yazılır bunları elseif e benzetebiliriz çünkü sonsuz olaiblirler. Döngüyü sonladırmak içinse Default kısmı ile  else benzetebiliriz yaparız. case leri de default u da break ile kapatırız.}
$deger="12";
switch ($deger) {
	case '1':
	echo "burası 1";
	case '11':
	echo "burası 11";
	case '12':
		echo "burası 12";
		break;
	case '10':
	echo "burası 10";
		break;
	default:
		"başka bir şey";
		break;
}
echo "<br>". "<br>";
//switch için bir önrek uygulama;

 if (isset($_POST['notunuz'])) {
	 	echo "notunuz :". $not=$_POST['not']; echo " ";

	 	switch ($not) {
	 		case '1':
	 			echo "Kaldı";
	 			break;
	 				case '2':
	 			echo "geçer";
	 			break;
	 				case '3':
	 			echo "orta";
	 			break;
	 				case '4':
	 			echo "iyi";
	 			break;
	 				case '5':
	 			echo "pek iyi";
	 			break;
	 		
	 
	 		default:
	 		echo "bulunamadı...";
	 			break;
	 	}
 } // isset bir fonksiyodur ve ( içine parametreler alır) kısaca var mı yok mu anlmını taşır, bu sayade bir form post edilmedikten önce hiç bir değer alınmaz (gösterilmez vs. ) fakat bunu kullanmadığımız vakit default da ki değer yazılacaktır. isset şunu der şu.. isme sahip bir şey gönderildiğine bu işlemler çalışsın eğer gönderilmeze çalışmasın... Ayrıca isset başına ! parametresini alır(!isset) bu da boş değilse anlamına gelir.

 echo "<br>"."<br>";

 #sayının tek mi çift mi olduğunu bulan uygulama:


if (isset($_POST['sayi'])) {
	echo "sayı :".$sayi=$_POST['gir']; echo " - ";
	if ($sayi%2) {
		echo "bu sayı tektir.";
	}else{
		echo "bu sayı çifttir.";
	}

}

	?>

	
	
<!--
	sayının tek mi çift mi olduğunu bulan uygulama:
<form method="post">
		
		sayı giriniz: <input type="number" name="gir" >
							<button type="submit" name="sayi">Gönder</button>
	</form>

	 swtich örnek uygulama =
	<form method="post">
		
		notunuzu giriniz: <input type="number" name="not" max="5" min="1">
							<button type="submit" name="notunuz">Gönder</button>
	</form>
-->
<!-- İf uygulama örneği;
	<form method="POST" >
		Adınızı Giriniz <input type="text" name="kullanici_adii" placeholder="adınızı giriniz">;
		Şifrenizi giriniz <input type="password" name="kullanici_pass" placeholder="şifrenizi giriniz">;

		<button type="submit" value="Giriş yap" >Giriş Yap</button>

	</form>
-->
<!-- 
	 kısa if koşuluna örnek:
	<select>
		<option <?php //echo $deger=="Elma" ? 'selected' : ''; ?>>Elma</option>
		<option <?php //echo $deger=="Muz" ? 'selected' : ''; ?>>Muz</option>
	</select>
-->
	<br><br><br><br><br><br>
<!-- GET POST METODU ÖRNEĞİ ;
<form action="islem.php" method="GET">
	
	<label>Adınızı giriniz<input type="text" name="ad"></label>
	<label>SoyAdınızı giriniz</label><input type="text" name="soyad">

<label></label><input type="submit" value="Gönder" name="">
</form>

<a href="islem.php?kullanici_id=<?php echo $kullanici_id; ?>"><button>Sil</button></a>
-->
</body>
</html>


