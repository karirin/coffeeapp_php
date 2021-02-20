<?php
require_once('../config.php');
require_once('../head.php');
require_once('../header.php');
if(!empty($_POST)){
  require_once('user_login_check.php');
}
?>
<body>
  <div class="row">
<div class="col-6 offset-3 center">
<h2>ログイン</h2>
<form method="post"action="#">
<input type="text" name="name" class="user_name_input" placeholder="ユーザーID">
<input type="password" name="pass" class="user_pass_input" placeholder="パスワード">
<div class="login_btn margin_top">
<input class="btn btn-outline-dark" type="submit" value="ログイン">
<input class="btn btn-outline-info" type="button" onclick="history.back()" value="戻る">
</div>
</form>
</div>
</div>
</body>
<?php require_once('../footer.php'); ?>
</html>