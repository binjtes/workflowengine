<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
class TranscodersController extends Controller
{
    /**
     * @Route("/transcoders", name="transcoders")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Transcoders:index.html.twig', array());
    }
}
