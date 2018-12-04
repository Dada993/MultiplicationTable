<head>
       
<style type="text/css">     
table{               
border-collapse: collapse;          
}
        
tr {
	font-family: Arial, Helvetica, Sans-serif;
	font-size: 30px;
	background: #F0F0F0;
	color: Black;
	padding: 2px 4px;
	border-collapse: Separate;
	border: 3px Solid Black;
	text-align: Center;
	}

td {
	border: 3px Solid LightSalmon;
	width: 25px;
	height: 30px;
	text-align: Center;
	}

input{
    padding: 10px 10px; 
	font-size: 15px;
    border: None;
	background: White;
    width: 7ex;
    height: 6.5ex;
    outline: None;
	text-align: Center; 
	}

.box {
    width: 100px;
    height: 100px;
    background-color: LightSalmon;
    position: Absolute;
    margin-left: -300px;
    margin-top: -300px;
    top: 50%;
    left: 50%;
	}
	
	form{
    width: 55px;
    height: 20px;
	}
	
body{
	background-image: url("image.png");
	background-size: 100% 100%;
	}
</style>
  
</head>

<body>

<?php

//pozivanje konekcije unutar index.php
include "config.php";

//pozivanje klase unutar index.php
require "calculator.class.php";

//kreirnje linije bordera
echo "<table class='box' border =\"1\">";

//redovi
for ($red = 0; $red <= 10; $red++) {
  
	echo "<tr> \n";
	
	//kolone
	for ($kol = 0; $kol <= 10; $kol++) {
		
		/* ako je red = 0 i kolona = 0 ispisuje prazan prostor,
		tj.u ovom slučaju "	" */
 		if($red == 0 && $kol == 0)
			echo '<td>	</td>';
		
		//ako je kolona različita od 0, ispisuje je
		else if($red == 0 && $kol != 0)
            echo "<td>$kol</td>";
		
		////ako je red različiti od 0, ispisuje ga
 		else if ($red != 0 && $kol == 0)
			echo "<td>$red</td>";
		
		else {
			
			//dodjeljivnje novog objekta i instanciranje nove klase
			$p = new calculator($red,$kol);
			
			/* prikaz redova i kolona kao dugme
			red, kolona i rezultat(p) su sakriveni*/
			echo '<td><form method = "POST" action = ""><input type="submit" name="prikaz" value='.$red.'x'.$kol.'>
			<input type="hidden" name="red" value="'.$red.'"/>
			<input type="hidden" name="kol" value="'.$kol.'"/>
			<input type="hidden" name="p" value="'.$p->multy().'"/>
			</form>
			</td>';
			echo "\n";
			}
			
		}
		
		echo "</tr>";
		
	}
	
	//zatvaranje tabele
	echo "</table>"; 

?>

</body>
 
 
 

