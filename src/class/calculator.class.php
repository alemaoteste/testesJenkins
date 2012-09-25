<?php

class Calculator
{

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     */
    public function add($a, $b)
    {
        return $a + $b;
    }

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == -1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 0
     */
    public function sub($a, $b)
    {
        return $a - $b;
    }

    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 0
     * @assert (1, 0) == 0
     * @assert (1, 1) == 1
     */
    public function mult($a, $b)
    {
        return $a * $b;
    }

    /**
     * @assert (1, 1) == 1
     * @assert (1, 2) == 0.5
     * @assert (2, 2) == 1
     * @assert (10, 2) == 5
     */
    public function div($a, $b)
    {
        return $a / $b;
    }

}