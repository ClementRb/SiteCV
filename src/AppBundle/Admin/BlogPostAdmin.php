<?php
// src/AppBundle/Admin/BlogPostAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Entity\BlogPost;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', ['class' => 'col-md-9'])
            ->add('title', 'text')
            ->add('body', 'textarea')
            ->add('auteur', 'text')
            ->add('date', 'datetime')
            ->end()

            ->with('Meta data', ['class' => 'col-md-3'])
            ->add('category', 'sonata_type_model', [
                'class' => 'AppBundle\Entity\Category',
                'property' => 'name',
            ])
            ->end()
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('body')
            ->add('auteur')
            ->add('category.name')
            ->add('date')

        ;
    }

    public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post'; // shown in the breadcrumb on the create view
    }



}