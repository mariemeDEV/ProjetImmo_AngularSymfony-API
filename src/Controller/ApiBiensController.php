<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as FOSRest;
use Symfony\Component\Translation\DataCollectorTranslator;

use App\Entity\Bien;


class ApiBiensController extends Controller
{
    /**
     * @Route("/liste", name="listeBiens")
     * @FOSRest\Get("/liste")
     * @return array
     */
     public function listeAction( Request $request)
    {
        $bienManager = $this->getDoctrine()->getManager();

//Seuls les biens non-résèrvés figurent sur le catalogue(etatbien=>0).
        $biens = $bienManager->getRepository(Bien::class)->findBy(['etatbien'=>0]);

//Contenu de biens en cas de recherche
    if($request->isMethod("POST")){
        $biens = $bienManager->getRepository(Bien::class)->findBy(['etatbien'=>1]);
    }
   /* if ($chercherReq->ismethod('POST')) {
        if (isset($_POST['cherche']) && $_POST['localiteBien']!="localités" && $_POST['typeBien']!="Types") {
            $biens = $biensRep->chercherBien($_POST['localiteBien'], $_POST['typeBien'], $_POST['price']);
        }
    return $this->render('KeurGuiImmoBundle:rechercheBiens:catalogue.html.twig',
        array("Localites" => $localites, "Types" => $typesBien, "Biens" => $biens));
    }*/

//Critéres de recherche avec la methode chercherBien du repository BienRepository
        if(empty($biens))
        {
            $response=array( 
                'code'=>1,
                'message'=>'post not found',
                'errors'=>null,
                'result'=>null
            );
        return new JsonResponse($response , Response::HTTP_NOT_FOUND);
        }
        $bienData = $this->get('jms_serializer')->serialize($biens,'json');
        /*foreach($biens as $b){
            $data = $this->get('jms_serializer')->serialize($b->getIdtypebien(),'json') ; 
            $data2 = $this->get('jms_serializer')->serialize($b-> getIdlocalite());
       };*/
        $response=array(
           'code'=>0,
           'message'=>'succes',
           'errors'=>null,
           'result'=>json_decode($bienData)
       );
       return new JsonResponse($response , 200);
    }


    /**
    *@Route("/add", name="ajoutBiens")
    * @FOSRest\GET("/add")
    * @return array
    */
   /* public function addAction(Request $request)
    {
       $data=$request->getContent();
       $post=$this->get('jms_serializer')->deserialize($data,'Entity\Reservation','json');
       if(!empty($response))
       {
           return new JsonResponse($response, Response::HTTP_BAD_REQUEST);
       }

       $em=$this->getDoctrine()->getManager();
       $em->persist($post);
       $em->flush();

       $response= array (
       'code'=>0,
       'message'=>'Post created',
       'result'=>null
       );

       return new JsonResponse($response, Response::HTTP_CREATED);
    }   */  
}
