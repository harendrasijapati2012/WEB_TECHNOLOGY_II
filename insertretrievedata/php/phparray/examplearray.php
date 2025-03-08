<?php
//associative aaray
$student = array(
    "name" => "John",
    "age" => 20,
    "course" => "Computer Science"
);

echo "Student Name: " . $student["name"] . "<br>";
echo "Age: " . $student["age"] . "<br>";
echo "Course: " . $student["course"] . "<br>";




//2darray multidimensional array with
$students = array(
    array("John", 20, "Computer Science"),
    array("Emma", 22, "Electronics"),
    array("Michael", 21, "Mechanical")
);

echo "Student 1: " . $students[0][0] . " - " . $students[0][1] . " - " . $students[0][2] . "<br>";
echo "Student 2: " . $students[1][0] . " - " . $students[1][1] . " - " . $students[1][2] . "<br>";
echo "Student 3: " . $students[2][0] . " - " . $students[2][1] . " - " . $students[2][2] . "<br>";

?>