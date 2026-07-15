<?php

class PizzaPi
{
    public function calculateDoughRequirement($number_of_pizzas, $number_of_persons)
    {
        return $number_of_pizzas * (($number_of_persons * 20) + 200);
    }

    public function calculateSauceRequirement($number_of_pizzas, $can_volume)
    {
        return ($number_of_pizzas * 125) / $can_volume;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension, $thickness_cheese, $diameter_of_pizza)
    {
        $cheese = floor(($cheese_dimension ** 3) / ($thickness_cheese * 3.14 * $diameter_of_pizza));
        return $cheese;
    }

    public function calculateLeftOverSlices($number_of_pizzas, $number_of_friends)
    {
        return ($number_of_pizzas * 8) % $number_of_friends;
    }
}
