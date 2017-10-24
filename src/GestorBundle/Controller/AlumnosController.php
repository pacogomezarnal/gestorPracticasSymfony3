<?php

namespace GestorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GestorBundle\Entity\Alumno;

class AlumnosController extends Controller
{
    /**
     * @Route("/alumnos")
     */
    public function indexAction()
    {
        //Preparar el repositorio de interaccion contra la tabla Alumno
        $repository = $this->getDoctrine()->getRepository(Alumno::class);
        $alumnos = $repository->findAll();
        return $this->render('GestorBundle:Alumno:index.html.twig',array('alumnos'=>$alumnos));
    }
}
