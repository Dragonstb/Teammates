<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/** Controller for the overview page. */

#[IsGranted('ROLE_TEAMMATE')]
class OverviewPageController extends AbstractController
{

    #[Route('/overview', name: 'app_overview', methods: ['GET'])]
    public function serve(): Response
    {
        $user = $this->getUser();
        $text = $user ? 'Your page, ' . $user : 'Why are you here?';

        return new Response(
            '<html><body><div>' . $text . '</div><a href="./logout">logout</a></body></html>'
        );
    }
}