<?php

// src/UserBundle/Controller/RegistrationController.php

namespace Acme\StoreBundle\Controller;

//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

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
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

class RegistrationController extends BaseController {

//      public function registerAction(Request $request) {
//
//
//      // $product = new User();
//      $userManager = $this->get('fos_user.user_manager');
//      $entityManager = $this->get('doctrine_mongodb')->getManager();
//      //$data = $request->request->all();
//      $data = json_decode(file_get_contents('php://input'), true);
//      // Do a check for existing user with userManager->findByUsername
//
//      $user = $userManager->createUser();
//      $user->setUsername($data['name']['username']);
//      $user->setEmail($data['name']['email']);
//
//      $user->setLastLogin((new \DateTime()));
//      $user->setPlainPassword($data['name']['password']);
//      $user->setEnabled(true);
//
//      $userManager->updateUser($user);
//
//      return $this->generateToken($user, 201);
//      }
//    public function registerAction(Request $request) {
//        /** @var \FOS\UserBundle\Form\Factory\FactoryInterface */
//        $formFactory = $this->get('fos_user.registration.form.factory');
//        /** @var \FOS\UserBundle\Model\UserManagerInterface */
//        $userManager = $this->get('fos_user.user_manager');
//        /** @var \Symfony\Component\EventDispatcher\EventDispatcherInterface */
//        $dispatcher = $this->get('event_dispatcher');
//
////        $user = $userManager->createUser();
////        $event = new GetResponseUserEvent($user, $request);
////        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);
////
////        if (null !== $event->getResponse()) {
////            return $event->getResponse();
////        }
////
//        $form = $formFactory->createForm(array('csrf_protection' => false));
////        $form->setData($user);
////        $this->processForm($request, $form);
//        $userManager = $this->get('fos_user.user_manager');
//        $entityManager = $this->get('doctrine_mongodb')->getManager();
//        //$data = $request->request->all();
//        $data = json_decode(file_get_contents('php://input'), true);
//       
//        if (empty($data)) {
//            return $this->view("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
//            die;
//        }
//        if (!empty($data)) {
////            $event = new FormEvent($form, $request);
////            $dispatcher->dispatch(
////                    FOSUserEvents::REGISTRATION_SUCCESS, $event
////            );
////
////            $userManager->updateUser($user);
//            // Do a check for existing user with userManager->findByUsername
//          
//            $user = $userManager->createUser();
//            $user->setUsername($data['name']['username']);
//            $user->setEmail($data['name']['email']);
//
//            $user->setLastLogin((new \DateTime()));
//            $user->setPlainPassword($data['name']['password']);
//            $user->setEnabled(true);
//
//            $userManager->updateUser($user);
//
//            $response = new Response($this->serialize('User created.'), Response::HTTP_CREATED);
//        } else {
//            throw new BadRequestHttpException();
//        }
//
//        return $this->setBaseHeaders($response);
//    }
    public function registerAction(Request $request) {
        /** @var \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        /** @var \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $user = $userManager->createUser();
        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        $form = $formFactory->createForm(array('csrf_protection' => false));
        $form->setData($user);
        $this->processForm($request, $form);

        if ($form->isValid()) {
            $event = new FormEvent($form, $request);
            $dispatcher->dispatch(
                    FOSUserEvents::REGISTRATION_SUCCESS, $event
            );

            $userManager->updateUser($user);

            $response = new Response($this->serialize('User created.'), Response::HTTP_CREATED);
        } else {
            throw new BadRequestHttpException();
        }

        return $this->setBaseHeaders($response);
    }

    /**
     * @param  Request $request
     * @param  FormInterface $form
     */
    private function processForm(Request $request, FormInterface $form) {
        $data = json_decode($request->getContent(), true);
        if ($data === null) {
            throw new BadRequestHttpException();
        }

        $form->submit($data);
    }

    /**
     * Data serializing via JMS serializer.
     *
     * @param mixed $data
     *
     * @return string JSON string
     */
    private function serialize($data) {
        $context = new SerializationContext();
        $context->setSerializeNull(true);

        return $this->get('jms_serializer')
                        ->serialize($data, 'json', $context);
    }

    /**
     * Set base HTTP headers.
     *
     * @param Response $response
     *
     * @return Response
     */
    private function setBaseHeaders(Response $response) {
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }

}
