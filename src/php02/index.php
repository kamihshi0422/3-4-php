<!-- http://localhost/php02/index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php02</title>

    <!-- reset css -->
    <link rel="stylesheet" href="css/sanitize.css">
    <!-- ヘッダーのcss -->
    <link rel="stylesheet" href="css/common.css">
    <!-- meinのCSS -->
    <link rel="stylesheet" href="css/index.css">

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
        <div class="search-form__content">
            <!-- ここにラジオボタン作成 -->
            <div class="search-form__heading">
                <h2 class="search-form__content-title">日本と世界の時間を比較</h2>
            </div>
        </div>
        <form class="search-form" action="result.php" method="get">
            <div class="search-form__item">
                <select class="search-form__item-select" name="city2" id="">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                    <!-- option...セレクトボックスの選択シ -->
                </select>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </form>
    </main>
</body>
</html>