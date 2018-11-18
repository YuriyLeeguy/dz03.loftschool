<?php
function calc($first=100, $second=5)
{
    return $first + $second;
}

// Первый пример классический
//echo calc(100, 5);
// Без вторового параметра function calc($first, $second=5)
//echo calc(100);
// Без параметров
//echo calc();

echo calc(200, 10);
