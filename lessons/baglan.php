<?php 

//bu işlem kullanacı dan veritabanına dosyaları aktarabilmemiz için köprü niteliğindedir aşağıda ki formül biraz incelendiğinde ve sırası öğrenildiğinde aslında veritabanı bilgileri girildiği görülebilir. bunlar düzenli bir şekilde çağırılıyor ve bu işlem diğer mesela  form işleminin bağlantısı ile onu da varsalaım islem1.php ile birbirine bağlanıyor islem1.php den verileri alıyor ve database e gönderiyor... 
try{

		$db=new PDO("mysql:host=localhost;dbname=england;charset=utf8","root","12345678");

	//echo "Veritabanına başarılı ile bağlanıldı";
}
	catch(PDOExpception $e){
			echo $e->getMessage();

	}





 ?>