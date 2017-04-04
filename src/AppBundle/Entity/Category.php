<?php
// src/AppBundle/Entity/Category.php

// ...
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

class Category
{
    // ...

    /**
    * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
    */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
}