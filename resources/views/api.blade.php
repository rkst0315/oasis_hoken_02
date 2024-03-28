@php
    
$data = array(
    'tel' => '0344313772',
    'kanji_sei'=> 'テスト1',
    'kanji_mei'=> '太郎2',
    'kana_sei' =>'ホケン',
    'kana_mei'=>'タロウ',
    'zip1'=>'150',
    'zip2'=>'0031',
    'address1'=>'東京都',
    'address2'=>'渋谷区',
    'address3'=>'桜丘町',
    'address4'=>'20-1 渋谷インフォスタワー6F',
    'email'=>'test@ins-cis.com',
    'birth_date'=>'19910101',
    'birthyotei_date'=>'20181213',
    'group'=>'福岡営業',
    'promotion_code'=>'kp672',
    'note'=>'【データ番号】1605-111111 【申込日時】2018/8/1 15:08:01 【連絡がつきやすい日】平日 【連絡がつきやすい時間帯】15時～17時 【ご自身について】どちらも 【ライフスタイル】その他 【貯蓄や保険で最も該当するもの】なかなか貯金できない 【貯蓄や保険で二番目に該当するもの】毎月かかるお金を抑えたい 【メモ】testtesttest'
);
$url = 'https://ptr.gwell.co.jp/hkpapi/getdata.htm';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
curl_setopt($ch, CURLOPT_TIMEOUT, 3);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
$response = curl_exec($ch);
curl_close($ch);
if (!$result = @json_decode($response)) {
    echo 'エラー';
    exit;
}

if ( $result->ret != 0 ) {
    if ( isset($result->doubleCheck) ) {
        echo '重複';
        exit;
    }
    echo 'エラー';
    exit;
}
exit;

    @endphp

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <button>テスト</button>
    

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script>


let data = {
    // promotion_code: 'kp672',
    "tel": "0300000000",
    "kanji_sei": "保険",
    "kanji_mei": "太郎",
    "kana_sei": "ホケン",
    "kana_mei": "タロウ",
    "zip1": "150",
    "zip2": "0031",
    "address1": "東京都",
    "address2": "渋谷区",
    "address3": "桜丘町",
    "address4": "20-1 渋谷インフォスタワー6F",
    "email": "test@ins-cis.com",
    "birth_date": "19900101",
    "birthyotei_date": "20181213",
    "group": "神奈川営業",
    "promotion_code": "kp672",
    "note": "【データ番号】1605-111111 【申込日時】2018/8/1 15:08:01 【連絡がつきやすい日】平日 【連絡がつきやすい時間帯】15時～17時 【ご自身について】どちらも 【ライフスタイル】その他 【貯蓄や保険で最も該当するもの】なかなか貯金できない 【貯蓄や保険で二番目に該当するもの】毎月かかるお金を抑えたい 【メモ】testtesttest",
}


$(function() {

    $('button').on('click', function() {
        $.ajax({
            url: "https://ptr.gwell.co.jp/hkpapi/getdata.htm",
            type: "post",
            dataType: 'jsonp',
            data: data,
        }).then(function(response) {
            console.log(response);
        });
    })

})


</script>
    
</body>
</html>