<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/** Controller for the overview page. */

#[IsGranted('ROLE_MANAGER')]
class AddEventsPageController extends AbstractController
{

    #[Route('/add-events', name: 'app_add_event', methods: ['GET'])]
    public function serve(): Response
    {
        return $this->render(
            'pages/add_events.html.twig'
        );
    }
}