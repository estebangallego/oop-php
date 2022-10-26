<?php

class Student {

}

$student1 = new Student;
$student2 = new Student;

echo get_class($student1) . "<br />";

$classes_names = ['Product', 'Student', 'student'];

foreach ($classes_names as $class_name) {
    if(is_a($student1, $class_name)){
        echo "Student is a {$class_name} <br />";
    }else {
        echo "Student1 is NOT a {$class_name} <br />";
    }
}