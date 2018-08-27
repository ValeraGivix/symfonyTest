<?php


class Worker
{
    private $name;
    private $age;
    private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

}

$one = new Worker();

$one->setName('Ivan');
$one->setAge(25);
$one->setSalary(1000);

$two = new Worker();

$two->setName('Vasia');
$two->setAge(26);
$two->setSalary(2000);

print $one->getSalary() + $two->getSalary();
print $one->getAge() + $two->getAge();
