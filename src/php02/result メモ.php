<!-- php -->
<?php
// 読み込み
require_once('functions/search_city_time.php');

// 関数の呼び出し(echo不要で呼び出せる)

$tokyo = searchCityTime("東京");
//searchCityTime.phpの　function searchCityTime($city_name)　が東京　の結果を  $tokyoとして呼び出し

$city = htmlspecialchars($_GET["city2"],ENT_QUOTES);
//index.phpのform method="GET"なので呼び出せる
//かつ、name="city2"のみ指定して　$cityとして呼び出し

$comparison = searchCityTime($city);
//searchCityTime.phpの　function searchCityTime($city_name)がindex.phpのセレクトボックスで選択した国　の結果を  $comparisonとして呼び出し
?>

<!-- html -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>

    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
    </head>

    <body>
    <header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/php02/index.php">
        World Clock
        </a>
    </div>
    </header>

    <main>
        <div class="result__content">
            <div class="result-cards">

                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $tokyo["img"]?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo["name"]?></p>
                        <p class="result-card__time"><?php echo $tokyo["time"]?></p>
                    </div>
                </div>

                <div class="result-card">
                    <div class="result-card__img-wrapper">
                        <img class="result-card__img" src="img/<?php echo $comparison["img"]?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $comparison["name"]?></p>
                        <p class="result-card__time"><?php echo $comparison["time"]?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </body>

</html>