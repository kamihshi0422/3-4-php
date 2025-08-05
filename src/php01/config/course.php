<?php

//$company = htmlspecialchars($_POST['company'], ENT_QUOTES);

$company = htmlspecialchars($_GET["company"],ENT_QUOTES);

print "会社名は" . $company . "ですね";
?>
<!-- htmlspecialchars(HTMLの特殊文字)...フォームを利用したセキリュティの攻撃を防ぐためにエスケープ処理をするための関数-->