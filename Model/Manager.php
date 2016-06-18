<?php

namespace Spine\SpineArchitectureBundle\Model;

use Doctrine\ORM\EntityManager;
use Spine\SpineArchitectureBundle\Model\Interfaces\ManagerInterface;

abstract class Manager extends Service implements ManagerInterface
{
    public function getRepository()
    {
        return $this->em->getRepository(
            $this->buildRepositoryPath()
        );
    }

    protected function getEntityName()
    {
        $namespaceParts = $this->getNamespaceParts();
        $entityName = preg_replace('%Manager%', '', end($namespaceParts));

        return $entityName;
    }

    protected function getEntityPath()
    {
        $namespaceParts = $this->getNamespaceParts();
        return $namespaceParts[0] . $namespaceParts[1];
    }

    protected function buildRepositoryPath()
    {
        return $this->getEntityPath() . ':' . $this->getEntityName();
    }

    protected function getNamespaceParts()
    {
        return explode('\\', get_called_class());
    }
}
