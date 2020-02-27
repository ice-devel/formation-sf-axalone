<?php


class Order
{
    private $createdAt;
    private $products;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     * @return Order
     */
    public function setCreatedAt($createdAt): Order
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return array
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param array $products
     * @return Order
     */
    public function setProducts($products): Order
    {
        $this->products = $products;

        return $this;
    }
}

$order = new Order();
$order->setCreatedAt(new DateTime());