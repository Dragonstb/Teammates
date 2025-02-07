<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/** Controller for the homepage. The homepage does not need a login.
 *
 */
class HomePageController extends AbstractController
{

    #[Route('/', name: 'app_homepage', methods: ['GET'])]
    public function serve(): Response
    {
        return new Response(
            '<html><body><div>Hello!</div><a href="./overview">Log in</a></body></html>'
        );
    }
}