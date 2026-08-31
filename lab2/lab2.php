<?php


/*


Task 1 – Access Modifiers

This task demonstrates public, private, and protected properties in PHP.
The public property can be accessed from outside the class.
The private property is accessed only inside the same class.
The protected property can be used inside the class and its child classes.




*/
class StudentAccount
{
    public $name;
    private $studentId;
    protected $department;

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
        echo "Department: " . $this->department . "<br>";
    }

    function getStudentId()
    {
        return $this->studentId;
    }
}

$student1 = new StudentAccount(
    "Ahmad",
    1001,
    "Computer Science"
);

$student1->showInfo();

echo "Student ID from method: "
    . $student1->getStudentId();

echo "<br><br>";


/*

Task 2 – Simple Inheritance

This task demonstrates inheritance using the extends keyword in PHP.
The Student class inherits the protected $name property from Person.
It also inherits and uses the introduce() method from the parent class.
The Student class has its own study() method





*/
class Person
{
    protected $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    function introduce()
    {
        echo "My name is " . $this->name . "<br>";
    }
}

class Student extends Person
{
    function study()
    {
        echo $this->name . " is studying.";
    }
}

$student2 = new Student("Sara");

$student2->introduce();

$student2->study();

echo "<br><br>";


/*

Task 3 – Combine Inheritance and Access Modifiers

This task combines inheritance with public, protected, and private properties.
Employee is the parent class, and Manager extends the Employee class.
The Manager class can use the protected $name and inherited methods.
The private $salary is accessed through the getSalary() method.



*/
class Employee
{
    public $company;
    protected $name;
    private $salary;

    function __construct($name, $company, $salary)
    {
        $this->name = $name;
        $this->company = $company;
        $this->salary = $salary;
    }

    function showEmployee()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Company: " . $this->company . "<br>";
        echo "Salary: " . $this->salary . "<br>";
    }

    function getSalary()
    {
        return $this->salary;
    }
}

class Manager extends Employee
{
    function manageTeam()
    {
        echo $this->name . " is managing the team.";
    }
}

$manager1 = new Manager(
    "Ali",
    "Kabul Tech",
    30000
);

$manager1->showEmployee();

echo "Salary from method: "
    . $manager1->getSalary() . "<br>";

$manager1->manageTeam();


?>
