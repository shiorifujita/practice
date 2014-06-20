<?php 
//投稿された内容を取得するSQLを作成して結果を取得

$sql = "SELECT * FROM `post` ORDER BY `created_at` DESC";
$result = mysql_query($sql,$link);

//取得した結果を$postsに格納
$posts = array();
if($result !== false && mysql_num_rows($result)) {
	while ($POST = mysql_fetch_assoc($result)) {
		$posts[] = $post;
	}
}
 
// 取得結果を解放して接続を閉じる
mysql_free_result($result);
mysql_close($link);

include 'views/bbs_view.php';

?>
<!DOCTYPE html PUBLIC "-//W3c//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1-transitional.dtd">
	
<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<head>
			<title>ひとこと掲示板</title>
		</head>
		<body>
			<h1>ひとこと掲示板</h1>
			
			<form action="193_01.php" method="POST">		
				名前：<input type="text" name="name" size="60" /><br />
				ひとこと： <input type="text" name="comment" size="60" /><br />
				<input type="submit" name="submit" value="送信" />
			</form>
		
		</body>
</html>
			

