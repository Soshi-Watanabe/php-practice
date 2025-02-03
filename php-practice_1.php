<?php
// Q1 変数と文字列
<?php
$name ='渡邊';
echo '私の名前は「' .  $name . '」です。';
?>

// Q2 四則演算
<?php
$num = 5;
$num *= 4;
echo $num;

$num /= 2;
echo $num;
?>

// Q3 日付操作
<?php
$currentTimestamp = time();
echo '現在時刻は' . date("Y年m月d日 H時i分s秒",$currentTimestamp) . 'です。';
?>

// Q4 条件分岐-1 if文
<?php
$device ='mac';
if ($device == 'windows' || $device == 'mac') {
    if($device == 'windows'){
        echo '使用OSは' . $device . 'です。';
    } else {
        echo '使用OSは' . $device . 'です。';
    }
} else {
  echo 'どちらでもありません。';
}
?>


// Q5 条件分岐-2 三項演算子
<?php
$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です。';
echo $message;
?>

// Q6 配列
<?php
$kanto = ['東京','埼玉','神奈川','千葉','群馬','栃木','茨城'];
echo  ($kanto[2]) . 'と' . ($kanto[3]) . 'は関東地方の都道府県です。';
?>

// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>