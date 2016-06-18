<?php

namespace Spine\SpineArchitectureBundle\Model\Factory;

use Doctrine\ORM\EntityManager;
use Spine\SpineArchitectureBundle\Model\Interfaces\FactoryInterface;

abstract class Factory implements FactoryInterface
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * MenuManager constructor.
     *
     * @access public
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
}
