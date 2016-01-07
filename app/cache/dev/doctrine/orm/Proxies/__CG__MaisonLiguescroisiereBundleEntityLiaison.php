<?php

namespace Proxies\__CG__\MaisonLigues\croisiereBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Liaison extends \MaisonLigues\croisiereBundle\Entity\Liaison implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDistance($distance)
    {
        $this->__load();
        return parent::setDistance($distance);
    }

    public function getDistance()
    {
        $this->__load();
        return parent::getDistance();
    }

    public function setIdSecteur($idSecteur)
    {
        $this->__load();
        return parent::setIdSecteur($idSecteur);
    }

    public function getIdSecteur()
    {
        $this->__load();
        return parent::getIdSecteur();
    }

    public function setIdPortDepart($idPortDepart)
    {
        $this->__load();
        return parent::setIdPortDepart($idPortDepart);
    }

    public function getIdPortDepart()
    {
        $this->__load();
        return parent::getIdPortDepart();
    }

    public function setIdPortArrive($idPortArrive)
    {
        $this->__load();
        return parent::setIdPortArrive($idPortArrive);
    }

    public function getIdPortArrive()
    {
        $this->__load();
        return parent::getIdPortArrive();
    }

    public function setLeSecteur(\MaisonLigues\croisiereBundle\Entity\Secteur $leSecteur = NULL)
    {
        $this->__load();
        return parent::setLeSecteur($leSecteur);
    }

    public function getLeSecteur()
    {
        $this->__load();
        return parent::getLeSecteur();
    }

    public function setLeDepart(\MaisonLigues\croisiereBundle\Entity\Port $leDepart = NULL)
    {
        $this->__load();
        return parent::setLeDepart($leDepart);
    }

    public function getLeDepart()
    {
        $this->__load();
        return parent::getLeDepart();
    }

    public function setLArrive(\MaisonLigues\croisiereBundle\Entity\Port $lArrive = NULL)
    {
        $this->__load();
        return parent::setLArrive($lArrive);
    }

    public function getLArrive()
    {
        $this->__load();
        return parent::getLArrive();
    }

    public function addLesTraversse(\MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses)
    {
        $this->__load();
        return parent::addLesTraversse($lesTraversses);
    }

    public function removeLesTraversse(\MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses)
    {
        $this->__load();
        return parent::removeLesTraversse($lesTraversses);
    }

    public function getLesTraversses()
    {
        $this->__load();
        return parent::getLesTraversses();
    }

    public function setLesTraversses(\MaisonLigues\croisiereBundle\Entity\Traversee $lesTraversses = NULL)
    {
        $this->__load();
        return parent::setLesTraversses($lesTraversses);
    }

    public function addLesTarif(\MaisonLigues\croisiereBundle\Entity\Tarifer $lesTarifs)
    {
        $this->__load();
        return parent::addLesTarif($lesTarifs);
    }

    public function removeLesTarif(\MaisonLigues\croisiereBundle\Entity\Tarifer $lesTarifs)
    {
        $this->__load();
        return parent::removeLesTarif($lesTarifs);
    }

    public function getLesTarifs()
    {
        $this->__load();
        return parent::getLesTarifs();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'distance', 'leSecteur', 'leDepart', 'lArrive', 'lesTraversses', 'lesTarifs');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}