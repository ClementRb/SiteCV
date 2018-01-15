<?php
// src/AppBundle/Admin/BlogPostAdmin.php
namespace AppBundle\Admin;

use AppBundle\Entity\Competence;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CompetenceAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', ['class' => 'col-md-9'])
            ->add('competence', 'text')
            ->add('nombre', 'integer')
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('competence')
            ->add('nombre')

        ;
    }

    public function toString($object)
    {
        return $object instanceof Competence
            ? $object->getCompetence()
            : 'Competence'; // shown in the breadcrumb on the create view
    }



}