<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
use AppBundle\Entity\RPublishingWorkflow ;
use Braincrafted\Bundle\BootstrapBundle\Session\FlashMessage ;
class ManageController extends Controller
{
	

	
    /**
     * @Route("/manage", name="manage")
     */
    public function indexAction()
    {
    	
    	/* XXX see how this works
    	$flash = $this->get('braincrafted_bootstrap.flash');
    	$flash->alert('This is an alert flash message.');
    	*/
    	$rpublishingworkflows = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->findAll(); 
        return $this->render('AppBundle:Manage:index.html.twig', array('rpublishingworkflows'=>$rpublishingworkflows));
    }
    

    /**
     * @Route("/manage/edit/{wokflowid}", name="manage_edit")
     */
    public function editAction($workflowid =324  ){
    	
    	$editworkflow = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->find($workflowid);
    	
    	
    	$rpublishingworkflows = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->findAll();
    	return $this->render('AppBundle:Manage:edit.html.twig', array('editworkflow'=>$editworkflow ,'rpublishingworkflows'=>$rpublishingworkflows));
    }
    	
    
}
