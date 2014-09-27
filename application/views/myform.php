<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>お問い合わせフォーム</title>

<style>
.error{
	color:red;
}
</style>
</head>
<body>
	<?php echo form_open('form')?>
		<p>
		名前：<input type="text" name="name" value="<?php echo set_value('name');?>" size="40">
		<?php echo form_error('name'); ?>
		</p>
		<p>
		性別：<input type="radio" name="sex" value="male" <?php echo set_checkbox('sex', 'male'); ?>>男
		<input type="radio" name="sex" value="female" <?php echo set_checkbox('sex', 'female'); ?>>女
		<?php echo form_error('sex'); ?>
		</p>
		<p>
		血液型：<select name="blood">
		<option value="A" <?php echo set_select('blood', 'A', TRUE); ?>>A型</option>
		<option value="B" <?php echo set_select('blood', 'B', TRUE); ?>>B型</option>
		<option value="O" <?php echo set_select('blood', 'O', TRUE); ?>>O型</option>
		<option value="AB" <?php echo set_select('blood', 'AB', TRUE); ?>>AB型</option>
		</select>
		<?php echo form_error('blood'); ?>
		</p>
		<p>
		ご感想：<br>
		<textarea name="kanso" value="<?php echo set_value('kanso');?>" rows="4" cols="40"></textarea>
		<?php echo form_error('kanso'); ?>
		</p>
		<p>
		<input type="submit" value="送信"><input type="reset" value="リセット">
		</p>
	</form>
</body>
</html>