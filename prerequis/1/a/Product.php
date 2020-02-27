<?php


class Product
{
    // properties
    private $name;
    private $price;

    // methods
    // contruct
    public function __construct($name, $price=0)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function __toString()
    {
        return $this->getName();
    }

    // getters / setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $name = strtoupper($name);
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

$p = new Product("toto");
$p->setPrice(10);
$p->setName("toto");
echo $p;
