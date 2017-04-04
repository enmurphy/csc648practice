<?php
/**
 * Created by PhpStorm.
 * User: aura
 * Date: 3/20/2017
 * Time: 5:31 AM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FillDatabase extends Controller
{
    /**
     * @Route("/newItem")
     */
    public function newItem()
    {
        $sofa = new Item();
        $sofa->setName('sofa');
        $sofa->setCategory('furniture');
        $sofa->setDescription('barely used');
        $sofa->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/sofa.JPG');
        $sofa->setPrice('20');

        $chair = new Item();
        $chair->setName('chair');
        $chair->setCategory('furniture');
        $chair->setDescription('you can sit on it');
        $chair->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/Chair.JPG');
        $chair->setPrice('30');

        $bed = new Item();
        $bed->setName('Inflatable bed');
        $bed->setCategory('furniture');
        $bed->setDescription('you can sleep on it');
        $bed->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/Bed.JPG');
        $bed->setPrice('25');

        $smallsofa = new Item();
        $smallsofa->setName('Small sofa');
        $smallsofa->setCategory('furniture');
        $smallsofa->setDescription('its small');
        $smallsofa->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/Smallsofa.JPG');
        $smallsofa->setPrice('45');

        $amiibo = new Item();
        $amiibo->setName('Samus Amiibo');
        $amiibo->setCategory('electronic');
        $amiibo->setDescription('unopened');
        $amiibo->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/Amibo.JPG');
        $amiibo->setPrice('500');

        $tv = new Item();
        $tv->setName('flat screen tv');
        $tv->setDescription('55 inches');
        $tv->setCategory('electronic');
        $tv->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/TV.JPG');
        $tv->setPrice('100');

        $ps4 = new Item();
        $ps4->setName('Playstation 4');
        $ps4->setDescription('black');
        $ps4->setCategory('electronic');
        $ps4->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/PS4.JPG');
        $ps4->setPrice('30');

        $guitar = new Item();
        $guitar->setName('Electric Guitar');
        $guitar->setDescription('its electric');
        $guitar->setCategory('electronic');
        $guitar->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/Guitar.JPG');
        $guitar->setPrice('30');

        $book = new Item();
        $book->setName('Java book');
        $book->setDescription('Data structures and abstractions with java');
        $book->setCategory('book');
        $book->setImage('http://sfsuse.com/~sp17g01/sp17g01/web/images/Book.JPG');
        $book->setPrice('30');

        $em = $this->getDoctrine()->getManager();
        $em->persist($sofa);
        $em->persist($amiibo);
        $em->persist($smallsofa);
        $em->persist($bed);
        $em->persist($chair);
        $em->persist($tv);
        $em->persist($ps4);
        $em->persist($guitar);
        $em->persist($book);

        $em->flush();
        return new Response('item created');
    }

}
