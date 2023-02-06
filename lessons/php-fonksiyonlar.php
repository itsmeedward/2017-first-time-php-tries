<!-- Eğlenceli olduğunu düşündüğüm bir alana yetiştim, fonksiyonlar yapmak istediğimiz zor/zaman alıcı/karışık vs. bir ya da birden fazla şeyi basit bir şekilde yapmamıza olanak sağlayan araçlardır.. -->

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
session_start();
//Mesela sring metinler için hazır fonksiyonları öğrenmiştik, mesela strlen,strup ve diğerleri birer hazır fonksiyondu yani o fonksiyon ismin altında o fonksiyonun yapması için verilmiş görevler(kodlar ) var ve o kodu kullanınca o kodlar kütüphaneden çağırılıyor bootstrap gibi..

//hazır fonksiyonlar,gerçekten çok kullanışlılar peki kendimiz fonksiyon oluşturmak istersek bunu nasıl yaparız?

//Fonksiyon nasıl oluşturulur?

function fonksiyonuma_verdigim_isim(){

	//bu alanda diğer araçlarda olduğu gibi kod yazarız. Mesela fonksiyonum ne olsun?

	echo "ben bir fonksiyonum beni çalıştırmak için benim dışımda kendi ismimle beni çağır ";

}

fonksiyonuma_verdigim_isim(); //bakalım mı?... bu kadar basit.

 #--------------------------------------------------------------------------------------------------------

//evet bir az önce () için hiç bir parametre girmedik.. asıl olay şimdi başlıyorr..üstelik reklamda yok

function topla($urun1,$urun2){
#son kullanının çıktısını alabilmek için kullanabiliriz.
	echo $urun1+$urun2;

	#bir şeyler ifade etmeye başladı mı??
}

//topla(); # bir önce ki fonksiyon uygulamasında bu şekilde çıktı almıştık fakat şimdi bu mümkün değil... çünkü () arasına parametreler girdik ve o paramereler için burada da değerler girmeliyiz...

topla(20,30);
#hepsi bu kadar...

//fonksiyonlarda echo yerine return kullanmak;

function topla2($sayi1,$sayi2){

	return $sayi1+$sayi2;
}
echo "<br>";
topla2(22,22); // evet çıktısına bakmış olsaydınız hiç bir şey göremediğinizi fark ederdiniz. işte echo yu returnden farklı kılan özellik de budur. return echo da olduğu gibi fonksiyonun çalışmasını sağlar fakat bunu ekrana yazdırmak Coder ne zaman ister ise echo 'buraya fonskyion ismi'(ve değerler) yazarak çıktıyı alabilir, returnun alış veriş sepeti gibi aletlerde çok işe yarayacağını düşünüyorum kişi ne kadar ürün girerse girsin toplanacak ve sizin belirttiğiniz yerde toplamı görünecek Harika değil mi?

echo topla2(22,22);

echo "<hr>";

#geldik, fonksiyonlar davetsiz misafirleri sevmezler, davet edilenleri de kendi içindenmiş gibi davranırlar... 

$y=30;
function ekle($x){

		return $x+$y; //evet $y(dışarda bir değişken ve değer atanmış) davetsiz olduğu için bu fonksiyon çalışmaz.

}

echo ekle(20); //gördüğünüz üzere ekranda 20 yazıyor oysa biz 50 olmasını istemiştik... İşte çözüm global değişkeni?? yanii..

echo "<hr>";

function eklee($x){
	global $y; #bu araç sayesinde $y değişkeninin buraya girmesini sağladım ve davet edilmiş oldu sonuçta adam global.	
	return $x+$y;
	
}
echo eklee(20); // yeni bilgi aynı isme sahip fonksiyon oluşturamadım, bu yüzden sonuna bir 'e' daha ekledim..

echo "<br>";

//fonksiyonlarda varsıyılan değer oluşturma:: açıklayayım:
/*function yaz($ad,$soyad){


	return $ad." ".$soyad;

}
*/


#echo yaz("Anıl"); //ikinci parametreyi girmek istemiyorum fakat girmediğim zamanda php hata veriyor.. bunu engellemek için parametrelere varsıyalan değerler verebiliriz. yani eğer buraya bir değer girilmez ise onun yerine varsayılan değer alınsın anlamına geliyor... onuda şu şekilde yaparız:

