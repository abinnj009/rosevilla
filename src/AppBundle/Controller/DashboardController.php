<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{

	/**
     * @Route("/dashboard", name="dashboardpage")
     * @param array $data
     *
     * @return Response
     */
    public function indexAction(Request $request, array $data)
    {
        
        return $this->render('FOSUserBundle:Security:index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ], $data);
    }
}
