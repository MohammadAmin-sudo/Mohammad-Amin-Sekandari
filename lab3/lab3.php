<?php



/*
Task 1
*/

class Library
/*
This creates a class called Library.
*/
{
    const MAX_BOOKS = 3;
}
/*
This creates a constant called MAX_BOOKS.

const → means constant, a value that does not change.
MAX_BOOKS → the name of the constant.
3 → the value of the constant.
*/
echo "Maximum books allowed: " . Library::MAX_BOOKS;

echo "<br><br>";







// Task 2: Static Property and Method


class StudentCounter
/*
we create a class studentcounter 
*/
{
    public static $count = 0;

    public static function addStudent()
    {
        self::$count++;
    }
}
/*
This creates a static property called $count.

public → the property can be accessed from outside the class.
static → the property belongs to the class itself, not to an individual object.
$count → stores the number of students.
= 0 → the counter starts at zero
*/


StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count;

echo "<br><br>";


 
// Task 3: Abstract Class and Method

abstract class Vehicle
{
    abstract public function start();
}

class Car extends Vehicle
{
    public function start()
    {
        echo "Car engine started.";
    }
}

class Bike extends Vehicle
{
    public function start()
    {
        echo "Bike started.";
    }
}

$car = new Car();
$bike = new Bike();

$car->start();

echo "<br>";

$bike->start();
/*
We create a parent class called Vehicle.
Then we create Car and Bike as child classes.
Both classes must have a start() method.
Car displays “Car engine started.” and Bike displays “Bike started.”
Finally, we create objects from Car and Bike and run their start() methods.
*/
?>
