<?php


namespace Acme\StoreBundle\Security;

use Doctrine\Common\EventManager;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;
use Doctrine\ODM\MongoDB\Mapping\MappingException;
use Doctrine\ODM\MongoDB\Hydrator\HydratorFactory;
use Doctrine\ODM\MongoDB\Proxy\ProxyFactory;
use Doctrine\ODM\MongoDB\Query\FilterCollection;
use Doctrine\ODM\MongoDB\Repository\RepositoryFactory;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
//use Doctrine\Common\Persistence\ObjectManager;
//use Acme\StoreBundle\Security\TokenAuthenticator;
use Lexik\Bundle\JWTAuthenticationBundle\Encoder\JWTEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

class TokenAuthenticator extends AbstractGuardAuthenticator
{
    /**
     * @var JWTEncoderInterface
     */
    private $jwtEncoder;
    /**
    * @var Doctrine\Common\Persistence\ObjectManager
    */
    protected $om;
    /**
     * @param JWTEncoderInterface $jwtEncoder
     * @param ObjectManager       $om
     */
    public function __construct(JWTEncoderInterface $jwtEncoder, ManagerRegistry $registry)
    {
        $this->jwtEncoder = $jwtEncoder;
         $this->om = $registry->getManager();
    }
    /**
     * @inheritdoc
     */
    public function getCredentials(Request $request)
    {
       
        $extractor = new AuthorizationHeaderTokenExtractor(
            'Bearer',
            'Authorization'
        );
        $token = $extractor->extract($request);
        
        if (!$token) {
            return;
        }
        return $token;
    }
    /**
     * @inheritdoc
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
       
        $data = $this->jwtEncoder->decode($credentials);
        if ($data === false) {
            throw new CustomUserMessageAuthenticationException('Invalid Token');
        }
        $username = $data['username'];
        return $this->om
            ->getRepository('UserBundle:User')
            ->findOneBy(['username' => $username]);
    }
    /**
     * @inheritdoc
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        
        return true;
    }
    /**
     * @inheritdoc
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
    }
    /**
     * @inheritdoc
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
    }
    /**
     * @inheritdoc
     */
    public function supportsRememberMe()
    {
        return false;
    }
    /**
     * @inheritdoc
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        return new Response('Token is missing!', Response::HTTP_UNAUTHORIZED);
    }
}