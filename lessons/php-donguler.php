<!-- Sonunda Döngülere geçtim Php dilini kavramaya başladım ve her yeni bir kavrayış ayrı güzel bir duyguya eşitmiş gibi.. En sonunda yapmış olduğum projeler beni çok mutlu edecek çünkü büyük gayeleri olan birisi olarak bunlara çok ihtiyaç duyuyorum ayrıca bilgisyara olan diğer sempatimde beni bilgisyarı öğrenmeye çekmekte :) kendime güveniyorum ve gördüğüm kadarıyla ortalama 1 ay içerisinde veya 15-20 gün içerisinde dinamik web siteleri oluşturabiliyor olacağım ve kendmi bu alanda hızla geliştirmeye devam edeceğim ayrıca aklımda ki projelerin bir kısmı hayata geçmiş olacak...-->

<?php 

#----------------DÖNGÜLER-----------------------


/*For Döngüsü ;
 for döngüsünde kısımlar şu anlamlardadır :
 
 --$i=0  : Başlangıç değeri: 
 --$i < (buraya 10 veya başka bir şey de gelebilirdi ve şu anlama geliyor $i değişkeni 10 dan küçük mü? ve bu işlemi sürdürebilmesi için aşağıda ki arttırma operatörünü kullanır 10'a gelince durur. ) : sorgulama alanı(if gibi):
 --$i++  : arttırma operatörü: 

for ($i=0; $i < ; $i++) { 
	
}
 
*/

for ($i=0; $i <= 7 ; $i++) { 
	
	echo "$i"; echo "<br>";
}

/*Genel Bilgi :: PHP de html kodlarını kullanabilmek için  echo komutundan başka yollar da vardır değiliz; html kodlarının yazılması istenilen alanlar php tagları ile kapatılır ve yeniden php tagları açılır mesela::

for ($i=0; $i <= 7 ; $i++) { ?> burada kapattık 
	
<php	echo "$i"; ?>buraya her for döngüsü içinde yazılacak olan bütün php kodlarını yazabiliriz ve istediğimiz html kodunu bu alan içine yazabiliriz :: 

<br> gibi.... veya <p> </p> gibi.. hepsi olabilir.. 

 (echo "<br>" artık buna gerek yok); 
	burada php kodlarını yazmak içinse yine php tagları açmak zorundayız fakat html kodları salt bir şekilde yazabiliriz...
<php }?> burada kapattık 
*/
 ?>

   <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  </head>
  <body>
  <?php //For döngüsüne basit bir örnek ilk plakalarını gösterme : ayrıca php ve html kodlarını esnek bir şekilde kullandık...  For döngüsü 1 den 84 e kadar çıktı verdi diğer türlü 84 tane option yapmaya gerek kalmadı ve value değerine aynı kodu girdik post işlemi uygulandığı zaman seçişmiş olan plaka (mesela 35) direkt olarak post edilir... 

  ?>

   <select>
   	<?php for ($i=1; $i <=84 ; $i++) { ?>
  

   	<option value="<?php echo $i; ?>"> <?php echo $i; ?></option>
   

   	<?php } ?>


   </select>
<br><br>
   <?php 

   #for döngüsü içinde pratik if kullanımı:
for ($i=0; $i <=25 ; $i++) { 
	echo "$i". " ";
	if ($i==12) {
		echo "<br>". $i. ". sayıya ulaştınız" ;
		echo "<br>";
		
	}
}
echo "<br>";
echo "<br>";
echo "<hr>";
//for döngüsü ile sayılalrın çift mi tek mi olduğunu bulma uygulaması:: 
$tek=0;
$cift=0;
for ($b=1; $b <=25 ; $b++) { 
	

	echo "$b. sayı :" .$b;
	

	if ($b%2==0) {
		echo " bu sayı çifttir."; 
		$cift++;
	}else{
		echo " bu sayı tektir.";
		$tek++;
	}
	echo "<br>";
	echo "<hr>";

}	
echo "<br>";
echo "Çift sayı adeti $cift kadardır.";echo "<br>";echo "<hr>";
echo "Tek sayı adeti $tek kadardır.";

    ?>
  <?php 

//while döngüsüne bir örnek : ::  for dan farklı olarak değişken dışarıdan alınır ve arttırma operatörü süslü parantezler  içine yazılır. kullanım alanları farklı olabilir.
$sayi=2;
  while ( $say<= 14) {
  	$say++;

  	echo "$say". "<br>";

    }
// Pratik for döngüsü ile dizi eleamanlarını otomatik listeleme: 

    #en ilkel yöntem ile yapmak istersek şöyle yapıyorduk::

    $gezegenler=array("Saturn","Venus","Jupiter","Dünya","Neptun","Mars","Pluton");

    echo "<pre>";
    print_r($gezegenler);
    echo "</pre>";
echo "<hr>";

 #Tek tek almak istediğimizde şü işlemi yapıyorduk:

  echo $gezegenler[0]; echo " ";
  echo $gezegenler[1]; echo " ";
  echo $gezegenler[2]; echo " ";
  echo $gezegenler[3]; echo " ";
  echo $gezegenler[4]; echo " ";


  //sizcede çok uzun bir ilem değil mi düşünsenize 100 adet eleman olduğunu bunları tek tek yazdırmak akıl karı değil..
  #işte bu durumda for döngüsü çok işe yarıyor..

echo "<br>";echo "<hr>";echo "<br>";
  for ($i=0; $i <=4 ; $i++) { 
  		
  	echo $gezegenler[$i]; echo " ";
  }
   //bu işlemde 4 defa döndüreceği için dizi deki 4. eleamndan sonrasını çıktı olarak almayacaktır. bu olayı giderebilmek count fonksiyonunu kullandık ve bu fonksiyounu bir değişken içine aldık o değişkeni de i ye karşılık artacak değer olarak atadık(kaç eleman varsa o kadar artar) çok mantıklı ve basit bir işlem ile sonsuz elamanları bu kadar kısa kod ile aynı anda listeleyebiliriz.. 

  $dizi=count($gezegenler);
  echo "<br>"; echo "<hr>";echo "<br>";
  for ($i=0; $i <=$dizi ; $i++) { 
  	echo $gezegenler[$i]; echo " ";
  }
  echo "<hr>"; echo "<br>"; echo "<br>"; echo "<br>";
  
 #evet yukarıda ki kodların basit olduğunu düşünüyorsanız yanılıyorsunuz dizileri listelemenin en basit yolunu açıklıyorum::
/*  foreach ($variable as $key) {
 
  } $veriable kısmına değişken $key kısmınaysa bir anahtar sözcük giriyoruz bu herhangi birşey olabilir, döngü yapabilmesi için gereklidir. daha önce kullanılmamış bir sözcük olmalıdır.
  */
  //foreach döngüsü

  foreach ($gezegenler as $gezegen) { //yukarıda oluşturduğum dizi değişkenini burada yeniden kullanıyorum::gezegenlerle ilgili dizi olduğu için key ismini gezen verdim tabi ki bu isim bambaşka bir şeyde olabilir.
  	echo $gezegen; echo " ";
 
  } #işte bu kadar basit.
  
   ?>
  </body>
  </html>
   
  </body>
  </html>