<?php
require_once('database_connection.php');

$post = $_POST;
$get  = $_GET;

// エラーメッセージの初期化
$errorMessage = "";

// ログインボタンが押された場合
if (isset($post["login"])) {
  // １．ユーザIDの入力チェック
  if (empty($post["login_id"])) {
    $errorMessage .= "<br>ユーザIDが未入力です。";
  }
  if (empty($post["password"])) {
    $errorMessage .= "<br>パスワードが未入力です。";
  }
  if (!empty($errorMessage)) {
  	$con_db_class = new Connection_database();
	$mysqli = $con_db_class->getConnection();
	
	
  }
}


?>
<?php
//ヘッダーhtml の読み込み
require_once('common/header.php');
?>

<div id="main">
	<div class="container">
		<h1>ログイン</h1>
		<?php echo $errorMessage; ?><br />
		<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
			ログインID：<input type="text" name="login_id"/><br />
			<br>
			パスワード：<input type="text" name="password"/><br />
			<br>
			<input type="submit" value="Submit" name="login"/>
		</form>
	</div>
</div>
<?php
//フッターhtml の読み込み
require_once('common/footer.php');