function yaz($ad="ad girilmedi",$soyad="soyad girilmedi ") {

	return  $ad." ".$soyad;
}

echo yaz("anil"); //yukarıda parametrelerime = den sonra varsayılan değerler girdim, istersem buraya birinci parametreye de hiç bir şey yazmasam da olur bu fonksiyon çalıştığı an varsayılan değerler otomatik olarak yazılacaktır eğer bu değerleri girmemiş olsaydım bu fonksiyona kesinlikle (değer vermek zorunda kalırdık.)

echo "<br>";

#fonksiyonun içinde kendi fonksiyonunu kullanmak 

//recursive fonksiyon ;

$sabit=1;
function faktoriyel($x){
	global $sabit;
		if ($x>1) {
				$sabit=$sabit*$x;

				$x--;
				faktoriyel($x);
			}	

			return $sabit;
}

echo faktoriyel(100);
//faktoriyelden anlamaya gerek yok burada fonksiyon içinde fonksiyon kullanımına örnek verildi bakınız yukarıda..

echo "<br>";

#aranılan fonksiyon var mı yok mu uygulaması neden ctrl+f kullanmak varken bu yapılsın ki?? bunu yukarıda ki fonksiyon ile yapacağım yeni bir fonksiyon oluşturmayacağım

#function_exists fonksiyonun olup olmadığını sorgular ve biz bunu if içinde kullanıyoruz.

if (function_exists("faktoriyel")) { //görüldüğü gibi fonksiyonu if değer alma kısmına aldık ve onun içine de aranılacak fonksiyonun ismini "" içinde yazdık too easy..
echo	"aranılan fonksiyon bulundu";
}else{
echo	"aranılan foksiyon bulunamadı";
}
echo "<br>";

#php de kullanılan bütün fonksiyonları dizi halinde listeleyen bir fonksioyun:

$yazdir=get_defined_functions(); // fonksiyon budur bunun çıktısını alabilmek için bir değişkene adadım.

#dizi halinde geleceği için print_r komutunu onuda anlamlı kılmak için <pre> tagları arasında yazacğım.

echo "<pre>";

	print_r($yazdir);
	echo "</pre>"; // en altta benim burada oluşturduğum fonksiyonlar çıkıyor :) ne kadar amatör görnüyorlar bir bilseniz.. :))


echo "<br>"; echo "<hr>"; echo "<br>";


//session nedir? sıkça kullandığımız bir sonucun işlemesini sağlayan bir fonksiyon. mesela kullanıcı girişi yaptığımız zaman o bilgilerin hatırlanmasını profilde görülmesini vs.  sağlayan fonksiyon..




//bir sayfada session fonksiyonu kullanılacaksa bu fonksiyonun çalışması için ayrıca bağımsız bir kod yazarız ve anladığım kadarıyla sayfa başında olur (doğru anlamışım o koddan önce hiç bir kod yazılmamış olamalıdır,bu yüzden başa aldım)scriptlerin sayfa sonunda olması gibi olabilir.. kodlar yukarıdan aşağıya doğru okunduğu içinde olabilir.. fakat ben hemen aşağıda başlatacağım:



$_SESSION['adsoyad']="Anıl Büyüktepe"; #post ve get metoduna olduğu gibi.. ve  canlı bir site olmadığından yani içerisine ben bilgi ataamazsam bilgi olmayacağından = işareti ile varsayılan bilgi atayacağım..

#session i istediğimiz sayafaya yönlendirebiliriz ben sessions isminde yeni bir dosya oluşturacağım ve oraya yönlendireceğim oranın yönetim paneli olduğunu hayal edebiliriz. aslında yönlendirme değilde alma o sayfada bu session ı çağıracağım.



echo $_SESSION['adsoyad']; // burada da yazdırabiliyoruz bu session u çağrdığımız sayafada da yazdırabiliyoruz...

$_SESSION['fiyat']=300;
#-----------------------------------------------------------------------------------
echo "<br>";

#Cookie nedir?? cookie session ların bilgisayarda deopalanan halidir diyebiliriz. web sitelerinde çokça karşılaşılmıştır veri toplamaya ve o veriyi belirlenen sürede hafızada tutmaya yarayan bir fonksiyon.

echo "<br>";


	$adimsoyadim="Edward Maya";

	setcookie("adimsoyadim",$adimsoyadim);

	echo $_COOKIE["adimsoyadim"];

 ?>
</body>
</html>