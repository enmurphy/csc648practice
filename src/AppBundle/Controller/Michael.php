<?php
/**
 * Created by PhpStorm.
 * User: Ericka
 * Date: 2/23/2017
 * Time: 4:18 PM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Michael
{
    /**
     * @Route("/Michael")
     */
    public function showAction(){
        return new Response('<html>

<head>
	<meta charset="UTF-8">

	<title>Portfolio | Michael Menlikalew</title>

	<!--[if !IE]><!-->
		<link rel="stylesheet" href="/css/main.css" />
	<!--<![endif]-->

	<!--[if gte IE 7]>
		<link rel="stylesheet" type="text/css" href="/css/main.css" media="screen, projection" />
	<![endif]-->

	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="http://universal-ie6-css.googlecode.com/files/ie6.0.3.css" media="screen, projection" />
	<![endif]-->
</head>

<body id="home">

	<header>
		<a id="logo" href="index.html">Home</a>

		<nav>
			<?php include("inc/main-menu.php"); ?>
		</nav>
	</header>

	<section class="container">

		<article>
			<h1>About Me</h1>

			<p>My name is Micheal and I am a CS student at SFSU. This about me page is for 648 Software Engineering class</p>

		</article>

		<article>
			<!-- Additional Article -->
		</article>

	</section>

	<footer class="container">
		<h4>CSC 648 PROJECTt TEAM 1</h4>
		<ul class="col">
			<li><a href="http://sfsuse.com/~sp17g01/index.html/Ericka">Ericka(Team Lead)</a></li>
			<li><a href="http://sfsuse.com/~sp17g01/index.html/Aura">Aura(CTO)</a></li>
		</ul>
		<ul class="col">
			<li><a href="http://sfsuse.com/~sp17g01/index.html/Cynthia">Cynthia</a></li>
			<li><a href="http://sfsuse.com/~sp17g01/index.html/Michael">Michael Menlikalew</a></li>
			<li><a href="http://sfsuse.com/~sp17g01/index.html/danny">Danny</a></li>
                        <li><a href="http://sfsuse.com/~sp17g01/index.html/Phin">Phin</a></li>
                        <li><a href="http://sfsuse.com/~sp17g01/index.html/Jimmy">Jimmy</a></li>
		</ul>
	</footer>

	<script src=\'//ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2\'></script>
	<script src=\'/js/main.js\'></script>

	<!-- Google Analytics Code -->
	<?php include_once("inc/analytics.php"); ?>

</body>

</html>');
    }
}