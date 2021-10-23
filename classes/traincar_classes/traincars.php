<?php
/**
 * TrainCars Interface
 * Blueprints must have methods for all traincar classes
 * 
 * @package    LiveShopper Train Excercise
 * @author     Matt Hurst <piznac@gmail.com>
*/

namespace Ls\Classes\Traincars;

abstract class TrainCars {
    private int$weight;
    private string$type;

	abstract function set_weight(int$weight);
	abstract function get_weight();
	abstract function get_type();
}