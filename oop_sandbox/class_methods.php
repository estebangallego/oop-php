<?php

/**
 * Class Student
 */
class Student {
    var $first_name;
    var $last_name;
    var $country = 'None';

    function say_hello() {
        return "Hello world!";
    }
    function full_name () {
        return $this->first_name . " " . $this->last_name;
    }
}

$student1 = new Student;
$student1->first_name = 'Esteban';
$student1->last_name = 'Gallego';

$student2 = new Student;
$student2->first_name = 'Cesar';
$student2->last_name = 'Calderon';


echo $student1->full_name() . "<br />";
echo $student2->full_name() . "<br />";

$class_methods = get_class_methods('Student');
echo "Class Methods:" . implode(', ', $class_methods) . "<br />";


if (method_exists('Student', 'say_hello')) {
    echo "Method say_hello() exist in Student Class. <br />";
}else {
    echo "Method say_hello() does NOT exist in Student Class. <br />";
}