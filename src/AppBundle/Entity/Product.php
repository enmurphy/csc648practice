<?php
// src/AppBundle/Entity/Product.php

// ...
use Doctrine\ORM\Mapping as ORM;
class Product
{
    // ...

    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
    * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
    */
    private $category;
}
