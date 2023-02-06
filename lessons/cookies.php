<?php 


date_default_timezone_set('Europe/Istanbul');

	$adimsoyadim="Edward Maya";

	setcookie("adimsoyadim",$adimsoyadim); // bu sayafa ya geçme sebebim fonksiyonlar sayafasında çalışmamasıydı. setcookie ile cookie ye bir ad veriyoruz ilk parametre cookinin adı sonra virgül ekleyip değer veriyoruz sonra bu cookie nin ne kadar süre kalmasını istiyorsak onu belirtiyoruz direk saat belirteceksek time fonksiyonunu kullanabiliriz fakat günler ve ya haftalarca kalmasını istiyorsak strtotime fonksiyonu işe yarayacaktır... aşağıda bir örnek yapalım.. 

	echo $_COOKIE["adimsoyadim"];
echo "<hr>";


	$admsoyadim="Edward Maya";

	setcookie("admsoyadim",$adimsoyadim,time()+3600);  //+ ile3600- 1 saate eşit. bu veri 1 saat boyunca depolanacak tabii tarama verileri silinmez ise.. 
	echo $_COOKIE["admsoyadim"];

echo "<hr>";
$adsoyadim="Edward Maya";

	setcookie("adsoyadim",$adimsoyadim,strtotime("+5 week"));//daha uzun süreler için  5 hafta boyunca kalmasını sağlayabilirim.   isteseydim 5  gün için +5 day komutu da verebilirdim.
	echo $_COOKIE["admsoyadim"];


//cookiler nasıl silinirler silme işlemi için cookies1.php isminde yeni bir sayfa oluuşturacağım pratik yapmak için. hem o sayafaya cookie i çağırmış olacağım.. bunu da göreceğiz.  silecğeim cookie ise en üstte ki olacak çünkü o diğerlerinden farklı isme ve farklı değişken ismine sahip. tek bir tane silmek istiyorum..  ve silemedimm şimdilik bu konuyu geçiyorum ileride geri dönüş yapacağım.




 ?>