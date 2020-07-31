<?php

require_once 'vendor/autoload.php';

use App\Gender\Man;
use App\Gender\Woman;

$man1 = new Man('man1', 32);
$woman1 = new Woman('Woman1', 32);
$man2 = new Man('Child1', 10);
$woman2 = new Woman('Child2', 8);

echo $man2->getName() . '<br>';
echo $man2->say('test') . '<br>';

$man2->setFather($man1);
echo $man2->getFather()->getName() . '<br>';
$man2->setMother($woman1);
echo $man2->getMother()->getName() . '<br>';

echo $man2;
echo '<br>';
echo $woman2;
echo '<br>';

echo $man2->goto();
echo '<br>';

$man2->setAge(18);

echo $man2->goto();
echo '<br>';


if ($man2 instanceof \App\Human) {
    echo $man2->say('test2');
}