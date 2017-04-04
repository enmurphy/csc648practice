<?php
/**
 * Created by PhpStorm.
 * User: Danny Gonzalez
 * Date: 3/20/2017
 * Time: 7:36 PM
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="search")
 */
class search
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @ORM\Column(type="string")
     */
    protected  $searchText;

    /**
     * @return mixed
     */
    public function getSearchText()
    {
        return $this->searchText;
    }

    /**
     * @param mixed $searchText
     */
    public function setSearchText($searchText)
    {
        $this->searchText = $searchText;
    }

}