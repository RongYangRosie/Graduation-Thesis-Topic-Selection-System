<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./file/bootstrap.min.css"> 
<script src="./file/jquery.js"></script>
<script src="./file/bootstrap.min.js"></script>
<style>
.t1{
        width:750px;
        margin-left:50px;
}
</style>

</head>
<body>
<div class="panel panel-default" style="margin-top:100px">
<div class="panel-body">
<table class="table table-bordered table-hover table-striped t1"> 
<thead>
<?php
include "conn.php";
session_start();
$tid=$_SESSION['user'];
$sql="select * from thesis where tid='$tid'";
$res=mysql_query($sql);
print "<tr calss='info'>";
print "<th>";
print "�����";
print "</th>";
print "<th>";
print "������";
print "</th>";
print "<th>";
print "����";
print "</th>";
print "<th>";
print "����ʱ��";
print "</th>";
print "<th>";
print "˵��";
print "</th>";
print "<th>";
print "רҵ";
print "</th>";
print "</tr></thead>";
print "<tbody>";
while($row=mysql_fetch_array($res))
{
        print"<tr>";
        print "<td>{$row["thid"]}</td>";
        print "<td>{$row["thname"]}</td>";
        print "<td>{$row["type"]}</td>";
        print "<td>{$row["datee"]}</td>";
        print "<td>{$row["task"]}</td>";
        print "<td>{$row["major"]}</td>";
        print "</tr>";

}
?>
</tbody>
</table>
</div>
</div>
<input type="button" value="����" onclick="window.history.back(-1)"; style="margin-left:50px;">
<?php
mysql_close();
?>
</body>
</html>
