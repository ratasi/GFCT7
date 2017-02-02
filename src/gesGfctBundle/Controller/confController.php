<?php
namespace gesGfctBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gesGfctBundle\Entity\conf;
use gesGfctBundle\Form\confType;
use Symfony\Component\httpFoundation\Request;

class confController extends Controller
{
    public function allAction()
    {
        $repository = $this->getDoctrine()->getRepository('gesGfctBundle:conf');
        $config = $repository->findAll();
        return $this->render('gesGfctBundle:conf:config.html.twig',array('conf'=>$conf));
    }

    public function newConfAction(Request $request)
    {
        $config = new conf();
        $form= $this->createForm(confType::class,$config);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
          //
          //
          $config=$form->getData();
          //
          //
          $em=$this->getDoctrine()->getManager();
          $em->persist($config);
          $em->flush();
          return $this->redirectToRoute('exito_configuracion',array("status"=>"ok"));
      }
    	return $this->render('gesGfctBundle:conf:newConf.html.twig',array("form"=>$form->createView() ));
    }
    public function msgExitoAction()
    {
        $repository = $this->getDoctrine()->getRepository('gesGfctBundle:all');
        $config = $repository->findAll();
        return $this->render('gesGfctBundle:conf:config.html.twig',array('config'=>$config));
    }
}
