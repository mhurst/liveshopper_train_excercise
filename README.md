# Liveshopper Train Exercise

## Test Requirements:

A train is made up of a series of train cars.

Using only PHP, without any additional libraries, write two classes; "Train" and "TrainCar".

Must be able to:
- Set the weight of a TrainCar.
- Get the weight of a TrainCar.
- Add TrainCars to the Train, either at the front or back, with a limit of 30 cars.
- Remove a TrainCar from either end, reporting a problem if there are none left to remove.
- Ask the Train how many cars are currently in the Train.
- Get the total weight of the Train.

After writing the classes show an example of how to use them.

Bonus: Show the best way to have different types of TrainCars (i.e. cargo, passenger, engine,
etc).

## Code Usage

The index.php gives examples on how to use these classes.

In the index.php file you must require the autoload file or no classes will load by default.

    require_once('includes/autoload.inc.php');
    
To create a new train instance:
    
    $train = new Ls\Classes\Train();
    
To create a new train cars instance (example of an engine type train car):

    $engine = new Ls\Classes\Traincars\Engine();
    
And to set it's weight:

    $engine->set_weight(2000);
    
And to get its weight:

    $engine->get_weight();
    
To add a train car to the beginning of our train

    $train->add_train_car_to_beginning_of_train($engine);
 
To add a train car to the end of our train:

    $train->add_train_car_to_end_of_train($passenger_1);
    
To remove a car from the beginning of our train.

    $train->remove_train_car_from_beginning_of_train();

To remove a car from the end of our train.

    $train->remove_train_car_from_end_of_train();

There are other examples in the index.php file to trigger all required exceptions.

I did the bonus for creating different types of train cars. For this to be of any use this would need to be fleshed out a bit more. Adding methods such as:

- Check if train car is engine and don't remove from front with the default methods.
- Check if train car is caboose and don't remove from end of train with the default method.
- Create specific methods for removing "special" train cars.
- Create methods for removing specific train cars based on position or some sort of identifier.

Etc.

With creating this bonus it technically voids the original assignment, which was to create two classes. I felt this was the best way to do this.