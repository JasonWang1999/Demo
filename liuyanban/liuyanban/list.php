
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html lang="utf-8">
 <head>
    <?php
 include ("conn.php");
 ?>
  <link href="css.css" rel="stylesheet" type="text/css">
 </head>


 <table width=500 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef" >
     <?php
     $sql='select * from mes order by id desc';
     $result=mysqli_query($db,$sql);
     while($row=mysqli_fetch_array($result)){  ?>

         <tr bgcolor="#eff3ff">
             <td>标题： <?php echo $row['title'];?> <font color="red">用户： <?php echo $row['user'];?> </td>
         </tr>
         <tr bgColor="#ffffff">
             <td>发表内容:<?php echo $row['content'];?></td>
         </tr>
         <tr bgColor="#ffffff">
         <td><a href="del.php?id=<?php echo $row['id'];?>">删除</a></td>
             <td><div align="right">时间:<?php echo $row['lastdate'];?></td>
         </tr>
     <?php } ?>
     <tr bgcolor="#f0fff0">
         <td><div align="right"><a href="add.html">返回留言</a> </td>
     </tr>
 </table>
 </html>