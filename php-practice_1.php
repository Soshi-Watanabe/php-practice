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

<?php
$device ='mac';
if ($device == 'windows' || $device == 'mac') {
        echo '使用OSは' . $device . 'です。';
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
<?php
$mati = [
        '東京都' => '新宿区',
        '神奈川県' => '横浜市',
        '千葉県' => '千葉市',
        '埼玉県' => 'さいたま市',
        '栃木県' => '宇都宮市',
        '群馬県' => '前橋市',
        '茨城県' => '水戸市'
        ];
foreach ((array) $mati as $kenntyou ) {
    echo $kenntyou."\r\n";
}
?>

// Q8 連想配列-2
<?php
$mati = [
          '東京都' => '新宿区',
          '神奈川県' => '横浜市',
          '千葉県' => '千葉市',
          '埼玉県' => 'さいたま市',
          '栃木県' => '宇都宮市',
          '群馬県' => '前橋市',
          '茨城県' => '水戸市'
        ];
foreach ($mati as $kenntyou => $value) {
    if ($kenntyou == '埼玉県') 
      echo $kenntyou . 'の県庁所在地は' . $value . 'です。';
}
?>

// Q9 連想配列-3
<?php
$mati = [
          '東京都' => '新宿区',
          '神奈川県' => '横浜市',
          '千葉県' => '千葉市',
          '埼玉県' => 'さいたま市',
          '栃木県' => '宇都宮市',
          '群馬県' => '前橋市',
          '茨城県' => '水戸市',
          '北海道' => '札幌市',
          '沖縄県' => '那覇市'
        ];
foreach ((array) $mati as $kenntyou => $value) {
  if (
          $kenntyou == '東京都' ||
          $kenntyou == '神奈川県' ||
          $kenntyou == '千葉県' |
          $kenntyou == '埼玉県' ||
          $kenntyou == '栃木県' ||
          $kenntyou == '群馬県' ||
          $kenntyou == '茨城県'
          ) {
    echo $kenntyou . 'の県庁所在地は' . $value . 'です。'."\r\n";
  } else {
      echo $kenntyou . 'は関東地方ではありません。'."\r\n";
  }
}
?>

// Q10 関数-1
<?php
function hello($name)
{
    return $name;
}
$name = hello('yamada');
echo $name . 'さん、こんにちは。';
$name = hello('tanaka');
echo $name . 'さん、こんにちは。';
?>


// Q11 関数-2
<?php
function calcTaxInPrice($price)
{
  return $price;
}
$price = calcTaxInPrice(1000);
echo $price . '円の商品の税込み価格は' . $price*1.1 . '円です。';
?>



// Q12 関数とif文
<?php
function distinguishNum($number)
{
  if ($number % 2 == 0) {
    return $number . 'は偶数です';
  } else {
    return $number . 'は奇数です';
  }
}
$number = distinguishNum(11);
echo $number;
$number = distinguishNum(44);
echo $number;
?>

// Q13 関数とswitch文

<?php
function evaluateGrade($rank)
{
  switch($rank) {
    case 'A':
      return '合格です。'."\r\n";
      break;

    case 'B' :
      return '合格です'."\r\n";
      break;

    case 'C' :
      return '合格ですが追加課題があります。'."\r\n";
      break;

    case 'D' :
      return '不合格です。'."\r\n";
      break;

    default :
      return '判定不明です。講師に問い合わせてください。'."\r\n";
      break;
  }
}
$rank = evaluateGrade('A');
echo $rank;
$rank = evaluateGrade('X');
echo $rank
?>


