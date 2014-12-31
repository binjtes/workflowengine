<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
class SubmittingController extends Controller
{
    /**
     * @Route("/submitting", name="submitting")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Submitting:index.html.twig', array());
    }
}
