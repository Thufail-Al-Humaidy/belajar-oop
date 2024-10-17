<?php

class Car {
    // Properti
    public $brand;
    public $model;
    public $color;

    // Constructor untuk menginisialisasi properti saat objek dibuat
    // public function __construct($brand, $model, $color) {
    //     $this->brand = $brand;
    //     $this->model = $model;
    //     $this->color = $color;
    // }

    // Method untuk menampilkan informasi mobil
    public function info() {
        return "This is a " . $this->brand . " model " . $this->model . " with Color " . $this->color;
    }
}

$car1 = new Car();
$car1->brand = "Toyota";
$car1->model = "Corolla";
$car1->color = "Blue";

$car2 = new Car();
$car2->brand = "Honda";
$car2->model = "Civic";
$car2->color = "Black";
echo $car1->info();
echo "<br>";
echo $car2->info();
