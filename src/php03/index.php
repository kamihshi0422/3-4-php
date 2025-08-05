<!-- 問題ページ -->
<!-- PHP Version 8.1.33 -->

<?php
require_once("config/status_codes.php");

//　array_rand関数でランダムに4配列分のキーを呼び出す
$random_numbers = array_rand($status_codes, 4);

//　キーを$status_codes[]に代入し、選択肢の4配列を$optionsに代入
foreach ($random_numbers as $index) {
    $options[] = $status_codes[$index];
}

// mt_rand関数で0~3の乱数を生成（array_randでも可能）し,それを$optionsに指定
// その正解（問題）を$questionに代入
$question = $options[mt_rand(0,3)];


//  デバックコード
// echo ("<pre>");
// var_dump($question);
// echo ("<pre>");
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
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03">
        Status Code Quiz
            </a>
    </div>
    </header>

    <main>
        <div class="quiz__content">
            <div class="question">
                <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
                <p class="question__text">
                    <?php echo $question["description"]?>
                    <!--  問題のステータスコードの説明文を表示。 正解の配列の中からキーが description のものを表示。-->
                </p>
            </div>
        </div>
    </main>

    <!-- データの送信は、form タグを利用。 送信先が result.phpファイルとなるよう form タグの action 属性を指定。
    また、配列を利用した長いデータとなるため method 属性を post -->
    <form  class="quiz-form" action="result.php" method="post">

        <!-- ヒドゥン...ユーザーには表示されないtype属性-->
         <!-- 最後に、解答となるデータを送信 -->
        <input type="hidden" name="answer_code" value="<?php echo $question["code"] ?>">

        <div class="quiz-form__item">
            
            <!--  選択肢となる説明文を表示-->
            <!-- 表示させる説明文は、全部で4つ。ランダムに取得した4つの配列を foreach 文で回し($optionに要素を取り出して)、1つ1つの説明文を表示 -->
            <?php foreach ($options as $option) : ?>

            <div class="quiz-form__group">

            <!-- <input>タグのid属性と, labelタグのfor属性に 同じものを指定することで、inputタグと紐づけることができ、label 要素をクリックすることでinputにチェックをつけることができる。 -->
                <input class="quiz-form__radio" id="<?php echo $option["code"] ?>" type="radio" name="option" value="<?php echo $option["code"] ?>">

                <label class="quiz-form__label" for="<?php echo $option["code"] ?>">
                <?php echo $option["code"] ?>
                </label>
            </div>

            <?php endforeach; ?>
            <!--  上記をforeach文で４回繰り返して　表示-->
              <!--  デベロッパーツールを見るとわかりやすい-->
        </div>

        <div class="quiz-form__button">
            <button class="quiz-form__button-submit" type="submit" required>
                回答
            </button>
        </div>
    </form>
</body>
</html>