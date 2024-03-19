<?php
echo "<p><a href='../index.php'>К содержанию</a></p>";

require_once 'Core/Controller.php';
require_once 'Project/Controller.php';

$CorePage = new Core\Controller;
$ProjectPage = new Project\Controller;

$CorePage->SetName("Иван");
$CorePage->SetSecondName("Иванов");
$CorePage->SetSalary(101341);

$ProjectPage->SetAge(22);
$ProjectPage->SetProfession("Программист");

echo "<strong>Имя: </strong>" . $CorePage->GetName() . "<br>";
echo "<strong>Фамилия: </strong>" . $CorePage->GetSecondName() . "<br>";
echo "<strong>Зарплата: </strong>₽" . $CorePage->GetSalary() . "<br>";

echo "<strong>Возраст: </strong>" . $ProjectPage->GetAge() . "<br>";
echo "<strong>Профессия: </strong>" . $ProjectPage->GetProfession() . "<br>";
