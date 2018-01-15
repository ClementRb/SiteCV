<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $AllParcours = $em->createQueryBuilder()
            ->select('p')
            ->from('AppBundle:Parcours', 'p')
            ->addOrderBy('p.anneedebut', 'ASC')
            ->getQuery()
            ->getResult();

        $AllExperience = $em->createQueryBuilder()
            ->select('e')
            ->from('AppBundle:Experience', 'e')
            ->addOrderBy('e.anneedebut', 'ASC')
            ->getQuery()
            ->getResult();

        $BlogAffichage = $em->createQueryBuilder()
            ->select('b')
            ->from('AppBundle:BlogPost', 'b')
            ->addOrderBy('b.date', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult();

        $AllCompetence = $em->getRepository('AppBundle:Competence')
            ->findAll();

        return $this->render('AppBundle:default:index.html.twig',[
            'AllParcours' => $AllParcours,
            'AllExperience' => $AllExperience,
            'BlogAffichage' => $BlogAffichage,
            'AllCompetence' => $AllCompetence
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function Blog() {
        $em = $this->getDoctrine()->getManager();
        $AllBlog = $em->getRepository('AppBundle:BlogPost')
            ->findAll();

        return $this->render('AppBundle:default:blog.html.twig',[
            'AllBlog' => $AllBlog
        ]);
    }

    /**
     * @Route("/blog/{id}", name="show_blog")
     */
    public function showBlog($id) {
        $blog = $this->getDoctrine()->getRepository('AppBundle:BlogPost')->find($id);
        return $this->render('AppBundle:default:oneblog.html.twig', [
            'blog' => $blog
        ]);
    }



}
