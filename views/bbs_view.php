
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<head>
			<title>ひとこと掲示板</title>
		</head>
		<body>
			<h1>ひとこと掲示板</h1	>
			<form action="193_01.php" method="POST">
			名前：<input type="text" name="name" size="60" /><br />
				ひとこと： <input type="text" name="comment" size="60" /><br />
				<input type="submit" name="submit" value="送信" />
			</form>
<?php if (count($posts) > 0): ?>
<ul>
	<?php foreach ($posts as $POST): ?>
	<li>
		<?php echo htmlspecialchars($POST['name'], ENT_QUOTES, 'UTF-8'); ?>:
		<?php echo htmlspecialchars($POST['comment'], ENT_QUOTES, 'UTF-8'); ?>:
		- <?php echo htmlspecialchars($POST['created_at'], ENT_QUOTES, 'UTF-8'); ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>
			
			
			
		</body>
		</html>
				
			