<?php // <?php が先頭にないと（htmlのメモや空白があると）header関数がエラーになる

// 下記19foreach文で使用のため読み込み
require_once("config/status_codes.php");
// status_codes.phpも<?php が先頭にないと（htmlのメモや空白があると）使えない

// エスケープ処理...いたずら対策
// index.phpファイルで post としてデータの送信がされているため、$_POSTで取得。
// index 63記述 name answer_code　答え
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);

//  index  69記述 name option　選択
//  三項演算子...条件式？真の式:偽の式
//  isset(ｲｽﾞｾｯﾄ)関数で’option’が送信されているならTRUE
$option = isset($_POST['option']) ? htmlspecialchars($_POST['option'], ENT_QUOTES) : null;
// 教材のコードだとエラーになるため上記
// $option = htmlspecialchars($_POST['option'], ENT_QUOTES);

// header関数で、「Location」を使ってURLを指定することで、指定のURL先に遷移。
// 今回 option 変数が存在しなかった時(index.phpファイルで解答の選択肢を選ばなかった時に) index.php にリダイレクトする
if (!$option) {
  header('Location: index.php');
}

/**$status_codeの"code"　と　$answer_code　が完全一致の時、
*$codeに正解のステータスコード $descriptionに正解の説明を代入する処理を実施*/
foreach ($status_codes as $status_code) {
  if ($status_code["code"] === $answer_code) {
    // 正解のコード
    $code = $status_code["code"];
    // 正解の説明
    $description = $status_code["description"];
  }
}

//  選択$option と　答え$code が完全に一致する（正解だった）とき正解$resultを呼び出す
$result = $option === $code;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">

  <link rel="stylesheet" href="css/result.css">
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        Status Code Quiz
      </a>
    </div>
  </header>

    <main>
        <div class="result__content">
            <?php if ($result): ?>
            <h2 class="result__text--correct">正解</h2>
            <?php else: ?>
            <h2 class="result__text--incorrect">不正解</h2>
            <?php endif; ?>
        </div>

        <div class="answer-table">
            <table class="answer-table__inner">
                <tr class="answer-table__row">
                    <th class="answer-table__header">ステータスコード</th>
                    <td class="answer-table__text">
                      <?php echo $code ?>
                    </td>

                </tr>
                <tr class="answer-table__row">
                    <th class="answer-table__header">説明</th>
                    <td class="answer-table__text">
                      <?php echo $description ?>
                    </td>

                </tr>
            </table>
        </div>
    </main>

</body>


</html>
