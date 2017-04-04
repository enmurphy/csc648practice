<?php
/**
 * Created by PhpStorm.
 * User: Ericka
 * Date: 2/23/2017
 * Time: 6:26 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Phin
{
    /**
     * @Route("/Phin")
     */
    public function showAction(){
        return new Response('<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About me</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
            <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #112;  
            }
            li {
                float: left;
            }
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            li a:hover {
                background-color: #111;
            }
            h1 {
                font-size: 45px;
		color: white;
                text-align: center;
            }
            h2 {
                font-size: 30px;
		color: white;
                text-align: center;
            }
            p {
                font-size: 20px;
		color: white;
                text-align: center;
            }
            p.thick {
                font-weight: bold;
		color: white;
                text-align: center;
            }
            a {
                font-size: 25px;
		color: white;
                text-align: center;
            }
        </style>
    
  </head>
      <body background="https://i.ytimg.com/vi/aU3SzVW_Z9o/maxresdefault.jpg">
 
    <!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        
  </body>

<div class="container">
  
  <div class="text-center">
    <h1>Phinehas Sridhar</h1>
    <p>Hi! My name\'s Phinehas, but most of my friends just call me Phin (Finn). </p>
	   <p> I am currently senior student at SFSU pursuing a degree in Computer Science, hoping to graduate after Summer.</p>
    <p>My current plan for my future is first to graduate, potentially get some work expierence and then go after my masters.</p>
	  <p>Some of my passions are Astrophotography, Astrophysics, Quantum Mechanics and everything in between as well as gaming.<p>
	  <p>But... I hope to one day be able to use my coding skills to work with Astrophysics or gaming.  </p>
  </div>
  
</div><!-- /.container -->
</html>');
    }
}