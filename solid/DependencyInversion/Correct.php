<?php
namespace solid\DependencyInversion;

interface PowerDevice
{
   public function on();
   public function off();
       
}

class Computer implements PowerDevice
{
    public function on()
    {
        echo 'Windows power on!';
    }
    
    public function off()
    {
        echo 'Windows power off...';
    }
}

class Button 
{
    /**
     * @var PowerDevice
     */
    private $powerDevice;
    
    public function setPowerDevice(PowerDevice $powerDevice)
    {
        $this->powerDevice = $powerDevice;
    }
    
    public function turnOn()
    {
        if (condition) { //some condition
            $this->powerDevice->on();
        }
    }
    
}