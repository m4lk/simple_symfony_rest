<?php

namespace AppBundle\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Controller\Api\MockedJSON;

class RestController extends Controller {
  /**
   * @Route("/api/inscricao")
   * @Method("POST")
   */
  public function getInscricao(Request $request) {
    //$body = $request->get('cpf');

    $resp = MockedJSON::result();
    $resp_array = json_decode($resp);
    
    $shuffle = array();
    $shuffle[] = $resp_array[rand(50, 99)];
    $shuffle[] = $resp_array[rand(10, 50)];
    $shuffle[] = $resp_array[rand(0, 10)];
    
    $final_result = json_encode($shuffle);
    
    return new Response($final_result);
  }
}