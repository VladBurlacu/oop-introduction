<?php

declare(strict_types=1);

class Beverage
{
    public string $name;
    public string $color;
    public int $price;
    public string $temperature;

    public function __construct($name, $color, $price)
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
}

$cola = new Beverage("cola", "black", 2);

$cola->getInfo();

echo $cola ->temperature;
?>
/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getInfo function which returns "This beverage is
<temperature> and
    <color>."
        TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2
        euro and the temperature to cold automatically
        print the getInfo on the screen.
        TODO: Print the temperature on the screen.

        USE TYPEHINTING EVERYWHERE!
        */