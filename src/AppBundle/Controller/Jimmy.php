<?php
/**
 * Created by PhpStorm.
 * User: Ericka
 * Date: 2/23/2017
 * Time: 6:25 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Jimmy
{
    /**
     * @Route("/Jimmy")
     */
    public function showAction(){
        return new Response('<html>
    <head>
        <title>Jimmy Chung</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center>
        <img src = "http://mgtvsportzedge.files.wordpress.com/2014/11/sfsu-gators.png">
        
        <h1> Jimmy Chung</h1>
        <h3>21 years old</h3>
        <h3>Chinese American</h3>
        <h3>Currently, a Senior at SFSU majoring in Computer Science.</h3>
        <a href=\'index.html\'>More about Me</a>
    </center>
    </body>
</html>');
    }
}