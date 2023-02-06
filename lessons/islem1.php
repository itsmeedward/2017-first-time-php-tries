<?php 
 
require_once 'baglan.php'; //database e bağlanmanın farklı bir yöntemi ve kesinlikle sayfa başında olmalıdır.
//databese veri göndermek için baglan.php oluşturdum fakat  o formulü nasıl kullanacağım işte isminin bağlan olmasının bir sebebi vardı burada onu bağlacayacağız.

//include 'baglan.php'; //bağalama işlemi başarılı.

#

if (isset($_POST['insertislemi'])) {
	
		$kaydet=$db->prepare("INSERT INTO london set


			London_Name=:London_Name,
			London_surname=:London_surname,
			London_mail=:London_mail,
			London_age=:London_age,
			London_autobio=:London_autobio,
			London_about=:London_about
			");

		$insert=$kaydet->execute(array(
		
			'London_Name'=>	 $_POST['London_Name'],
			'London_surname'=>	 $_POST['London_surname'],
			'London_mail'=>	 $_POST['London_mail'],
			'London_age'=>	 $_POST['London_age'],
			'London_autobio'=>$_POST['London_autobio'],
			'London_about'=>$_POST['London_about']

		));

		if ($insert) {


			echo "Kayıt İşleminiz başarıyla tamamlanmıştır.";

			header("location:pdo_mysql.php?durum=ok"); //formun gönderildiği sayfaya geri yönlendirmek için kullanılır.
			exit; //bunu ekleme sebebimiz bu özelliğin komut kullanıldıktan sonra komutu durdurması
		}else{
			echo "Kayıt İşleminiz başarısız sonuçlanmıştır.";
			header("location:pdo_mysql.php?durum=er");
			exit; 
		}//burada ki metodalr Post metodu ile çalıştığı için kullanıcı işlemin başarılı yada başarısız olduğunu analayamaz kullanıcıya bilgi vermek için get metodunu kullanabiliriz. hedaer yönlendirme yapıyordu header içinde ki dosyanin (mesela saf.php) sonuna ? ile get metodunu başalatabiliriz ve sonra ona bir değer veririrz mesela durum=ok diyebiliriz get metodumuz hazır ve kullanıcın olduğu sayafada formun alakalı bir köşesine if metoduyla bilgi verebiliriz.
		#örnek : header("location:pdo_mysql.php?durum=ok"); 

}

if (isset($_POST['updateislemi'])) {
	

$bilgilerim_id=

		$kaydet=$db->prepare("UPDATE london set


			London_Name=:London_Name,
			London_surname=:London_surname,
			London_mail=:London_mail,
			London_age=:London_age,
			London_autobio=:London_autobio,
			London_about=:London_about,
			where London_ID={$_POST['London_ID']}
			");

		$insert=$kaydet->execute(array(
		
			'London_Name'=>	 $_POST['London_Name'],
			'London_surname'=>	 $_POST['London_surname'],
			'London_mail'=>	 $_POST['London_mail'],
			'London_age'=>	 $_POST['London_age'],
			'London_autobio'=>$_POST['London_autobio'],
			'London_about'=>$_POST['London_about']

		));

	if ($update) {
			echo "Kayıt İşleminiz başarıyla tamamlanmıştır.";

			header("location:update.php?durum=ok&bilgilerim_id=$bilgilerim_id");
			exit;
		}else{
			echo "Kayıt İşleminiz başarısız sonuçlanmıştır.";
		header("location:update.php?durum=ok&bilgilerim_id=$bilgilerim_id");
			exit; 
		}
	}	

if ($_GET['bilgilerim_sil']=='ok') {
	$sil=$db->	prepare("DELETE from london where London_ID=:id");

	$kontrol=$sil->execute(array(

		'id' => $_GET['London_ID']

	));
		if ($kontrol) {
			

			
		header("location:pdo_mysql.php?durum=ok");
			exit;
		}else{
		
		header("location:pdo_mysql.php?durum=no");
			exit; 
		}
	}	



}

 ?>