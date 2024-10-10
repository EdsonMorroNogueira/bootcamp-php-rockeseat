<?php

function foo(): void
{
    echo '<h1> Hello World </h1>';
    echo '<br>';
    echo '<h2> Welcome to PHP </h2>';
}

class Test
{
    public string $nome = 'Edson';

    public string $email = 'edsonmorro@email.com';

    public function __construct()
    {
        echo __METHOD__;
    }

    public function bar()
    {
        echo __METHOD__;
    }
}

echo '<br>';

foo();

echo '<br>';

(new Test())->bar();

echo '<br>';

$test = new Test;

var_dump($test);

$test->bar();
