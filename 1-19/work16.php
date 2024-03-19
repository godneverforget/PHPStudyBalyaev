<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Web-программирование" (Баляев Д.С.) - Работа 16</title>
</head>

<body>
    <?php
    echo "<p><a href='index.php'>К содержанию</a></p>";

    class Employee
    {
        protected $name;
        protected $salary;

        public function __construct($name, $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getSalary()
        {
            return $this->salary;
        }
    }

    class Programmer extends Employee
    {
        private $langs = [];

        public function getLangs()
        {
            return $this->langs;
        }

        public function setLangs($langs)
        {
            $this->langs = $langs;
        }
    }

    $programmer = new Programmer("Иванов Иван", 79426);

    $programmer->setLangs(["PHP", "JavaScript", "Python", "C++", "PascalABC"]);

    echo "<strong>Программист: </strong>" . $programmer->getName() . "<p>";
    echo "<strong>Зарплата: </strong>₽" . $programmer->getSalary() . "<p>";
    echo "<strong>Языки: </strong>" . implode(", ", $programmer->getLangs()) . "<p>";
    ?>

</body>

</html>