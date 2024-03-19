<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 18</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    trait Helper
    {
        private $name;
        private $age;
        private $population;

        public function getName()
        {
            return $this->name;
        }

        public function getAge()
        {
            return $this->age;
        }

        public function getPopulation()
        {
            return $this->population;
        }
    }

    class Country
    {
        use Helper;

        public function __construct($name, $age, $population)
        {
            $this->name = $name;
            $this->age = $age;
            $this->population = $population;
        }
    }

    $city = new Country('Саранск', 380, 312252);
    echo "Название города: " . $city->getName() . "<p>";
    echo "Возраст города: " . $city->getAge() . "<p>";
    echo "Население города: " . $city->getPopulation() . "<p>";
    ?>
</body>

</html>