<?php

// src/UserBundle/Controller/RegistrationController.php

namespace Acme\StoreBundle\Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\Form\FormInterface;
use JMS\Serializer\SerializationContext;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class RegistrationController extends BaseController {

    public function registerAction(Request $request) {

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        // $product = new User();
        $userManager = $this->get('fos_user.user_manager');
        $entityManager = $this->get('doctrine')->getManager();
        //$data = $request->request->all();
        $data = json_decode(file_get_contents('php://input'), true);
        // Do a check for existing user with userManager->findByUsername

        $user = $userManager->createUser();
        $user->setUsername($data['name']['username']);
        $user->setEmail($data['name']['email']);

        $user->setLastLogin((new \DateTime()));
        $user->setPlainPassword($data['name']['password']);
        $user->setEnabled(true);

        $userManager->updateUser($user);
        die("saved");
        // return $this->generateToken($user, 201);
    }

//    protected function generateToken($user, $statusCode = 200) {
//        // Generate the token
//      
//        $token = $this->get('lexik_jwt_authentication.jwt_manager')->create($user);
//        //print_r($token);
//        //die("test");
//        $response = array(
//            'token' => $token,
//            'user' => $user // Assuming $user is serialized, else you can call getters manually
//        );
////         $response->headers->set('Content-Type', 'application/json');
////        $response->headers->set('Access-Control-Allow-Origin', '*');
//        return new JsonResponse($response, $statusCode); // Return a 201 Created with the JWT.
//    }
//    public function loginAction(Request $request) {
//        try {
//            $token = $this->get('security.authentication.manager')->authenticate(new UsernamePasswordToken('username', 'password', 'firewall'));
//            $this->get('security.context')->setToken($token);
//        } catch (BadCredentialsException $e) {
//            return new Response("Bad credentials", 403);
//        }
//        return new Response("success");
//    }

}

?>