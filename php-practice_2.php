<?php
// Q1 tic-tac問題

<?php
foreach (range(1,100)as $i) {
  switch ($i) {
    case $i % 20 == 0:
      echo 'tic-tac'."\r\n";
      break;
    
    case $i % 5 == 0:
      echo 'tac'."\r\n";
      break;

    case $i % 4 == 0:
      echo 'tic'."\r\n";
      break;

    default:
      echo $i."\r\n";
      break;
  }
}
?>

// Q2 多次元連想配列
問題1-  「Bさんの電話番号は08033334444です。」を出力
<?php
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
?>

問題2 foreachを用いて下記のように表示してください。(数字が1から始まっていることに注意しましょう)
1番目のAさんのメールアドレスはaaa@mail.comで、電話番号は09011112222です。
2番目のBさんのメールアドレスはbbb@mail.comで、電話番号は08033334444です。
3番目のCさんのメールアドレスはccc@mail.comで、電話番号は09055556666です。

<?php
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
foreach($personalInfos as $key => $people) {
    echo  $key+1 . '番目の' . ($people['name']) . 'のメールアドレスは' . ($people['mail']) . 'で、電話番号は' . ($people['tel']) . 'です。'."\r\n";
  }
?>

問題3 $ageList = [25, 30, 18];
上記の$ageListを使用して、$personalinfosに age というKeyに対して$ageListのそれぞれの年齢をValueとして追加してください。
その際は、foreachを使用してください。
追加ができたらvar_dumpを使用して配列の中身を確認してください。下記のようになっていたらOKです。


<?php
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ], 
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
$ageList = [25, 30, 18];
foreach($personalInfos as $key => $Value) {
    $Value['age'] = $ageList[$key];
    $personalInfos[$key] = $Value;
}
var_dump($personalInfos);
?>

// Q3 オブジェクト-1
studentIdプロパティは正の整数を設定してください。
nameプロパティは任意の値を設定してください。
以下を出力
「学籍番号120番の生徒は山田です。」

<?php

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$yamada = new Student(120,'山田');
echo '学籍番号' . $yamada->studentId. '番の生徒は' . $yamada->studentName . 'です。';
?>

// Q4 オブジェクト-2
引き続きQ4のクラスを使用します。
attendメソッドの処理を書き換えて、条件に沿った内容を表示してください。
※attendメソッド以外は書き換えないでください。
出力結果
「山田はPHPの授業に参加しました。学籍番号：120」

<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($hikisuu) //引数を受け取る
    {
        echo $this->studentName . 'は' . $hikisuu . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP'); //引数を渡す
?>

// Q5 定義済みクラス
関数と同様PHP側ですでに用意されているクラスがあります。
今回はDateTimeという定義済みのクラスを使用して、
以下の問題通りの処理を書きましょう。

問題1
1ヶ月前の日付を表すDateTimeインスタンスを作成し、
出力結果と同じフォーマットで出力しましょう。
出力結果(2021年3月2日の場合)
2021-02-02

<?php
$date = new DateTime("2025-02-17");
echo $date->modify("-1 months")->format("Y-m-d");
?>

問題2
今日の日付と1992年4月25日との日付の差を計算して、総日数を出力しましょう。
出力結果例(2021年3月2日の場合)
あの日から10538日経過しました。

<?php
$today = new DateTime(); //()引数を入れない場合は本日になる
$ago = new DateTime("1992-4-25");
$diff = $today->diff($ago);
echo "あの日から" . $diff->days . "日経過しました。";
?>


//参考　よく使う日付の定義済みクラスには
add(DateInterval $interval): DateTime
format(string $format): string
//上記2つらしい？