<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        
        header{
            background: transparent
                ;
        }
       .logo a{
            text-decoration: none;
            text-align: center;
            display: inline-block;
            float: left;
    
         font-weight: 30px;
           padding: 10px;
        }
        ul{
            display: inline-block;
        }
        ul li, ul li a{
            list-style: none; 
            display: inline-block;
            float: left;
            margin-left: 70px;
            padding: 10px;
            text-decoration: none;
            text-align: center;
            
        }
    </style>
</head>

<body>
<header>
    <div class="header">
      <a href="#" class="logo">Logo</a>
        <ul>
            <li><a href="#">Anasayfa</a></li>
            <li><a href="#">İletişim</a></li>
            <li><a href="#">Hakkında</a></li>
        </ul>
    </div>
</header>

<?php  
    echo "<br>";
    
    echo "do not again";

    	echo $say=='800' ? 'doğru' : 'yanlış';
    ?>
<?php
    
echo "<br>";
$deger="Elma";
    
 

	?>
	


	<select>
		
		
		<option <?php echo $deger=='Armut' ? 'selected' : '' ?>>Armut</option>
		<option <?php echo $deger=='Elma' ? 'selected' : '' ?>>Elma</option>	

	</select>



	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>




</body>

</html>
