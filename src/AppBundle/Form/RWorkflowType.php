<?php
// src/AppBundle/Form/RRuleType.php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RRuleType extends AbstractType
{
	

	
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		
		$builder->add('ruleOrder', 'text')
		 		->add('ruleType','entity',array('class'=>'AppBundle:RPublishingRuleType','property'=>'name', 'multiple'=>true, 'required' => false));

	}


	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
	{
		$resolver->setDefaults(array(
				'data_class' => 'AppBundle\Entity\RPublishingRule',
		));
	}
	
	public function getName()
	{
		return 'rrule';
	}

	
	
}