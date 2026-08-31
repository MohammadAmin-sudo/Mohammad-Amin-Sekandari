<?php

#Part A — Class and Object

#What was done?

#A Class named Student was created.
#A Function named sayHello() was created inside it.
#his Function displays the message Hello! I am a student.
#Then, an Object named $student1 was created from the Class.
#With $student1->sayHello(), the function was executed and the message was displayed.

class Student
{
    function sayHello()
    {
        echo "Hello! I am a student.";
    }
}

$student1 = new Student();
echo "<be>";
$student1->sayHello();
echo "<br><br>";



#Part B — Class with Constructor

#What was done?

#A Class named StudentInfo was created.
#Three properties were defined for the student:
#name → Student's name
#studentId → Student ID
#department → Department
#A Constructor was created to receive these three pieces of information when creating a student.
#A Function named showInfo() was created to display the student's information.
#An Object named $student1 was created, and Ahmad's information was given to it.
#With showInfo(), Ahmad's information was displayed.


class StudentInfo
{
    public $name;
    public $studentId;
    public $department;

    function __construct($name, $studentId, $department)
    {
        $this->name = $name;
        $this->studentId = $studentId;
        $this->department = $department;
    }

    function showInfo()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Student ID: " . $this->studentId . "<br>";
        echo "Department: " . $this->department;
    }
}

$student1 = new StudentInfo(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->showInfo();

echo "<br><br>";

#Part C — Create Another Object

#What was done?

#A new Object was created from the same Class, StudentInfo.
#The second student's name is Sara.
#Her Student ID is 1002.
#Her department is Information Systems.
#With showInfo(), Sara's information was displayed.


$student2 = new StudentInfo(
    "Sara",
    1002,
    "Information Systems"
);

$student2->showInfo();

?>
