<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class App1BundleDocumentUserHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="string") */
        if (isset($data['username']) || (! empty($this->class->fieldMappings['username']['nullable']) && array_key_exists('username', $data))) {
            $value = $data['username'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['username']->setValue($document, $return);
            $hydratedData['username'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['usernameCanonical']) || (! empty($this->class->fieldMappings['usernameCanonical']['nullable']) && array_key_exists('usernameCanonical', $data))) {
            $value = $data['usernameCanonical'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['usernameCanonical']->setValue($document, $return);
            $hydratedData['usernameCanonical'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['email']) || (! empty($this->class->fieldMappings['email']['nullable']) && array_key_exists('email', $data))) {
            $value = $data['email'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['email']->setValue($document, $return);
            $hydratedData['email'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['emailCanonical']) || (! empty($this->class->fieldMappings['emailCanonical']['nullable']) && array_key_exists('emailCanonical', $data))) {
            $value = $data['emailCanonical'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['emailCanonical']->setValue($document, $return);
            $hydratedData['emailCanonical'] = $return;
        }

        /** @Field(type="boolean") */
        if (isset($data['enabled']) || (! empty($this->class->fieldMappings['enabled']['nullable']) && array_key_exists('enabled', $data))) {
            $value = $data['enabled'];
            if ($value !== null) {
                $return = (bool) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['enabled']->setValue($document, $return);
            $hydratedData['enabled'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['salt']) || (! empty($this->class->fieldMappings['salt']['nullable']) && array_key_exists('salt', $data))) {
            $value = $data['salt'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['salt']->setValue($document, $return);
            $hydratedData['salt'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['password']) || (! empty($this->class->fieldMappings['password']['nullable']) && array_key_exists('password', $data))) {
            $value = $data['password'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['password']->setValue($document, $return);
            $hydratedData['password'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['lastLogin'])) {
            $value = $data['lastLogin'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['lastLogin']->setValue($document, clone $return);
            $hydratedData['lastLogin'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['confirmationToken']) || (! empty($this->class->fieldMappings['confirmationToken']['nullable']) && array_key_exists('confirmationToken', $data))) {
            $value = $data['confirmationToken'];
            if ($value !== null) {
                $return = (string) $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['confirmationToken']->setValue($document, $return);
            $hydratedData['confirmationToken'] = $return;
        }

        /** @Field(type="date") */
        if (isset($data['passwordRequestedAt'])) {
            $value = $data['passwordRequestedAt'];
            if ($value === null) { $return = null; } else { $return = \Doctrine\ODM\MongoDB\Types\DateType::getDateTime($value); }
            $this->class->reflFields['passwordRequestedAt']->setValue($document, clone $return);
            $hydratedData['passwordRequestedAt'] = $return;
        }

        /** @Field(type="collection") */
        if (isset($data['roles']) || (! empty($this->class->fieldMappings['roles']['nullable']) && array_key_exists('roles', $data))) {
            $value = $data['roles'];
            if ($value !== null) {
                $return = $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['roles']->setValue($document, $return);
            $hydratedData['roles'] = $return;
        }

        /** @Field(type="id") */
        if (isset($data['_id']) || (! empty($this->class->fieldMappings['id']['nullable']) && array_key_exists('_id', $data))) {
            $value = $data['_id'];
            if ($value !== null) {
                $return = $value instanceof \MongoId ? (string) $value : $value;
            } else {
                $return = null;
            }
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }
        return $hydratedData;
    }
}