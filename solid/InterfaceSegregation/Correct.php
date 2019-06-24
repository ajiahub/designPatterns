<?php
namespace solid\InterfaceSegregation;

interface Vehicle 
{
	public function run();
}

interface AutomotiveVehicle extends Vehicle
{
    public function turnOn();
    public function fuel();
}

class Motorcycle implements AutomotiveVehicle
{
    public function turnOn()
    {
        echo 'Motorcycle Turning on...';
    }

    public function run()
    {
        echo 'Motorcycle running...';
    }

    public function fuel()
    {
        echo 'Fuel the Motorcycle';
    }
}

class Bicycle implements Vehicle
{
	public function run() 
	{
		echo 'Bicycle running...';
	}
}