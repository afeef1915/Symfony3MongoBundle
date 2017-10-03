<?php

namespace Acme\StoreBundle\Controller;

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
use JMS\Serializer\SerializationContext;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
class LoginController extends Controller {

//    public function loginAction(Request $request) {
//       // print_r($request->request->all());die;
//        //$data = json_decode(file_get_contents('php://input'), true);
//       // $userName = $data['name']['username'];
//        $userName = $request->request->get('username');
//        //print_r($userName);die;
//        //$password = $data['name']['password'];
//         $password = $request->request->get('password');
//        $user = $this->get('doctrine_mongodb')
//                ->getRepository('AcmeStoreBundle:User')
//                ->findOneBy(['username' => $userName]);
//        if (!$user) {
//            throw $this->createNotFoundException();
//        }
//        $isValid = $this->get('security.password_encoder')
//                ->isPasswordValid($user, $password);
//        if (!$isValid) {
//            throw new BadCredentialsException();
//        }
//
//        $response = new Response(Response::HTTP_OK);
//
//        return $this->setBaseHeaders($response);
//    }
    public function loginAction(Request $request) {

        $data = json_decode(file_get_contents('php://input'), true);
        
        
//        $userName = $request->request->get('username');
//        $password = $request->request->get('password');

        $userName = $data['username'];
        $password = $data['password'];
        
       if(is_null($userName) || is_null($password)) {
            return new Response(
              'Please verify all your inputs.',
              Response::HTTP_UNAUTHORIZED,
              array('Content-type' => 'application/json')
            );
        }
        
//        $user_manager = $this->get('fos_user.user_manager');
//        $factory = $this->get('security.encoder_factory');
//
//        $user = $user_manager->findUserByUsername($userName);
//        $encoder = $factory->getEncoder($user);
//        $salt = $user->getSalt();
//
//        if($encoder->isPasswordValid($user->getPassword(), $password, $salt)) {
//            $response = new Response(
//              'Welcome '. $user->getUsername(),
//              Response::HTTP_OK,
//              array('Content-type' => 'application/json')
//            );
//        } else {
//            $response = new Response(
//              'Username or Password not valid.',
//              Response::HTTP_UNAUTHORIZED,
//              array('Content-type' => 'application/json')
//            );
//        }
        
        $user = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:User')
                ->findOneBy(['username' => $userName]);
        
        if (!$user) {
            
            throw $this->createNotFoundException();
        }
       
     
    
        $isValid = $this->get('security.password_encoder')
                ->isPasswordValid($user, $password);
       
       
        if ($isValid) {
            $response = new Response(
              'Username or Password not valid.',
              Response::HTTP_UNAUTHORIZED,
              array('Content-type' => 'application/json')
            );die;
           // throw new BadCredentialsException();
        }

        $response = new Response(Response::HTTP_OK);
        $token = $this->getToken($user);
        
        $response = new Response($this->serialize(['token' => $token]), Response::HTTP_OK);
        return $this->setBaseHeaders($response);
    }

    public function serialize($data) {
        $context = new SerializationContext();
        $context->setSerializeNull(true);

        return $this->get('jms_serializer')
                        ->serialize($data, 'json', $context);
    }

    public function getToken(User $user) {

        return $this->container->get('lexik_jwt_authentication.encoder')
                        ->encode([
                            'username' => $user->getUsername(),
                            'exp' => $this->getTokenExpiryDateTime(),
        ]);
    }

    private function getTokenExpiryDateTime() {

        $tokenTtl = $this->container->getParameter('lexik_jwt_authentication.token_ttl');
        $now = new \DateTime();
        $now->add(new \DateInterval('PT' . $tokenTtl . 'S'));
        return $now->format('U');
    }

    private function setBaseHeaders(Response $response) {
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}
