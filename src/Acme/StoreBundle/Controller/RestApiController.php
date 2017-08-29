<?php

namespace Acme\StoreBundle\Controller;
//
//header("Access-Control-Allow-Origin: *");
//header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Document\Product;
use Acme\StoreBundle\Document\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;

class RestApiController extends FOSRestController {

    /**
     * GET Route annotation.
     * @return array
     * @Rest\Get("/api/{version}/all-product")
     * @Rest\View
     */
    public function showAction() {
        $usersQ = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:Product')
                ->findAll();

        foreach ($usersQ as $user) {
            $users[] = $user;
        }

//        return $users;

        $view = $this->view($users, Response::HTTP_OK);
        return $view;
    }

    /**
     * @Rest\Post("/user/")
     */
    public function createAction(Request $request) {
        $product = new User();
        $data = json_decode(file_get_contents('php://input'), true);
        if(empty($data)) {
            return $this->view("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
        }
       
         

//        $product->setEmail($data['name']['email']);
//        $product->setUsername($data['name']['username']);
//        $product->setPassword($data['name']['password']);
     
        // $product->setName($data['name']);
        //$product->setPrice($data['price']);
        $dm = $this->get('doctrine_mongodb')->getManager();

        $dm->persist($product);
        $dm->flush();
        //die("data saved successfully");
        return  $this->view("User Added Successfully", Response::HTTP_OK);
        //return new Response('Created product id ' . $product->getId());
    }

}
