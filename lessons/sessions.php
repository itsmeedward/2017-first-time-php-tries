<?php 
session_start();



echo $_SESSION['adsoyad'];

echo $_SESSION['fiyat'];

#sessionlar için login işlemlerini örnek verdik giriş yapmış bir kullanıcı çıkış yapmak istediğinde izleyeceğimiz yolllar :,
#çıkışı sağlamak için sessionları sileriz seçmeli ve tamamen(birden) silebiliriz 
#öncelikli olarak tekli silmeye bakalım ... 

unset( $_SESSION['fiyat']); //bu tekli silme işlemi idi . birde bütün sessionları silme taktiği var o da şöyle: 

session_destroy(); #bu kadar.. artık bütün sessionlar silinir.
 ?>