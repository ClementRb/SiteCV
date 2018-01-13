<?php
namespace AppBundle\Admin;

use AppBundle\Entity\Experience;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ExperienceAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', ['class' => 'col-md-9'])
            ->add('name', 'text')
            ->add('entreprise', 'text')
            ->add('texte', 'textarea')
            ->add('anneedebut', 'integer')
            ->add('anneefin', 'integer')
            ->end()

        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('entreprise')
            ->add('texte')
            ->add('anneedebut')
            ->add('anneefin')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Experience
            ? $object->getName()
            : 'Experience'; // shown in the breadcrumb on the create view
    }
}