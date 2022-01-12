<?php

namespace solid\OpenClosed;

class Vehicle
{
    public function run()
    {
    }
}

class Motorcycle extends Vehicle
{

}

class Car extends Vehicle
{

}

class Driver
{
    public function drive(Vehicle $vehicle)
    {
        if ($vehicle instanceof Motorcycle) {
            $this->turnOnMotorcycle();
        }

        if ($vehicle instanceof Car) {
            $this->turnOnCar();
        }

        $vehicle->run();
    }

    private function turnOnCar()
    {
        echo 'Turning On The Car';
    }

    private function turnOnMotorcycle()
    {
        echo 'Turning On The Motorcycle';
    }
}
