<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>kadai_016</title>
</head>

<body>
    <p>
        <?php
        class Food {
            public $name;
            public $price;

            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化する
        $food = new Food('potato', 250);

         // インスタンス$foodの各プロパティの値を出力する
         print_r($food);

         echo "<br/>";

        class Animal {
            public $name;
            public $height;
            public $weight;

            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化する
        $animal = new Animal('dog', 60, 5000);

         // インスタンス$foodの各プロパティの値を出力する
         print_r($animal);

         echo "<br/>";

         // $foodのpriceプロパティの値を出力する
         echo $food->price;

         echo "<br/>";

         // $animalのheightプロパティの値を出力する
         echo $animal->height;

        ?>
    </p>
</body>

</html>