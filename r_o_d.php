<?php include ("blocks/bd.php");
if (isset($_POST['p_p'])) {$p_p=$_POST['p_p']; if ($p_p=='') {unset($p_p);}}
if (isset($_POST['p_r'])) {$p_r=$_POST['p_r']; if ($p_r=='') {unset($p_r);}}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>���������</title>
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
	 $p_p=trim($_POST['p_p']);
	  $p_r=trim($_POST['p_r']);
	  
	   
	   $r=mysql_query("SELECT * FROM users_avt");
	   $m=mysql_fetch_array($r);
	  	  
      $query = "SELECT * FROM tarif1,marshr WHERE marshr.p_p = '$p_p' and marshr.p_r = '$p_r' and marshr.resp=tarif1.resp "; 
    	/* ��������� ������. ���� ���������� ������ - ������� ��. */ 
     $res = mysql_query($query) or die(mysql_error());
	 $number = mysql_num_rows($res); 
	 /*?>$k=$row['doc']*$_POST['kol'];<?php */
	 if ($number == 0) {echo "<CENTER><P>������� ���</CENTER>";} 
	 else
	 {while ($row=mysql_fetch_array($res)) { 
    echo "<CENTER><p>����� ��������: <b>".$row['p_p']."</b><br>"; 
    echo "����� ����������: <b>".$row['p_r']."</b></p>";
	echo '<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border"> 
	      <tr> 
	      <td class="t">��������������� ��������� �������� ����������:</td>
          </tr>
          <tr>';
    echo '<td class="t"><b>'.$row['doc']*$_POST['kol'].'</b></td>';
	echo '</tr>
	</table>'; }
	echo "</CENTER>"; 
	echo '
	<form name="form1" method="post" action="email_d.php">
	<center><p><strong>���� ������ �������� �������� ��������� �����:</strong></p></center>
	<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
	       <tr>
		   <td>
		   <p><label>���������� �� �����������: <br></p>
		   </td>
		   <td>
		   <p><label>���������� � ����������: <br></p>
		   </td>
		   </tr>
		   <tr>
		   <td>
		   <p><label>���������� ����: <br>
           <input type="text" name="o_k_l">
           </label>
           </p>
		   <p><label>������������ ��������:<br> <strong>'.$m['company_c'].'</strong><br>
		   </label>
           </p>
		   <p><label>���������� �������: <br>
           <input type="text" name="o_tel">
           </label>
           </p>
		   <p><label>�����:<br><strong>'.$m['adres_c'].'</strong><br>
		   </label>
           </p>
		   </td>
		  
		   <td>
		   <p><label>���������� ����: <br>
           <input type="text" name="p_k_l">
           </label>
           </p>
		   <p><label>������������ ��������:<br>
		   <input type="text" name="p_n_k">
           </label>
           </p>
		   <p><label>���������� �������: <br>
           <input type="text" name="p_tel">
           </label>
           </p>
		   <p><label>�����: <br>
		   <input type="text" name="p_adres">
           </label>
           </p>
		   <p>
		   <label>
           <input type="submit" name="d" id="d" value="�������� ��������" class="b1">
           </label>
         </p>
		 </td>
		 </tr>
		 </table>
       </form>
	   ';
	 
	      }
	  
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
