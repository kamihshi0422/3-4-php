<?php
function searchCityTime($city_name)
{
// cities.phpを読み込む
require('config/cities.php');

foreach ($cities as $city) {
    // 国名が完全一致したとき
    //　[キー、または添字]　連想配列
    if ($city["name"] === $city_name) {
        //DateTime で現在時刻を指定した時に同時に DateTimeZoneでタイムゾーンの指定
        //引数に、 $city["time_zone"]変数を渡すことで、指定された国の現在時刻を取得
        $date_time = new DateTime('', new DateTimeZone($city["time_zone"]));

        // formatメソッドで表示されるフォーマットの変更
        $time = $date_time->format('H:i');//H 時 24時間単位:i 分　のみに変更
        $city['time'] = $time;

        //returnで戻り値をresult.php のファイル変数tokyoに格納
        return $city;
        }
    }
}


// 配列の追加
    // $test = array('taro');
    // $test[] = 'jiro';
// 連想配列の場合
    // $test = array(
    //   'name' => 'taro'
    // );
    // $test['age'] = 20;


    //サンプルコード
// $arr = array("鈴木","高橋","山田");  //#配列を定義
// foreach($arr as $data){     //#for eachで取り出す配列と要素の値を格納する変数を指定する。
    //print($data); //     #変数値を表示する（$dataは、$arr[x]からコピーしてきたデータが入っている)
    //print("&lt;br>");　 //     #html改行コードを表示をする