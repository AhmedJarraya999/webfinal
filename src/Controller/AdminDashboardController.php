<?php

namespace App\Controller;

use App\Service\StatsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admins", name="admin_dashboard")
     */
    public function index(StatsService $statsService)
    {
        $stats = $statsService->getStats();

        return $this->render('admin_dashboard/index.html.twig', ['stats' => $stats]);
    }
}
