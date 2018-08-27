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

    public function __construct($name, $age, $salary)
    {
        $this->setName($name);
        $this->age = $age;
        $this->salary = $salary;
    }
}
$one = new Worker('Vasia', 25, 1000);
$two = new Worker('Vania', 26, 2000);

echo $one->getSalary() + $two->getSalary();
echo $one->getAge() + $two->getAge();

$s=2;
