<?php

namespace App\Service;

use App\Repository\BookingRepository;
use App\Repository\ExperienceRepository;
use App\Repository\StayRepository;
use Doctrine\ORM\EntityManagerInterface;

class StatsService
{
    private $manager;
    private $stayRepository;
    private $experiencesRepository;

    public function __construct(
        EntityManagerInterface $manager,
        StayRepository $stayRepository,
        ExperienceRepository $experiencesRepository
    ) {
        $this->manager = $manager;
        $this->stayRepository = $stayRepository;
        $this->experiencesRepository = $experiencesRepository;
    }

    public function getStats()
    {
        $users      = $this->getUsersCount();
        $ads        = $this->getAdsCount();
        $bookings   = $this->getBookingsCount();
        $comments   = $this->getCommentsCount();
        $stays      = $this->stayRepository->getBestStays();
        $experiences = $this->experiencesRepository->getBestExperiences();

        return compact('users', 'ads', 'bookings', 'comments', 'stays', 'experiences');
    }

    private function getUsersCount()
    {
        return $this->manager->createQuery('SELECT COUNT(u) FROM App\Entity\User u')->getSingleScalarResult();
    }

    private function getAdsCount()
    {
        return $this->manager->createQuery('SELECT COUNT(a) FROM App\Entity\Stay a')->getSingleScalarResult();
    }

    private function getBookingsCount()
    {
        return $this->manager->createQuery('SELECT COUNT(b) FROM App\Entity\Booking b')->getSingleScalarResult();
    }

    private function getCommentsCount()
    {
        return $this->manager->createQuery('SELECT COUNT(c) FROM App\Entity\Comment c')->getSingleScalarResult();
    }
}
