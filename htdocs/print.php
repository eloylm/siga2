<html>
    <head>
        <title></title>
        <style>
            *{margin:0; paddign:0}
            body{font-family:Verdana;font-size:14px;font-weight:bolder}
        </style>
    </head>
    <body>
        <div align=""><?php 
		for($i=40;$i <=60;$i++){
		echo "<br>";
		echo "insert into analisis (nombre,tiempo_demora) values ('Densidad a ".$i."°c (iso 6883)',3);";
		echo "<br>";
		echo "insert into analisis (nombre,tiempo_demora) values ('Densidad a ".$i."°c (iram 5504)',3);";
		}
		?></div>
    </body>
</html>


