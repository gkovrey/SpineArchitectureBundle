<?php

namespace Spine\SpineArchitectureBundle;

use Spine\SpineArchitectureBundle\Model\Interfaces\ServiceInterface;

abstract class Service implements ServiceInterface
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * Service constructor.
     * Accepts only entityManager as main dependency.
     * Regargless hole container, need to keep it clear and work only with needed dependency
     *
     * @access public
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }
}
