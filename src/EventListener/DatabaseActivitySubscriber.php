<?php
// src/EventListener/EntityChnageHandler.php
namespace App\EventListener;

use App\Entity\Booking;
use App\Entity\Comment;
use App\Entity\Experience;
use App\Entity\Stay;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\Persistence\ObjectManager;

class DatabaseActivitySubscriber implements EventSubscriberInterface
{
    // this method can only return the event names; you cannot define a
    // custom method name to execute when each event triggers
    public function getSubscribedEvents(): array
    {
        return [
            Events::postPersist,
            Events::postRemove,
            Events::postUpdate,
        ];
    }

    private function runChanges(LifecycleEventArgs $args){
        $entity = $args->getObject();

        // get the entity manager
        $entityManager = $args->getObjectManager();
        // if this listener only applies to certain entity types,
        // add some code to check the entity type as early as possible
        if ($entity instanceof Booking) {
            $this->invokeStayChanges($entity->getStay(), $entityManager);
        }

        if ($entity instanceof Comment) {
            $this->invokeExperienceChanges($entity->getExperience(), $entityManager);
        }
    }

    // the listener methods receive an argument which gives you access to
    // both the entity object of the event and the entity manager itself
    public function postPersist(LifecycleEventArgs $args): void
    {
        $this->runChanges($args);
        // ... do something with the Product entity
    }

    public function postRemove(LifecycleEventArgs $args): void
    {
        $this->runChanges($args);
    }

    public function postUpdate(LifecycleEventArgs $args): void
    {
        $this->runChanges($args);
    }

    private function invokeStayChanges(Stay $stay, ObjectManager $em) {
        $stay->updateNbBooked();
        $em->persist($stay);
        $em->flush();
    }

    private function invokeExperienceChanges(Experience $experience, ObjectManager $em) {
        $experience->updateNbComments();
        $em->persist($experience);
        $em->flush();
    }
}
