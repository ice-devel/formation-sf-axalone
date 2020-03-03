<?php
namespace App\Listener;

use App\Entity\Article;
use App\Service\SlugService;
use Doctrine\ORM\Event\LifecycleEventArgs;

class EntityListener
{
    private $slugService;

    public function __construct(SlugService $slugService)
    {
        $this->slugService = $slugService;
    }

    public function prePersist(LifecycleEventArgs $lcea) {
        $entity = $lcea->getEntity();

        if (method_exists($entity, 'setCreatedAt')) {
            $entity->setCreatedAt(new \DateTime());
        }

        if ($entity instanceof Article) {

        }
    }

    public function preUpdate() {

    }
}