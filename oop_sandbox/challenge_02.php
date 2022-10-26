<?php
/*
 * Calculate the area
 * Calculate the floor space
 * Calculate the volume
 * */
class Furniture {
    var float $width;
    var float $depth;
    var float $height;
    var bool $is_seating = false;
    var bool $is_sleeper = false;
    var bool $is_upholstered = false;

    function area () {
        return floatval($this->width) * floatval($this->depth);
    }

    function volume () {
        return $this->area() * floatval($this->height);
    }
}

class Bed extends Furniture {
    var bool $is_sleeper = true;
}

class Sofa extends Furniture {
    var bool $is_seating = true;
    var bool$is_upholstered = true;

    var int $seats = 3;
    var bool $has_seat_cushions = true;
    var bool $has_back_cushions = true;
    var int $arms = 2;

    var float $depth_opened;

    function area_opened() {
        if(!$this->is_sleeper) {return $this->area();}
        return floatval($this->width) * floatval($this->depth_opened);
    }
}