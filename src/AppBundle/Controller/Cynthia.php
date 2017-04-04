<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class Cynthia
{
    /**
     * @Route("/Cynthia")
     */
    public function showAction(){
        return new Response('<html>
    <head>
        <title>Cynthia Teresa Pao Chao</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Pacifico|Cinzel|Raleway" rel="stylesheet">
        <style>
            @-ms-viewport{ width: device-width; }
            img {
                max-width:100%;
                max-height:100%;
                position:relative;
                top:0; left:0; right:0; bottom:0;
                margin:auto;
            }
        </style>
    </head>
    <body> 
        <center>  
        <img src="http://img.photobucket.com/albums/v707/Candycaneangel44/tumblr_ni6x4uMclc1u182sno3_1280_zpsohpvaggn.png">   
        <div id="header">
            <p style="font-family: Pacifico">
                <font size = "10">
                    About
                </font>
            </p>
        </div>
        <h4 class="name">
            <p style="font-family:Cinzel">
                <font size = "4">
                    Cynthia Teresa Pao Chao ♡
                </font>
            </p>
        </h4>
        <font face="garamond">
            <p> March 27, 1994 (22 years old) </p>
            <p> Chinese/Cambodian/Vietnamese</p>
            <p> Studying Computer Science @ SFSU</p>
        </font>
        </center>
    </body>
</html>');
    }
}
