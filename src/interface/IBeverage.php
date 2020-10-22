<?php

interface IBeverage
{
    function getPrice(): float;
    function getDescription(): String;
    function getSize(): String;
}
