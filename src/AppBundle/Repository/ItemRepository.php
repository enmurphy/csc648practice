<?php
/**
 * Created by PhpStorm.
 * User: aura
 * Date: 3/30/2017
 * Time: 4:19 AM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Item;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;

class ItemRepository extends EntityRepository
{
    /**
     * @return Item[]
     */
    public function search ($text)
    {
        return $this->createQueryBuilder('item')
            ->andWhere('item.name LIKE :name')
            ->setParameter('name', '%' .$text. '%')
            ->getQuery()
            ->execute();
    }
    public function findOneByIdJoinedToCategory($productId)
    {
        $query = $this->getEntityManager()
            ->createQuery(
                'SELECT p, c FROM AppBundle:Product p
            JOIN p.category c
            WHERE p.id = :id'
            )->setParameter('id', $productId);

        try {
            return $query->getSingleResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
    }
}