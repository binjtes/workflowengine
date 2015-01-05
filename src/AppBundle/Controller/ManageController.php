<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response ;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\RPublishingWorkflow ;
use Braincrafted\Bundle\BootstrapBundle\Session\FlashMessage ;
use AppBundle\Form\RworkflowType ;

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
     * @Route("/manage/update", name="manage_update")
     */   
    public function updateAction(Request $request){
    	$workflow = new RPublishingWorkflow() ; 
    	
    	   	
    	$form = $this->createForm(new RworkflowType());
    	
    	$form->handleRequest($request); 
    	// once updated , redirection to index manage page (listing) 
    	if ($form->isValid()) {
    		$em = $this->getDoctrine()->getManager();
    		$em->flush();
    		
			$this->get('session')->getFlashBag()->add('notice', 'Vos changements ont été sauvegardés!');
    		
    		
    	}else{
    		$msg = "Something wrong happened" ;
    	}
    	
    	return $this->redirect($this->generateUrl('manage', array('msg'=>$msg)));
    }
    /**
     * @Route("/manage/delete", name="manage_delete")
     */
    public function deleteAction(){
    
    
    }
    
}
