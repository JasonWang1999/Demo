<?php
include 'conn.php';

$user=$_POST['user'];
$title=$_POST['title'];
$content=$_POST['content'];
if($_POST['submit']){
$sql="insert into mes(id,user,title,content,lastdate)values('','$user','$title','content',now())";
mysqli_query($db,$sql);
echo "<script>alert('提交成功！返回首页。')</script>";
}
header('location:list.php');
