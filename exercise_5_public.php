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

    public function changePrice(float $newPrice){
        if ($newPrice > 2){
            $this->price = $newPrice;
            return "Price of a $this->name is: $this->price";
        }
    }
}

$cola = new Beverage("cola", "black", 2);

echo $cola->changePrice(3.5);




/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/