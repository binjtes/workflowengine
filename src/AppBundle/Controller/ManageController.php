<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\RPublishingWorkflow ;
use AppBundle\Entity\RPublishingRule ;
use Braincrafted\Bundle\BootstrapBundle\Session\FlashMessage ;
use AppBundle\Form\RworkflowType ;
use AppBundle\Form\RRuleType ;

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
    	
    	//add an empty form for creating workflow 
    	$workflow = new RPublishingWorkflow();
    	$form = $this->createForm(new RworkflowType());
    	 
    	
    	//$form = $this->createForm(new RworkflowType(),$workflow);
    	
    	$form->handleRequest($this->getRequest());
    	// once updated , redirection to index manage page (listing)
    	if ($form->isValid()) {
    		$em = $this->getDoctrine()->getManager();
    		$workflow = $form->getData();
    		$em->persist($workflow);
    		$em->flush();
    	
    		$msg = "yep ,The workflow has been updated" ;
    	
    	}
    
    	
    	$rpublishingworkflows = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->findAll(); 
        return $this->render('AppBundle:Manage:index.html.twig', array('form' => $form->createView(), 'rpublishingworkflows'=>$rpublishingworkflows));
    }
    

    /**
     * @Route("/manage/edit/{workflowid}", name="manage_edit")
     */
    public function editAction($workflowid ){
    	
    	$workflow = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->find($workflowid);
//     	$rule = new RPublishingRule() ;
//     	$form =$this->createForm(new RRuleType(), $rule);
    	
//     	return $this->render('AppBundle:Manage:test.html.twig', array('form' => $form->createView()));
    	
    	$form = $this->createForm(new RworkflowType(), $workflow);
    	
    	$form->handleRequest($this->getRequest());
    	// once updated , redirection to index manage page (listing)
    	if ($form->isValid()) {
    		$em = $this->getDoctrine()->getManager();
    		$workflow = $form->getData();
    		$em->persist($workflow);
    		$em->flush();
    		

    		$this->get('session')->getFlashBag()->add('notice', 'Le nouveau workflow a été créé');
    		
    		return $this->redirect( $this->generateUrl('manage'));
    	}
    	
    	$rpublishingworkflows = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->findAll();
    	return $this->render('AppBundle:Manage:edit.html.twig', array('form' => $form->createView(),'rpublishingworkflows'=>$rpublishingworkflows));
    }
  
    /**
     * @Route("/manage/delete/{workflowid}", name="manage_delete")
     */
    public function deleteAction($workflowid){
    	$workflow = $this->getDoctrine()->getRepository('AppBundle:RPublishingWorkflow')->find($workflowid);
    	
    	if (!$workflow) {
    		throw $this->createNotFoundException('No workflow found for id '.$workflowid);
    	}
    	$em->remove($workflow);
    	$em->flush();
    	$this->get('session')->getFlashBag()->add('notice', 'Le workflow  a été suprimé');
    	return $this->redirect( $this->generateUrl('manage'));
    
    }
    
}
