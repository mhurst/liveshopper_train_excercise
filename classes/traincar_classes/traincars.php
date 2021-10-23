<?php
/**
 * TrainCars Interface
 * Blueprints must have methods for all traincar classes
 * 
 * @package    LiveShopper Train Excercise
 * @author     Matt Hurst <piznac@gmail.com>
*/

namespace Ls\Classes\Traincars;

interface TrainCars {
	public function set_weight(int$weight);
	public function get_weight();
	public function get_type();
}