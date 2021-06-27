<?php

class Student {
    public $name;

    function __construct( $name ) {
        $this->name = $name; // Using 'this' to access the student's name
    }
};

$tom = new Student('Tom');
echo $tom->name;

?>