<?php

function getSquareArea($base, $height)
{
   return $base * $height;
}
function getTriangleArea($square_area)
{
 return $square_area / 2;
}
$square_area =getSquareArea(5, 5)
getTriangleArea($square_area)