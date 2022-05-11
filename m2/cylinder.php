<?php

class Cylinder
{
    public function getVolume($radius, $height)
    {
        $baseArea = pi() * $radius * $radius;
        $perimeter = 2 * pi() * $radius;
        return $perimeter * $height + 2 * $baseArea;
    }
}
