<?php

interface Worker
{
    public function work();
}

class Developer implements Worker
{
    public function work()
    {
        printf('im developing');
    }
}

class Desinger implements Worker
{
    public function work()
    {
        printf('im designing');
    }
}

interface WorkerFactory
{
    public static function make();
}

class DeveloperFactory implements WorkerFactory
{

    public static function make()
    {
        return new Developer();
    }
}

class DesignerFactory implements WorkerFactory
{

    public static function make()
    {
        return new Desinger();
    }
}
$developer = DeveloperFactory::make();
$designer = DesignerFactory::make();
$developer->work();
echo "  ";
$designer->work();