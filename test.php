<?php


class User
{
    protected $name;
    protected $age;


    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($age)
    {
       $this->age = $age;
    }
    public function  getAge()
    {
        return $this->age;
    }
}
class Worker extends User
{
    private $salary;

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$one = new Worker();
$one->setSalary(1000);
$one->setName('Ivan');
$one->setAge(25);

$two = new Worker();
$two->setSalary(2000);
$two->setName('Vasia');
$two->setAge(25);

print $one->getSalary() + $two->getSalary();
print $one->getAge() + $two->getAge();
$r=9;

