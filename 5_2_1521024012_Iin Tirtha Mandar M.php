<!DOCTYPE html>
<html>
<head>
	<title>Studi kasus 5_2 iin</title>
	<style>
table {
    width:80%;
}
table, th, td {
    border: 3px solid gray;
    border-collapse: collapse;
}
th, td {
    padding: 10px;
    text-align: center;
}
table#t01 th	{
    text-align:center;
}

</style>

</head>
<body>
<table id="t01">
  <tr>

    <th>Kode Barang</th>		
    <th>Nama Barang</th>
    <th>Harga Satuan</th>
  </tr>
  
	<?php
    $barang = array(
        array (1001,"Sabun lifeboy",1500),
        array (1002,"Permen blaster",5600),
        array (1003,"Pasta gigi pepsodent",4560),
        array (1004,"Madu arbain",30000),
        array (1005,"Kecap ABC",7250),
        array (1006,"Saus Tomat ABC",6700),
        array (1007,"Gula gulaku",8900),
        array (1008,"Rinso",7100),
        array (1009,"Super pel",6450),
        array (1010,"Permen tanggo",5600),
        );

    echo "
    <tr>
    <td>".$barang[0][0]."</td>   
    <td>".$barang[0][1]."</td>
    <td>Rp. ".$barang[0][2]."</td>
  </tr>
  <tr>
    <td>".$barang[1][0]."</td>   
    <td>".$barang[1][1]."</td>
    <td>Rp. ".$barang[1][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[2][0]."</td>   
    <td>".$barang[2][1]."</td>
    <td>Rp. ".$barang[2][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[3][0]."</td>   
    <td>".$barang[3][1]."</td>
    <td>Rp. ".$barang[3][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[4][0]."</td>   
    <td>".$barang[4][1]."</td>
    <td>Rp. ".$barang[4][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[5][0]."</td>   
    <td>".$barang[5][1]."</td>
    <td>Rp. ".$barang[5][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[6][0]."</td>   
    <td>".$barang[6][1]."</td>
    <td>Rp. ".$barang[6][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[7][0]."</td>   
    <td>".$barang[7][1]."</td>
    <td>Rp. ".$barang[7][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[8][0]."</td>   
    <td>".$barang[8][1]."</td>
    <td>Rp. ".$barang[8][2]."</td>
  </tr>
  <tr>    
    <td>".$barang[9][0]."</td>   
    <td>".$barang[9][1]."</td>
    <td>Rp. ".$barang[9][2]."</td>
  </tr>
</table>";
    
		
	?>

</body>
</html>