<?php

include_once 'CalculatorInterace.php';
include_once 'Addition.php';
include_once 'Multiplication.php';

class App1
{
    public function add_index()
    {
        $var = $this->cal(new Addition(), 3, 5);

        return $var;
    }

    public function multiply_index()
    {
        $var = $this->cal(new Multiplication(), 3, 5);

        return $var;
    }

    private function cal(CalculatorInterace $calculator, $var1, $var2)
    {
        return $calculator->calculate($var1, $var2);
    }
}

$app1 = new App1();

echo '3 add 5 = '.$app1->add_index()."\n";
echo '3 multiply 5 = '.$app1->multiply_index()."\n";
