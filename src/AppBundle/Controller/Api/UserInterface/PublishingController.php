<?php

namespace AppBundle\Controller\Api\UserInterface;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
class PublishingController extends Controller
{
    /**
     * @Route("/api/get_publishings", name="categories")
     */
    public function getPublishingsAction()
    {
    	
        return $this->render('AppBundle:Admin:index.html.twig', array());
    }
    /**
     * @Route("/api/categories", name="categories")
     */
    public function getPublishingAction(Component $component)
    {
    	 
    	 
    	return $this->render('AppBundle:Admin:index.html.twig', array());
    }
    
}
