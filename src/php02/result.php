<!-- php -->
<?php
///search_city_time.phpを読み込みsearchCityTime関数を呼び出す
// _once...一度だけ読み込む二回目以降はスキップしエラー回避
require_once('functions/search_city_time.php');
// 東京の時間
$tokyo = searchCityTime("東京");
//その他国の時間帯
$city = htmlspecialchars($_GET["city2"],ENT_QUOTES);
$comparison = searchCityTime($city);
?>
<!-- cities.php(国名、時間、国旗) →　search_city_time.php(時刻) →　result.php(表示) -->

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