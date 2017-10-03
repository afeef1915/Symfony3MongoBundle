<?php
namespace Acme\StoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
/**
 * @MongoDB\Document
 */
class FosGroup
{
    /**
     * @ODM\Id
     */
    protected $id;

    /**
     * @ODM\String
     */
     protected $name;
     
     /**
     * @ODM\Collection
     */
     protected $roles = array();
     
     
     /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param String
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @param String
     */
    public function getName()
    {
         return $this->name;
    }
     /**
     * @param String
     */
    public function setRole($role)
    {
        $this->roles[] = $role;
    }

    /**
     * @param array
     */
    public function setRoles(array $roles)
    {
        $this->roles = (array) $roles;
    }

    
    /**
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

}