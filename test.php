<?php

/*
$a = 5;
$b = 6;


aaa($a, $b);



aaa($a, $a);

aaa($b, $a);




function aaa($num, $num2){
    return $num
}

*/

$t2 = new Task();
$t2->setTaskText('texttext');
$t2->getTaskText();



$t = new Task();
$t->setTaskText('text');

$t->getTaskText();


class Task
{
    protected $taskText;

    protected $dateOfExecution;

    /** @var boolean */
    protected $done = false;

    /**
     * @return mixed
     */
    public function getTaskText()
    {
        return $this->taskText;
    }

    /**
     * @param mixed $taskText
     */
    public function setTaskText($taskText): void
    {
        $this->taskText = $taskText;
    }

    /**
     * @return mixed
     */
    public function getDateOfExecution()
    {
        return $this->dateOfExecution;
    }

    /**
     * @param mixed $dateOfExecution
     */
    public function setDateOfExecution($dateOfExecution): void
    {
        $this->dateOfExecution = $dateOfExecution;
    }

    public function markTaskAsDone()
    {
        $this->done = true;
    }

}



/*

class Form
{
    public function input($array)
    {
        $result = '<input ';

        $result .= $this->generate($array);

        return $result.'>';
    }

    public function password($a)
    {
        $result = '<input ';

        $a['type'] = 'password';

        $result .= $this->generate($a);

        return $result.'>';
    }

    public function submit($a)
    {
        $result = '<input ';

        $a['type'] = 'submit';

        $result .= $this->generate($a);

        return $result.'>';
    }

    public function open($array)
    {
        $result = '<form ';

        $result .= $this->generate($array);

        return $result.'>';
    }

    public function textarea($a)
    {
        $result = '<textarea ';

        $value = $a['value'];
        unset($a['value']);

        $result .= $this->generate($a);

        return $result.'>'.$value.'</textarea>';
    }

    public function close()
    {
        return "</form>";

    }

    private function generate($array)
    {
        $result = '';
        foreach ($array as $key => $value) {
            $result = $result.$key.'="'.$value.'" ';
        }

        return $result;
    }

}


$form = new Form();

echo $form->password(['size' => 8, 'name' => 'Pass', 'type' => 'text']);

$r = 9;

