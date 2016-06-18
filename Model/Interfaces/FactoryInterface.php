<?php

namespace Spine\ArchitectureBundle\Model\Interfaces;

use Doctrine\ORM\EntityManager;

interface FactoryInterface
{
    /**
     * Main factory function which accepts $type param
     * for future building of some future object
     *
     * @param mixed $type
     * @return mixed
     */
    public function get($type);
}
