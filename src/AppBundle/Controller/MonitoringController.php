<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
class MonitoringController extends Controller
{
    /**
     * @Route("/monitoring", name="monitoring")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Monitoring:index.html.twig', array());
    }
}
