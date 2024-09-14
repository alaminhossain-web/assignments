<?php
class Employee {
    private string $name;
    private int $id;
    private float $salary;

    public function __construct(string $name, int $id, float $salary) {
        $this->name = $name;
        $this->id = $id;
        $this->setSalary($salary); 
    }

    // Getter for name
    public function getName(): string {
        return $this->name;
    }

    // Setter for name
    public function setName(string $name): void {
        $this->name = $name;
    }

    // Getter for ID
    public function getId(): int {
        return $this->id;
    }

    // Setter for ID
    public function setId(int $id): void {
        $this->id = $id;
    }

    // Getter for salary
    public function getSalary(): float {
        return $this->salary;
    }

    // Setter for salary
    public function setSalary(float $salary): void {
        if ($salary < 0) {
            throw new InvalidArgumentException("Salary cannot be negative.");
        }
        $this->salary = $salary;
    }
}
?>
