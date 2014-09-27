<html>
<head>
<title>マイフォーム</title>
</head>
<body>

	<?php echo form_open('send')?>
		<p>
		名前：<?php echo ($_POST['name']); ?>
		</p>
		<p>
		性別：<?php echo ($_POST['sex']);?>
		</p>
		<p>
		血液型：<?php echo ($_POST['blood']);?>
		</p>
		<p>
		ご感想：<?php echo ($_POST['kanso']);?>
		<p>
		<input type="submit" value="送信">
		</p>
	<p><?php echo anchor('form', '戻る!'); ?></p>

</form>
</body>
</html>
