<?php if (count($posts) > 0): ?>
<ul>
	<?php foreach ($posts as $post): ?>
	<li>
		<?php echo htmlspecialchars($POST['name'],ENT_QUOTES, 'UTF-8'); ?>:
		<?php echo htmlspecialchars($POST['comment'],ENT_QUOTES, 'UTF-8'); ?>:
		- <?php echo htmlspecialchars($POST['created_at'],ENT_QUOTES, 'UTF-8'); ?>
	</li>
	<?php endforeach; ?>
</ul>
<?php endif; ?>