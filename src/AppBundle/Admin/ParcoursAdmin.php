<?php
namespace AppBundle\Admin;

use AppBundle\Entity\Parcours;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ParcoursAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', ['class' => 'col-md-9'])
            ->add('name', 'text')
            ->add('ecole', 'text')
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
            ->add('ecole')
            ->add('texte')
            ->add('anneedebut')
            ->add('anneefin')
        ;
    }

    public function toString($object)
    {
        return $object instanceof Parcours
            ? $object->getName()
            : 'Parcours'; // shown in the breadcrumb on the create view
    }
}