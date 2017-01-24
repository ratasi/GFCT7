<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gesGfctBundle\Form\profesoresType;
use gesGfctBundle\Entity\Profesores;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\JsonResponse;


class profesoresController extends Controller
{
    public function allAction()
    {
        $respository = $this->getDoctrine()->getRepository('gesGfctBundle:Profesores');
        $profe = $respository->findAll();
        return $this->render('gesGfctBundle:Profesores:all.html.twig',array("NumProfes"=>$profe));

    }

    public function nuevoAction(Request $request)
    {
    $nuevoProfe= new Profesor();
    $form=$this->createForm(profesoresType::class,$nuevoProfe);

    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
      $nuevoProfe=$form->getData();

      $nuevaEm=$this->getDoctrine()->getManager();
      $nuevaEm->persist($nuevoProfe);
      $nuevaEm->flush();

      return $this->redirectToRoute('exito_empresa');
    }

    return $this->render('gesGfctBundle:Profesores:nuevo.html.twig',array("formulario"=>$form->createView() ));

    }
    public function msgExitoAction()
    {
        return $this->render('gesGfctBundle:Empresa:msgExito.html.twig');

    }


    /***************** PARA EL API ******************/
    private function serializeEmpresa(Profesores $profesores)
  {
    return array(
        'Nombre : ' => $profesores->getNombre(),
        'nombre : ' => $profesores->getApellidos(),
        'Departamento : ' => $profesores->getDepartamento(),

    );
  }
  public function profesAction()
  {
      $repository = $this->getDoctrine()->getRepository('gesGfctBundle:profesores');
      $profesores = $repository->findAll();


      //var_dump($empresas);
      $data = array('profesores' => array());
      foreach ($profesores as $profe) {
          $data['profesores'][] = $this->serializeEmpresa($profe);
      }
      $response = new JsonResponse($data, 400);
      return $response;
      //return $this->json($empresas);*/
  }

}
