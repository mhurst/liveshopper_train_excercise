<?php
/**
 * Train Class
 * Conatins all relevant methods for our train test.
 * 
 * @package    LiveShopper Train Excercise
 * @author     Matt Hurst <piznac@gmail.com>
*/

namespace Ls\Classes;

class Train {
	private array$train_cars = [];
	private int$max_train_cars = 30;
	private int$train_total_weight = 0;

	/**
	 * Add Train Cars To The Beginning Of The Train
	 * 
	 * @param object train_car | Instance of a train car class
	 * @return void
	*/
	public function add_train_car_to_beginning_of_train(object$train_car) {
		if (count($this->train_cars) < $this->max_train_cars) {
			array_unshift($this->train_cars, $train_car);
			$this->add_to_train_total_weight($train_car->get_weight());

			return;
		}

		throw new \Exception('Invalid: Sorry this train is full.', 100);
	}

	/**
	 * Add Train Cars To The End Of The Train
	 * 
	 * @param object train_car | Instance of a train car class
	 * @return void
	*/
	public function add_train_car_to_end_of_train(object$train_car) {
		if (count($this->train_cars) < $this->max_train_cars) {
			array_push($this->train_cars, $train_car);
			$this->add_to_train_total_weight($train_car->get_weight());

			return;
		}

		throw new \Exception('Invalid: Sorry this train is full.', 100);
	}

	/**
	 * Remove Train Cars From The Beginning Of The Train
	 * 
	 * @return void
	*/
	public function remove_train_car_from_beginning_of_train() {
		if (count($this->train_cars) > 0) {
			$traincar = array_shift($this->train_cars);
			$this->remove_from_train_total_weight($traincar->get_weight());

			return;
		}

		throw new \Exception('Invalid: Sorry no more train cars to remove.', 100);
	}

	/**
	 * Remove Train Cars From The End Of The Train
	 * 
	 * @param object train_car | Instance of a train car class
	 * @return void
	*/
	public function remove_train_car_from_end_of_train() {
		if (count($this->train_cars) > 0) {
			$traincar = array_pop($this->train_cars);
			$this->remove_from_train_total_weight($traincar->get_weight());

			return;
		}

		throw new \Exception('Invalid: Sorry no more train cars to remove.', 100);
	}

	/**
	 * Get Train Total Weight
	 * 
	 * @return int class var train_total_weight
	*/
	public function get_train_total_weight() {
		return $this->train_total_weight;
	}

	/**
	 * Get Train Total Cars
	 * 
	 * @return int count of class var train
	*/
	public function get_train_total_cars() {
		return count($this->train_cars);
	}

	/**
	 * Get Train Cars
	 * 
	 * @return int count of class var train
	*/
	public function get_train_cars() {
		return $this->train_cars;
	}

	/**
	 * Add To Train Total Weight
	 * Adds weight int to class var train_total_weight
	 * 
	 * @param ine weight - supplied from train car class
	*/
	private function add_to_train_total_weight(int$weight) {
		$this->train_total_weight += $weight;
	}

	/**
	 * Remove From Train Total Weight
	 * Removes weight int to class var train_total_weight
	 * 
	 * @param ine weight - supplied from train car class
	*/
	private function remove_from_train_total_weight(int$weight) {
		$this->train_total_weight -= $weight;
	}
}