<?php

class Employee {
    // Private properties
    private $name;
    private $position;
    private $salary;

    // Constructor to initialize employee data
    public function __construct($name, $position, $salary) {
        $this->name = $name;
        $this->position = $position;
        $this->setSalary($salary);  // Using setter for validation
    }

    // Getter for employee data
    public function getName() {
        return $this->name;
    }
    public function getPosition() {
        return $this->position;
    }
    public function getSalary() {
        return $this->salary;
    }

    // Setter for employee salary with validation
    public function setSalary($salary) {
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary must be a positive number.");
        }
    }

    // Display employee details
    public function displayEmployeeDetails() {
        echo "Employee: " . $this->getName() . "<br>";
        echo "Position: " . $this->getPosition() . "<br>";
        echo "Salary: $" . $this->getSalary();
    }
}

try {
    // Creating an Employee object
    $employee = new Employee("Humaon Kabir Maruf", "Software Developer", 70000);
    $employee->displayEmployeeDetails();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}


?>
