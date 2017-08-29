<?php

namespace Acme\StoreBundle\Controller;

//
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Security\Core\User\UserInterface;
use Acme\StoreBundle\Document\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class LoginController extends Controller {

    public function loginAction(Request $request) {
        $data = json_decode(file_get_contents('php://input'), true);
        $userName = $data['name']['username'];
        $password = $data['name']['password'];
        $user = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:User')
                ->findOneBy(['username' => $userName]);
        if (!$user) {
            throw $this->createNotFoundException();
        }
        $isValid = $this->get('security.password_encoder')
                ->isPasswordValid($user, $password);
        if (!$isValid) {
            throw new BadCredentialsException();
        }

        $response = new Response(Response::HTTP_OK);

        return $this->setBaseHeaders($response);
    }

    private function setBaseHeaders(Response $response) {
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}
