<?php

class Sale
{

    private int $id;
    private int $id_product;
    private int $id_user;
    private int $quantity_sold;
    private float $price;

    /**
     * Get the value of id
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of id_product
     * @return int
     */
    public function getId_product(): int
    {
        return $this->id_product;
    }

    /**
     * Set the value of id_product
     * @param int $id_product
     *
     * @return void
     */
    public function setId_product(int $id_product): void
    {
        $this->id_product = $id_product;
    }

    /**
     * Get the value of id_user
     * @return int
     */
    public function getId_user(): int
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     * @param int $id_user
     * @return void
     */
    public function setId_user(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * Get the value of quantity_sold
     * @return int
     */
    public function getQuantity_sold(): int
    {
        return $this->quantity_sold;
    }

    /**
     * Set the value of quantity_sold
     * @param int $quantity_sold
     * @return  void
     */
    public function setQuantity_sold(int $quantity_sold): void
    {
        $this->quantity_sold = $quantity_sold;
    }

    /**
     * Get the value of price
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Set the value of price
     * @param float $price
     *
     * @return  void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}