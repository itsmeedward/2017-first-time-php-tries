<?php require_once 'baglan.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

	 $bilgilerimsor=$db->prepare("SELECT * from london where London_ID=:id");

	$bilgilerimsor->execute(array(

		'id'=> $_GET['London_ID']
	));

$bilgilerimcek=$bilgilerimsor->fetch(PDO::FETCH_ASSOC);

	
 ?>

 <form action="update.php" method="POST">
	name <input type="text"  required="" name="London_Name" value="<?php echo $bilgilerimcek['London_ID'] ?>">
	surname <input type="text"  required="" name="London_surname" value="<?php echo $bilgilerimcek['London_Name'] ?>">
	mail <input type="email"  required="" name="London_mail" value="<?php echo $bilgilerimcek['London_surname'] ?>">
	about <input type="text" name="London_about" value="<?php echo $bilgilerimcek['London_about'] ?>">
	age <input type="number" min="1" max="150" required="" name="London_age" value="<?php echo $bilgilerimcek['London_age'] ?>">
	autobio <input type="text" name="London_autobio" required="" value="<?php echo $bilgilerimcek['London_autobio'] ?>">
		<input type="hidden" name="London_ID" value="<?php echo $bilgilerimcek['London_ID'] ?>"  >
	
	<button type="submit" name="updateislemi">Formu Düzenle!</button>

</form>
</body>
</html>