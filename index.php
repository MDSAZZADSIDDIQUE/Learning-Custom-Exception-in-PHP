<?php
class NetworkException extends Exception
{
};
class AgeLimitException extends Exception
{
};

class Student
{
    private $name;
    private $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        if ($age < 5) {
            throw new AgeLimitException("Try again in few years.", 404);
        }
    }
}

try {
    $student = new Student('Sazzad', 4);
} catch (AgeLimitException $e) {
    echo $e->getMessage();
}
