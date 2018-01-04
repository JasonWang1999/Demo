<?php
include "conn.php";

$page=isset($_GET['p']) ? trim($_GET['p']) : 1;
$PageSize=5;
$ShowPage=3;

$sql = "select * from test limit  ".($page-1)* 5 .",5 ";

$result=mysqli_query($db,$sql);

 echo "<table border=1 cellspacing=0 width=15%>";
 echo "<tr><td>ID</td><td>名字</td><td>性别</td></tr>";
 
 while($row=mysqli_fetch_assoc($result)){
	 echo "<tr>";
	 echo "<td>{$row['id']}</td>";
	 echo "<td>{$row['name']}</td>";
	 echo "<td>{$row['sex']}</td>";
	 echo "</tr>";
	 }
	 mysqli_free_result($result);
	 $to_sql='select count(*) from test';
	 $to_result=mysqli_fetch_array(mysqli_query($db,$to_sql));
	 
	 $to=$to_result[0];
	 
	 $to_pages=ceil($to/$PageSize);
	 mysqli_close($db);
	 
	 $page_banner="";
	 
	 $pageffset=($ShowPage-1)/2;
	 
	 if($page>1){
 $page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
 $page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."'>上一页</a>";
}

$start=1;
$end=$to_pages;
if($to_pages>$ShowPage){
	if($page>$pageffset+1){
		$page_banner.="...";
		}
	if($page>$pageffset){
		$start=$page-$pageffset;
		$end=$to_pages>$page+$pageffset?$page+$pageffset:$to_pages;
		}else{
			$start=1;
			$end=$to_pages>$ShowPage?$ShowPage:$to_pages;
			}
		if($page+$pageffset>$to_pages){
			$start=$start-($page+$pageffset-$end);
			}
	}
	for($i=$start;$i<=$end;$i++){
		$page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($i)."'>{$i}</a>";
		}
		if($to_pages>$ShowPage&&$to_pages>$page+$pageffset){
			$page_banner.="...";}
	
if ($page<$to_pages){
 $page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."'>下一页</a>";
 $page_banner.="<a href='".$_SERVER['PHP_SELF']."?p=".($to_pages)."'>尾页</a>";
}
$page_banner.="共{$to_pages}页";

$page_banner.="<form action='DDD.php' method='get'>";
 $page_banner.="到第<input type='text'size='2'name='p'>页";
 $page_banner.="<input type='submit'value='确定'>";
 $page_banner.="</form>";
echo $page_banner;
?>