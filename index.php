<?php
require_once 'Class_Circle.php';
require_once 'Class_Employee.php';
require_once 'Class_Rectangle.php';
require_once 'Class_InvoiceItem.php';
// Testing Circle class
$circle1 = new Circle();
echo $circle1; // Circle[radius=0, color=unknown]
echo "<br>Radius: " . $circle1->getRadius(); // Radius: 0
echo "<br>Area: " . $circle1->getArea(); // Area: 0
echo "<br>Circumference: " . $circle1->getCircumference(); // Circumference: 0
$circle1->setRadius(10);
$circle1->setColor("blue");
echo "<br>Updated " . $circle1; // Updated Circle[radius=10, color=blue]
echo "<br>Updated Area: " . $circle1->getArea(); // Updated Area: 314.15926535898
echo "<br>Updated Circumference: " . $circle1->getCircumference(); // Updated Circumference: 62.831853071795
echo "<br>----------------------<br>";
$circle2 = new Circle(5);
echo $circle2; // Circle[radius=5, color=unknown]
echo "<br>Radius: " . $circle2->getRadius(); // Radius: 5
echo "<br>Area: " . $circle2->getArea(); // Area: 78.539816339745
echo "<br>Circumference: " . $circle2->getCircumference(); // Circumference: 31.415926535897
$circle2->setColor("red");
echo "<br>Updated " . $circle2; // Updated Circle[radius=5, color=red]
echo "<br>Updated Area: " . $circle2->getArea(); // Updated Area: 78.539816339745
echo "<br>Updated Circumference: " . $circle2->getCircumference(); // Updated Circumference: 31.415926535897
echo "<br>----------------------<br>";
$circle4 = new Circle(7, "yellow");
echo $circle4; // Circle[radius=7, color=yellow]
echo "<br>Radius: " . $circle4->getRadius(); // Radius: 7
echo "<br>Area: " . $circle4->getArea(); // Area: 153.9380400259
echo "<br>Circumference: " . $circle4->getCircumference(); // Circumference: 43.982297150257
$circle4->setColor("yellow");
echo "<br>Updated " . $circle4; // Updated Circle[radius=7, color=yellow]
echo "<br>Updated Area: " . $circle4->getArea(); // Updated Area: 153.9380400259
echo "<br>Updated Circumference: " . $circle4->getCircumference(); // Updated Circumference: 43.982297150257
echo "<br>======================================================================================================<br>";
// Testing Employee class
$employee1 = new Employee(101, "John", "Doe", 50000);
echo $employee1; // Employee[ip=101, first_name=John, last_name=Doe, salary=50000]
echo "<br>IP: " . $employee1->getIp(); // IP: 101
echo "<br>First Name: " . $employee1->getFirstName(); // First Name: John
echo "<br>Last Name: " . $employee1->getLastName(); // Last Name: Doe
echo "<br>Salary: " . $employee1->getSalary(); // Salary: 50000
$employee1->setFirstName("Jane");
$employee1->setLastName("Smith");
$employee1->setSalary(60000);
echo "<br>Updated " . $employee1; // Updated Employee[ip=101, first_name=Jane, last_name=Smith, salary=60000]
echo "<br>Updated First Name: " . $employee1->getFirstName(); // Updated First Name: Jane
echo "<br>Updated Last Name: " . $employee1->getLastName(); // Updated Last Name: Smith
echo "<br>Updated Salary: " . $employee1->getSalary(); // Updated Salary: 60000
echo "<br>======================================================================================================<br>";
// Testing Rectangle class
$rectangle1 = new Rectangle(5, 10);
echo $rectangle1; // Rectangle[width=5, length=10]
echo "<br>Width: " . $rectangle1->getWidth(); // Width: 5
echo "<br>Length: " . $rectangle1->getLength(); // Length: 10
echo "<br>Area: " . $rectangle1->getArea(); // Area: 50
echo "<br>Perimeter: " . $rectangle1->getPerimeter(); // Perimeter: 30
$rectangle1->setWidth(7);
$rectangle1->setLength(14);
echo "<br>Updated " . $rectangle1; // Updated Rectangle[width=7, length=14]
echo "<br>Updated Area: " . $rectangle1->getArea(); // Updated Area: 98
echo "<br>Updated Perimeter: " . $rectangle1->getPerimeter(); // Updated Perimeter: 42
echo "<br>======================================================================================================<br>";
// Testing InvoiceItem class
$invoiceItem1 = new InvoiceItem("001", "Item 1", 2, 10.0);
echo $invoiceItem1; // InvoiceItem[id=001, desc=Item 1, qty=2, unitPrice=10]
echo "<br>ID: " . $invoiceItem1->getId(); // ID: 001
echo "<br>Description: " . $invoiceItem1->getDesc(); // Description: Item 1
echo "<br>Quantity: " . $invoiceItem1->getQty(); // Quantity: 2
echo "<br>Unit Price: " . $invoiceItem1->getUnitPrice(); // Unit Price: 10
echo "<br>Total: " . $invoiceItem1->getTotal(); // Total: 20
$invoiceItem1->setDesc("Updated Item 1");
$invoiceItem1->setQty(3);
$invoiceItem1->setUnitPrice(12.0);
echo "<br>Updated " . $invoiceItem1; // Updated InvoiceItem[id=001, desc=Updated Item 1, qty=3, unitPrice=12]
echo "<br>Updated Total: " . $invoiceItem1->getTotal(); // Updated Total: 36