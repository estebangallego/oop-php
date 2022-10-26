<?php
/**
     * Define a class for bicycle
     * Properties: brand, model, year, description, weight_kg
     * Methods: name, weight_lbs, set_weight_lbs
     * 1 kg = 2.2046226218
*/
class Bicycle {
    var string $brand;
    var string $model;
    var string $year;
    var string $description = 'Used Bicycle';
    var float $weight_kg = 0.0;

    public function name () {
        return "Brand " .
            $this->brand . ", Model " .
            $this->model . " Year " .
            $this->year . " with the description of " .
            $this->description;
    }

    public function weight_lbs () {
        return floatval($this->weight_kg) * 2.2046226218;
    }

    public function set_weight_lbs($value) {
        $this->weight_kg = floatval($value) / 2.2046226218;
    }
}

$treck = new Bicycle;
$treck->brand = "BMX";
$treck->model = "Sport";
$treck->year = "2022";
$treck->description = "This is a great bicycle!";
$treck->weight_kg = 1;


$cd = new Bicycle;
$cd->brand = "Cannoldale";
$cd->model = "Synapse";
$cd->year = "2020";
$cd->description = "This is a great bicycle 02!";
$cd->set_weight_lbs(145);


echo $treck->name() . "<br />";
echo number_format($treck->weight_kg, '1', '.', ',') . " kl<br />";
echo number_format($treck->weight_lbs(), '1', '.', ',') . " lbs<br />";

echo "---------------------- <br />";

echo $cd->name() . "<br />";
echo number_format($cd->weight_kg, '1', '.', ',') . " kl<br />";
echo number_format($cd->weight_lbs(), '1', '.', ',') . " lbs<br />";



