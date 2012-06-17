<?php

namespace Notan\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class MainController extends Controller {

	public function indexAction() {
		return $this->render('NotanMainBundle:Main:index.html.twig');
	}
}
