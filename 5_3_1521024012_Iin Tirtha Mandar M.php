<!DOCTYPE html>
<html>
<head>
    <title>Studi kasus 5_3 iin</title>
	<style>
		table, td {
			border: 2px solid black;
			border-collapse: collapse;
		}
		td {
			padding: 3px;
		}
		table#t 	{
			text-align:center;
		}

	</style>
</head>
<body>
	<table id="t">
    <?php
	
	$n =5;
	for($j=0;$j<=95;$j++){
		$i=5;
		$i=$i+$j;
		$bil[$j][0]=$i;
		for($a=0;$a<=998;$a++){
			if ($a<=0){
				$n=$i;
			}
			$n=$n+5;
			$bil[$j][$a+1]=$n;
		}
	}
	"</table>";
    ?>
</body>
</html>