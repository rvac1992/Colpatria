<?php

namespace colpatria\folmularioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
///////////////// entidad  /////////////////
use colpatria\folmularioBundle\Entity\Formulario;
use colpatria\folmularioBundle\Entity\municipio;
///////////////// end entidad /////////////////
use colpatria\folmularioBundle\Form\FormularioType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('colpatriafolmularioBundle:Default:index.html.twig');
    }

        public function formularioAction()
    {
    	$municipios=array (
    			array("nombre"=>"Andres","id"=>1),
    			array("nombre"=>"yotas","id"=>2)
    		);



        return $this->render('colpatriafolmularioBundle:Default:formulario.html.twig',compact("municipios"));
    }

    //regimstrar un nuevo registro del formulario
    public function RegistroFormularioAction(Request $request)
    {
       
        $entity=new Formulario();
        $action = $this->createForm(new FormularioType(), $entity, array(
            'action' => $this->generateUrl('colpatriafolmulario_registroformulario'),
            'method' => 'POST',
        ));
         //$action->add('submit', 'submit', array('label' => 'Crear'));



        $form=$action;
        $form->handleRequest($request);
        if($form->isValid()){            
            $em=$this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('colpatriafolmulario_homepage'));
        }

        //enviar los departamentos registrados 
        $departamentos=$this->getDoctrine()->getRepository('colpatriafolmularioBundle:departamento')->findAll();



        return $this->render('colpatriafolmularioBundle:Default:formulario.html.twig',array('form' =>$form->createView(),'entity'=>$entity,'departamentos'=>$departamentos));

    }

////////////////////////////////////////////////////////////////////////////////////////////




/*    public function NuevoRegistroFormularioAction(Request $request)
    {

    	//insertar en la abase de datos
    	$formulario = new Formulario(); 
    	$formulario->setNit(123123);//int
    	$formulario->setPrimerNombre("pnombre");
    	$formulario->setPrimerApellido("papellido");
    	$formulario->setSegundoNombre("snombre");
    	$formulario->setSegundoApellido("sapallido");
    	$formulario->setTelefonoFijo("telefono");
    	$formulario->setTelefonoCelular("telefonaocel");
    	$formulario->setRazonSocial("razonsocial");


    	$formulario->setDepartamento(123123);//int
    	$formulario->setCiudad(123123);//int
    	$formulario->setCedula(123123);//int
 		
    	///////Donctrine 

    	$em=$this->getDoctrine()->getManager();
    	$em->persist($formulario);
    	$em->flush();
    	//end insertar en la abase de datos



    	return $this->render('colpatriafolmularioBundle:Default:formulario.html.twig');
    }*/
    public function NuevoRegistroFormularioAction(Request $request){
        
    }
        //funcion ajax pata comprobar si ya se encuentra registrado el nit.
    public function ComprobarnitAction(){
      $nit =$_POST['nitForm']; 

      // die("uuuwww ".$nit);
      //consultar si existe ese nit 
      //$datos=$this->getDoctrine()->getRepository('colpatriafolmularioBundle:Formulario')->findAll();
      $repository=$this->getDoctrine()->getRepository('colpatriafolmularioBundle:Formulario');
      

      $query=$repository->createQueryBuilder('f')
                        ->where('f.nit =:nit')
                        ->setParameter('nit',$nit)
                        ->getQuery();

        $datos=$query->getResult();
        if($datos){
            $Validacion=true;
        }else{
          $Validacion=false;  
        }



    




       //return $this->redirect($this->generateUrl('colpatriafolmulario_homepage'));
       //$Validacion=true;

       return  new JsonResponse ((array("Validacion"=>$Validacion)));
         
    }

    public function MunicipiosAction(){

        $idDepartamento=$_POST['idDepa'];

        //die("EL Municipio es el de la id ".$idDepartamento);       

        $repository=$this->getDoctrine()->getRepository('colpatriafolmularioBundle:municipio');
        $query=$repository->createQueryBuilder('m')
                        ->where('m.departamentoIddepartamento =:idDe')
                        ->setParameter('idDe',$idDepartamento)
                        ->getQuery();

        $datos=$query->getResult();
        $requestId = array();
        $requestNombre=array();
        foreach ( $datos as $dato){            
            array_push($requestId, $dato->getId());
            array_push($requestNombre, $dato->getNombreMunicipio());            
           
        }
       // echo json_encode($requestId);
       // echo json_encode($requestNombre);

      return   new JsonResponse (array('ids' =>$requestId,'nombes'=>$requestNombre));
    }




}
