<?php

/**
 * Class Student
 */
class Student {

}

/**
 * Class Person
 */
class Person {

}
    $classes = get_declared_classes();
    echo "Classes: " . implode(',', $classes) . "<br />";
    
    $classes_names = ['Product', 'Student', 'student'];
    foreach ($classes_names as $class_name) {
        if(class_exists($class_name)){
            echo "{$class_name} is declared.<br />";
        }else {
            echo "{$class_name} is NOT declared.<br />";
        }
    }
