<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
$dough = $pizzas * (($persons * 20) + 200);
        return $dough;
    }

    public function calculateSauceRequirement($pizzas, $volume)
    {
        $can_of_sauce = ($pizzas * 125) / $volume;

        return $can_of_sauce;
    }

    public function calculateCheeseCubeCoverage($cube, $thickness, $diameter)
    {
        $pizzas = ($cube**3) / ($thickness * 3.14159265359 * $diameter);
        return floor($pizzas);
    }

    public function calculateLeftOverSlices($pizzas,$friends)
    {
        $left_over = ($pizzas*8) % $friends;
            return $left_over;
    }
}
