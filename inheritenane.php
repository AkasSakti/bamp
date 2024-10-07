<?php

// Kelas induk Employee
class Employee {
    public $name;
    public $position;

    public function __construct($name, $position) {
        $this->name = $name;
        $this->position = $position;
    }

    public function showDetails() {
        echo "Nama: $this->name, Posisi: $this->position.<br>";
    }
}

// Kelas turunan PermanentEmployee
class PermanentEmployee extends Employee {
    public $benefits;

    public function __construct($name, $position, $benefits) {
        parent::__construct($name, $position); // Memanggil konstruktor kelas induk
        $this->benefits = $benefits;
    }

    public function showDetails() {
        parent::showDetails();
        echo "Benefit: $this->benefits.<br>";
    }
}

// Kelas turunan Freelancer
class Freelancer extends Employee {
    public $hourlyRate;

    public function __construct($name, $position, $hourlyRate) {
        parent::__construct($name, $position); // Memanggil konstruktor kelas induk
        $this->hourlyRate = $hourlyRate;
    }

    public function showDetails() {
        parent::showDetails();
        echo "Tarif per jam: Rp $this->hourlyRate.<br>";
    }
}

// Penggunaan
$employee1 = new PermanentEmployee("Budi", "Software Engineer", "Asuransi dan Bonus");
$employee1->showDetails();

$employee2 = new Freelancer("Sari", "Web Designer", 200000);
$employee2->showDetails();

?>
