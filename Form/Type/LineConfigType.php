<?php
namespace CanalTP\MttBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

class LineConfigType extends AbstractType
{
    private $layouts;

    public function __construct($layouts)
    {
        $this->layouts = $layouts;
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'layout',
            'layout',
            array(
                'choices' => $this->layouts,
                'layouts' => $this->layouts,
                'empty_value' => 'global.please_choose'
            )
        );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CanalTP\MttBundle\Entity\LineConfig'
        ));
    }

    public function getName()
    {
        return 'line_config';
    }
}