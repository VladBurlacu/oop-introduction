<?php

declare(strict_types=1);

class Beverage
{
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

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
    private float $alcoholPercentage;

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
/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/