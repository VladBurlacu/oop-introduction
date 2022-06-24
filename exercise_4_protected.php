<?php

declare(strict_types=1);

class Beverage
{
    protected string $name;
    protected string $color;
    protected float $price;
    protected string $temperature;

    public function __construct(string $name, string $color, float $price)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = "cold";
    }

    public function getInfo(): void
    {
        echo "This $this->name is $this->temperature and has a $this->color color. The price for a $this->name: €$this->price";
        echo "<br>";
    }

    public function getName() : string {
        return  $this->name;
    }

    public function getColor() : string {
        return $this->color;
    }

    public function setColor(string $color) : void {
        $this->color = $color;
        echo $this->color;
    }
}

class Beer extends Beverage
{
    protected float $alcoholPercentage;

    public function __construct(string $name, string $color, float $price, float $alcoholPercentage)
    {
        parent::__construct($name, $color, $price);
        $this->alcoholPercentage = $alcoholPercentage;
    }

    public function getAlcoholPercentage() : float
    {
        return $this->alcoholPercentage;
    }

    public function showAlcoholPercentage() : void {
        echo $this->alcoholPercentage;
        "<br>";
    }

    public function beerInfo() : string {
        return "Hi I'm " .$this->getName()." and have an alcohol percentage of $this->alcoholPercentage and I have a " .$this->getColor() ." color.";
    }
}

$Duvel = new Beer("Duvel", "Blond", 3.5, 8.5);
$Duvel->getInfo();
echo $Duvel->getAlcoholPercentage();
echo "<br>";
$Duvel->showAlcoholPercentage();
echo "<br>";
$Duvel->setColor("light");
echo "<br>";
echo $Duvel->beerInfo();

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/