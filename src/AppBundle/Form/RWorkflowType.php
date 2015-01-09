<?php
// src/AppBundle/Form/RWorkflow.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use AppBundle\Entity\RPublishingRuleRepository as RPublishingRuleRepository   ;
class RworkflowType extends AbstractType
{
	
	
	private $nbChoiceThreads = 40 ;
	private $id ;
	
	
	
	public function __construct($id = null){
		$this->id = $id ;
	}
	
	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		// inspired by http://openclassrooms.com/forum/sujet/symfony2-entity-field-query-builder-90658
		$configChoicesThread = $this->makeChoicesThreadList() ;
		
		$id = $this->id ;
		$builder->add('name', 'text')
		 		->add('description', 'text')
		 		->add('stub', 'text')
		 		->add('publishing','entity', array('class'=>'AppBundle:RPublishing','property'=>'name'))
		 		->add('auto', 'checkbox', array('required' => false))
		 		->add('isConcat', 'checkbox', array('required' => false))
		 		->add('ruleType','entity',array('class'=>'AppBundle:RPublishingRule', 
		 				'property' => 'ruleType.ruleTypeDescription',
		 				'multiple'=>true, 
		 				'required' => false,
		 			
		 				'query_builder' => function(RPublishingRuleRepository $er) use ($id) {
		 				 					 return $er->getRuleTypeByWorkflowId($id);
                                           }
		 		))
		 		->add('farmId' ,'choice',$configChoicesThread);

	}
	
	
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'AppBundle\Entity\RPublishingWorkflow',
		));
	}
	
	public function getName()
	{
		return 'rworkflow';
	}
	// creates a default list of values for  threads
	private function makeChoicesThreadList(){
		$choices =array() ;
		for($a=1;$a<=$this->nbChoiceThreads;$a++){
			$choices[$a]='thread '.$a	;
		}
		return array ('choices' => $choices ) ;
	}
	
	
}