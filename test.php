<?php


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

