<?php
require 'employee.php';

try {
    // Create a new employee
    $employee = new Employee("John Doe", 123, 50000.00);

    // Output details
    echo "Employee Name: " . $employee->getName() . "</br>";
    echo "Employee ID: " . $employee->getId() . "</br>";
    echo "Employee Salary: $" . number_format($employee->getSalary(), 2) . "</br>";

    // Update salary
    $employee->setSalary(55000.00);

    echo "Updated Salary: $" . number_format($employee->getSalary(), 2) . "</br>";

    $employee->setSalary(-1000.00);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "</br>";
}
?>
