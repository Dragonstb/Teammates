<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\User;

/** Controller for the overview page. */

#[IsGranted('ROLE_TEAMMATE')]
class OverviewPageController extends AbstractController
{

    #[Route('/overview', name: 'app_overview', methods: ['GET'])]
    public function serve(): Response
    {
        $user = $this->getUser();

        return $this->render(
            'pages/overview.html.twig',
            [
                'user' => $user ?? 'why are you here?'
            ]
        );
    }
}