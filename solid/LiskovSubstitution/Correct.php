<?php
namespace solid\LiskovSubstitution;

abstract class Parallelogram 
{
    protected $height;
    protected $width;
    
    public function getWidth()
    {
        return $this->width;
    }
    
    public function getHeight()
    {
        return $this->height;
    }
    
    public function calculateArea()
    {
        return $this->height * $this->width;
    }
    
    public abstract function resize($height, $width);
}

class Rectangle extends Parallelogram 
{
	public function resize($height, $width)
	{
	    $this->height = $height;
	    $this->width = $width;
	}
}

class Square extends Parallelogram {
    
	public function resize($height, $width)
	{
	    $this->width = $width;
	    $this->height = $width;
	}
}

class GraphicEditor
{
    public function resize(Parallelogram $parallelogram)
    {
        $parallelogram->resize(
            $parallelogram->getHeight() * 2,
            $parallelogram->getWidth() * 4
        );
    }
}