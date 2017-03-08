<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller{
	 /**
     *  @Route("/about", name="About")
     */
	public function renderAction(){
		// Step 1
		return new Response(
			'<html><body>test test test</body></html>'
		);

		// $number = mt_rand(0,100);

		// // Step 2 
		// return $this->render('about/number.html.twig', array(
		// 	'number' => $number
		// ));

	}
	
}