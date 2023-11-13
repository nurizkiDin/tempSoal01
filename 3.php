<?php
/*
    Interface mengimplementasikan method atau fungsi untuk suatu class, bersifat seperti
    abstract sehingga membutuhkan child class untuk mengelola proses perintah dan fungsi-fungsinya
    hanya bisa bersifat public
*/

interface Kendaraan {
    public function jenis();
    public function barisBaru();
}

class Mobil implements Kendaraan {
    public function jenis() {
        echo "Supercar";
    }
    public function barisBaru() {
        echo "\n";
    }
}
class Kapal implements Kendaraan {
    public function jenis() {
        echo "Pesiar";
    }
    public function barisBaru() {
        echo "\n";
    }
}
class Pesawat implements Kendaraan {
    public function jenis() {
        echo "Jet Tempur";
    }
    public function barisBaru() {
        echo "\n";
    }
}
class Hewan{
    public function jenis() {
        echo "Mamalia";
    }
    public function barisBaru() {
        echo "\n";
    }
}

$car = new Mobil();
$ship = new Kapal();
$plane = new Pesawat();
$hewan = new Hewan();
$vehicle = array($car, $ship, $plane);
$campuran = array($car, $ship, $plane, $hewan);

if($car instanceof Kendaraan && $ship instanceof Kendaraan && $plane instanceof Kendaraan) {
    foreach($vehicle as $v) {
        $v->jenis();
        $v->barisBaru();
    }
}
if($hewan instanceof Kendaraan) {
    foreach($campuran as $c) {
        $c->jenis();
        $c->barisBaru();
    }
}