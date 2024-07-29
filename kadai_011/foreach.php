<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>foreach文を使っての課題</title>
</head>
<body>

<p>
<?php
// 連想配列
$variable_names = ['name' => '玉ねぎ', 'price' => 200, 'gender' => '男性', 'address' => '北海道'];
//  連想配列＄variable_nameのキーと値をコロン（：）で区切り、要素ごとに改行して出力する
        
foreach ($variable_name as $key => $value) {
  echo "{$key}:{$value}<br>";
}
?>
</p>

</body>
</html>