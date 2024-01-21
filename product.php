<?php
class Product
{
    private $name;
    private $price;
    private $content;

    function __construct($name, $price, $content)
    {
        $this->name = $name;
        $this->price = $price;
        $this->content = $content;
    }

    function getName()
    {
        return $this->name;
    }
    function getPrice()
    {
        return $this->price;
    }
    function getContent()
    {
        return $this->content;
    }
}