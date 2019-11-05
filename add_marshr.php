<?php include ("blocks/bd.php");
if (isset($_POST['p_p'])) {$p_p=$_POST['p_p']; if ($p_p=='') {unset($p_p);}}
if (isset($_POST['p_r'])) {$p_r=$_POST['p_r']; if ($p_r=='') {unset($p_r);}}
if (isset($_POST['resp'])) {$resp=$_POST['resp']; if ($resp=='') {unset($resp);}}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Добавление</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
   <!--Подключаем шапку сайта-->
    <?php include ("blocks/header.php");?>
    <tr>
    <td><table width="1100" border="0" cellspacing="0" cellpadding="0">
    <tr>
   <!--Подключаем меню-->
    <?php include("blocks/left_td.php");?>
     <td valign="top">
     <?php 
	 if (isset($p_p) && isset($p_r) && isset($resp)) 
	 {$r=mysql_query ("INSERT INTO marshr (p_p,p_r,resp) VALUES ('$p_p','$p_r','$resp')");
	 if ($r=='true') {echo "<p>Информация успешно добавлена</p>";}
	 else {echo "<p>Информация не добавлена</p>";}
	 }
	 else 
	 {echo "<p> Вы ввели не всю информацию</p>";
	 }
	 ?>
     </td>
     <?php include("blocks/right_td.php");?>
      </tr>
     </table></td>
  </tr>
  <!--Подключаем нижнюю картинку-->
  <?php include("blocks/niz.php");?>
</table>
</body>
</html>
