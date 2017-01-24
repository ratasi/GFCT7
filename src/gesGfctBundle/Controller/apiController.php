<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gesGfctBundle\Form\empresaType;
use gesGfctBundle\Entity\empresa;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class apiController extends Controller
{
  private function serializeEmpresa(Empresa $empresa)
{
  return array(
      'id : ' => $empresa->getId(),
      'nombre : ' => $empresa->getNombre(),
      'direccion : ' => $empresa->getDireccion(),
      ' Código Postal : ' => $empresa->getCp(),
      'Teléfono 1 : ' => $empresa->getTelefono1(),
      'Teléfono 2 : ' => $empresa->getTelefono2(),
      'Fecha de creación : ' => $empresa->getFechaCreacion(),
  );
}
public function empresasAction()
{
    $repository = $this->getDoctrine()->getRepository('gesGfctBundle:empresa');
    $empresas = $repository->findAll();


    //var_dump($empresas);
    $data = array('empresas' => array());
    foreach ($empresas as $empresa) {
        $data['empresas'][] = $this->serializeEmpresa($empresa);
    }
    $response = new JsonResponse($data, 400);
    return $response;
    //return $this->json($empresas);*/
}


}
?>
