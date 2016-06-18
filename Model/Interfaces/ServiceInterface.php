<?php

namespace Spine\ArchitectureBundle\Model;

use Doctrine\ORM\EntityManager;

interface ServiceInterface
{
    /**
     * Manager constructor.
     *
     * @access public
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager);
}
