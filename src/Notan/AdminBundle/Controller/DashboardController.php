<?php

namespace Notan\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DashBoardController extends Controller {

	public function indexAction() {
		return $this->render('NotanAdminBundle:Dashboard:index.html.twig');
	}
}
