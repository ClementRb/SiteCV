<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $AllParcours = $em->getRepository('AppBundle:Parcours')
            ->findAll();
        $AllExperience = $em->getRepository('AppBundle:Experience')
            ->findAll();

        return $this->render('AppBundle:default:index.html.twig',[
            'AllParcours' => $AllParcours,
            'AllExperience' => $AllExperience
        ]);
    }



}
