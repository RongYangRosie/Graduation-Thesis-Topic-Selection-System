<?php
	header('Content-Type:text/xml');
	$pattern='1234567890ABCDEFGHIJKLOMNOPQRSTUVWXYZ';
	$key='';
for($i=0;$i<4;$i++)
	{
	$key .= $pattern{mt_rand(0,35)};    //����php�����
	}
echo "<yan>".$key."</yan>";
?>
