<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������� ��������������</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="1100" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
   <!--���������� ����� �����-->
    <?php include ("blocks/header.php");?>
    <tr>
    <td><table width="1100" border="0" cellspacing="0" cellpadding="0">
    <tr>
   <!--���������� ����-->
    <?php include("blocks/left_td.php");?>
     <td valign="top">
 <?php
   /*email �������������� */
   $adminaddress = "ladyonline@mail.ru";
   $subj = "������ �� ����������"; 
   $text = "���: ".$_POST['name']." 
   ���������� �������: ".$_POST['tel']." 
   ����� ���������:"; 
   mail($adminaddress, $subj, $text);
   echo "<p>��������� ����������</p>";
?>
  </td>
     <?php include("blocks/right_td.php");?>
      </tr>
     </table></td>
  </tr>
  <!--���������� ������ ��������-->
  <?php include("blocks/niz.php");?>
</table>
</body>
</html>     
