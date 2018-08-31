<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

use AppBundle\Form\GalleryUpload;
use AppBundle\Entity\Gallery;

class DashboardController extends Controller
{
    protected $container; // <- Add this
    public function __construct(ContainerInterface $container) // <- Add this
    {
        $this->container = $container;
    }

    /**
    * @Route("/dashboard/clear", name="adyax_cache_clear")
    */
      public function cacheClearAction(Request $request) 
      {
        $input = new \Symfony\Component\Console\Input\ArgvInput(array('console','cache:clear'));
        $application = new \Symfony\Bundle\FrameworkBundle\Console\Application($this->get('kernel'));
        $application->run($input);
      }




	/**
     * @Route("/dashboard", name="dashboardpage")
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        $gallery = new Gallery();
        $entityManager = $this->getDoctrine()->getManager();

        $form = $this->createForm(GalleryUpload::class,  $gallery);

        $form->handleRequest($request);

        if($form->isValid() && $form->isSubmitted()){
            // echo "<pre>";
            //print_r($input->getImageFile());echo "</pre>";exit;
            $file =  $form->get('imageName')->getData();
            if(($file->getClientSize() > 4388608))
                {
                 $request->getSession()->getFlashBag()->add('img_fail', array(
                    'content' => "Invalid Profile Image size. Minimum required dimensions are minimum 300x300 upto 4MB size",
                    'type' => 'failure'
                    ));
                 return new JsonResponse(array("status" => "error"));
                } 

            $fileName = md5(uniqid()).'.'. $file->guessExtension();
            $gallery->setImageName($fileName);
            $currentdate = new \DateTime('now');
            $gallery->setUpdatedAt($currentdate);
            $file->move($this->container->getParameter('gallery_image_dir'), $fileName); 
            // $gallery->setImageFile($file);
            
            // echo "<pre>"; print_r($gallery); echo "</pre>";exit;
            $entityManager->persist($gallery);
            $entityManager->flush();
             die('done buddy');
        }

        return $this->render('FOSUserBundle:Security:index.html.twig',array(
            'form' => $form->createView()));
    }

}
