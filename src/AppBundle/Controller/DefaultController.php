<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        
        return $this->render('default/home.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Route("/facilities", name="facilitiespage")
     */
    public function facilitiesAction(Request $request)
    {
        
        return $this->render('default/facilities.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
     /**
     * @Route("/packages", name="packagespage")
     */
    public function packagesAction(Request $request)
    {
        
        return $this->render('default/packages.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
      /**
     * @Route("/contact_us", name="contact_uspage")
     */
    public function contactAction(Request $request)
    {
        
        return $this->render('default/contact_us.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
      /**
     * @Route("/about", name="aboutpage")
     */
    public function aboutAction(Request $request)
    {
        
        return $this->render('default/about_us.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

     /**
     * @Route("/gallery", name="gallerypage")
     */
    public function galleryAction(Request $request)
    {
        
        return $this->render('default/gallery.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
