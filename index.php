<?php

require_once('includes/autoload.inc.php');

//Create a new train.
$train = new Ls\Classes\Train();

//Create an engine.
$engine = new Ls\Classes\Traincars\Engine();
$engine->set_weight(2000);

//Get engine weight.
echo 'Engine Weight: ' . $engine->get_weight() . '<br>';

//Add our engine to our new train.
$train->add_train_car_to_beginning_of_train($engine);

//Create a train car where our passengers can ride.
$passenger_1 = new Ls\Classes\Traincars\Passenger();
$passenger_1->set_weight(500);

//Add our passenger car to our new train at the end of the train.
$train->add_train_car_to_end_of_train($passenger_1);

//Create a train car where we can store cargo.
$cargo_1 = new Ls\Classes\Traincars\Cargo();
$cargo_1->set_weight(5000);

//Add our cargo car to our new train at the end of the train.
$train->add_train_car_to_end_of_train($cargo_1);

//Lets remove a car from the beginning of our train.
$train->remove_train_car_from_beginning_of_train();

//Lets remove a car from the end of our train.
$train->remove_train_car_from_end_of_train();

//Lets remove another car from the end of our train.
$train->remove_train_car_from_end_of_train();

//Lets remove another car from the end of our train.
//At this point there are no cars in our train 
//And we should recieve an exception.
//Uncomment the next line to test this.
//$train->remove_train_car_from_end_of_train();

//How many cars do we currently have in our train?
echo 'Total number of cars in our train: ' . $train->get_train_total_cars() . '<br>';

//How much do all cars in our train weigh?
echo 'Total weight of the cars in our train: ' . $train->get_train_total_weight() . 'lbs <br>';

echo '<pre>';
var_dump($train);
echo '</pre>';

//Lets show an example when the train is full
$train = new Ls\Classes\Train();

function add_passeneger_car($train) {
	//Create a place where our passengers can ride
	$passenger = new Ls\Classes\Traincars\Passenger();
	$passenger->set_weight(500);

	//Add our passenger car to our new train at the end of the train
	$train->add_train_car_to_end_of_train($passenger);
}

for($i=0;$i<30;$i++) {
	add_passeneger_car($train);
}

//On this last add we should recieve an exception
//Uncomment the next line to test this.
//add_passeneger_car($train);

echo '<pre>';
var_dump($train);
echo '</pre>';