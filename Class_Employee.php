<?php

declare(strict_types=1);
class Employee
{
    private int $ip;
    private string $first_name;
    private string $last_name;
    private int $salary;

    public function __construct(int $ip, string $first_name, string $last_name, int $salary)
    {
        $this->ip = $ip;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->salary = $salary;
    }
    public function getIp(): int
    {
        return $this->ip;
    }
    public function getFirstName(): string
    {
        return $this->first_name;
    }
    public function getLastName(): string
    {
        return $this->last_name;
    }
    public function getSalary(): int
    {
        return $this->salary;
    }
    public function setIp(int $ip): void
    {
        $this->ip = $ip;
    }
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }
    public function setLastName(string $last_name): void
    {
        $this->last_name = $last_name;
    }
    public function setSalary(int $salary): void
    {
        $this->salary = $salary;
    }
    public function __toString()
    {
        return "Employee[ip=" . $this->ip . ", first_name=" . $this->first_name . ", last_name=" . $this->last_name . ", salary=" . $this->salary . "]";
    }
}
