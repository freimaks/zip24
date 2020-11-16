<?php

class Task2
{
    public function getYByX (array $arr, int $x)
    {
        foreach ($arr as $value) {
            if ($value['x'] === $x) {
                return $value['y'];
            }
        }
    
        // В задании не оговорено, но всё-таки лучше вернуть что-то осмысленное
        return null;
    }
}
