<?php
/**
 * Cargo Class
 * A train cars class that extends that class
 * 
 * @package    LiveShopper Train Excercise
 * @author     Matt Hurst <piznac@gmail.com>
*/

namespace Ls\Classes\Traincars;

use Ls\Classes\Traincars\traincars as Traincars;

class Cargo extends TrainCars {
	private int $weight = 0;
	private string $type = 'Cargo';

	/**
	 * Set Weight
	 * 
	 * @param int weight 
	*/
	public function set_weight(int $weight) {
		$this->weight = $weight;
	}

	/**
	 * Get Weight
	 * 
	 * @return int class var weight 
	*/
	public function get_weight() {
		return $this->weight;
	}

	/**
	 * Get Type
	 * 
	 * @return string class var type 
	*/
	public function get_type() {
		return $this->type;
	}
}