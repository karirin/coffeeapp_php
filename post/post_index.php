<?php 
require_once('../config.php'); 
require_once('../header.php'); 
?>

<?php require_once('../head.php'); ?>
<body>

<?php

try
{

$dsn='mysql:dbname=shop;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT id,text,gazou FROM post WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '<br />投稿一覧<br/><br/>';

while(true)
{
	$rec=$stmt->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
		break;
	}
	print '<a href="../post/post_disp.php?post_id='.$rec['id'].'&page_id='.$_SESSION['user_id'].'">
	'.$rec['text'].'
	<img src="/post/gazou/'.$rec['gazou'].'">
	</a><br />';
	print '<br />';


}

print '</form>';

}
catch (Exception $e)
{
	 print 'ただいま障害により大変ご迷惑をお掛けしております。';
	 exit();
}

?>

<br />

<?php
if(basename($_SERVER['PHP_SELF']) === 'user_top.php'){

}else{
print'<a href="../user_login/user_top.php?user_id='.$_SESSION['user_id'].'&type=main">トップメニューへ</a><br />';
}
?>

</body>
<?php require_once('../footer.php'); ?>
</html>