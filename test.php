<?php


class Worker
{
    public $name;
    public $age;
    public $salary;
}

$one = new Worker();

$one->name = 'Ivan';
$one->age = 25;
$one->salary = 1000;

$two = new Worker();
$two->name = 'Vasia';
$two->age = 26;
$two->salary = 2000;

print $one->salary + $two->salary;
print $one->age + $two->age;
