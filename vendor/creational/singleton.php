<?php

//final class Connection
//{
//    private static ?self $instance = null;
//    private static string $name;
//
//    /**
//     * @return string
//     */
//    public static function getName(): string
//    {
//        return self::$name;
//    }
//
//    /**
//     * @param string $name
//     */
//    public static function setName(string $name): void
//    {
//        self::$name = $name;
//    }
//
//    public function __clone(): void
//    {
//        // TODO: Implement __clone() method.
//    }
//    public function __wakeup(): void
//    {
//        // TODO: Implement __wakeup() method.
//    }
//
//    public static function getInstance(): self
//    {
//        if (self::$instance === null) {
//            self::$instance = new self();
//        }
//        return self::$instance;
//    }
//}
//$connection = Connection::getInstance();
//$connection::setName('Ulugbekgon');
//var_dump($connection::getName());
