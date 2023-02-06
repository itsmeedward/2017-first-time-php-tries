<?php 
require_once 'baglan.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	date_default_timezone_get('Europe,Istanbul') ?>

	<!-- CRUd işlemine bir örnek: -->
	<h1>Veri Tabanı Formu</h1>

	<?php 

	if ($_GET['durum']=='ok') {
		echo "Kayıt işlemi Başarılı";
	}elseif($_GET['durum']=='er')
{echo "Kayıt işlemi Başarısız";}//islem.php de ?durum(isim farklı olabilir bu getin aldığı değer ismi) metodu ile get değeri oluşturduk ve pozitif negatif sonuçlar için kullanıcıya mesajı ilettik.

?>
<hr>

<form action="islem1.php" width="500px" method="POST">
	name <input type="text"  required="" name="London_Name" placeholder="Lütfen adınızı giriniz....">
	surname <input type="text"  required="" name="London_surname" placeholder="Lütfen adınızı giriniz....">
	mail <input type="email"  required="" name="London_mail" placeholder="Lütfen adınızı giriniz....">
	about <input type="text" name="London_about" placeholder="optional">
	age <input type="number" min="1" max="150" required="" name="London_age" placeholder="Lütfen adınızı giriniz....">
	autobio <input type="text" name="London_autobio" required="" placeholder="input your own autobiography">

	<button type="submit" name="insertislemi">İşlemi Tamamla!</button>

</form>
<hr>

<table width="" border="1">
	<?php $bilgilerimsor=$db->prepare("SELECT * FROM london");


$var=0;
$bilgilerimsor->execute();

while ( $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)
) { $var++;
 ?>
	<tr>
		<th>NO:</th>
		<th>London_ID</th>
		<th>London_Name</th>
		<th>London_surname</th>
		<th>London_mail</th>
		<th>London_about</th>
		<th>London_age</th>
		<th>London_autobio</th>
		<th>Düzenle</th>
		<th>İşlem</th>
	</tr>

	<tr>
		<td><?php echo $var; ?></td>
		<td><?php echo $bilgilerimcek['London_ID']; ?></td>
		<td><?php echo $bilgilerimcek['London_Name']; ?></td>
		<td><?php echo $bilgilerimcek['London_surname']; ?></td>
		<td><?php echo $bilgilerimcek['London_mail']; ?></td>
		<td><?php echo $bilgilerimcek['London_about']; ?></td>
		<td><?php echo $bilgilerimcek['London_age']; ?></td>
		<td><?php echo $bilgilerimcek['London_autobio']; ?></td>
		<td>><a href="update.php?London_ID=<?php echo $bilgilerimcek['London_ID'] ?>"><button type="submit" style="text-align: " name="duzenle">Düzenle</button></a></td>
		<td>><a href="islem1.php?London_ID=<?php echo $bilgilerimcek['London_ID'] ?>&bilgilerim_sil=ok"><button type="submit" style="text-align: " name="duzenle">Sil</button></a></td>
	</tr>
	<?php } ?>
</table>


	<hr>

<?php 
//Veritabanından veri çekme işlemi::


//öncelikli olarak veritabanıma bağlı dosyayı buryaa bağlamalaıyım ve o başlantı bildiğiniz üzere sayfanın en başında olmalıdır.. bağlantı işlemi başarılı.. shadi çekme işlemine başlayalım.

/*
		$bilgilerimsor=$db->prepare("SELECT * FROM london");
	

		$bilgilerimsor->execute();

		$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC); //buraya kadar olan işlemler standart bilgi çekme kodlarıdır tabi data base de ki değişken ismi grafik ismi vs bunlar değişebilir fakat temeli budur.. 

		echo "<pre>";
			print_r($bilgilerimcek);
			echo "</pre>";

echo"<hr>";

echo $bilgilerimcek['London_age'];*/ //burada sadece london_age ismin altındaki değeri çağırdırk 


//yukarıda ki metod da bir döngü olmadığı sadece için ilk veri geldi.. bunu aşağıda while döngüsü ile çözümledik while döngüsü çağrılan verrinin uzunluğu(miktarı)kadar veriyi otomatik alır. 

$bilgilerimsor=$db->prepare("SELECT * FROM london");

$bilgilerimsor->execute();

while ( $bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC)
) {



	echo "<pre>";
print_r($bilgilerimcek);
echo "</pre>";



}		
?>



</body>
</html>