<?php
/**
 * TrainCars Class
 * Blueprints must have properties/methods 
 * for all train car classes
 * 
 * @package    LiveShopper Train Excercise
 * @author     Matt Hurst <piznac@gmail.com>
*/

namespace Ls\Classes\Traincars;

abstract class TrainCar {
    private int $weight;
    private string $type;

	abstract function set_weight(int $weight);
	abstract function get_weight();
	abstract function get_type();
}