<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/', name: 'app_conference')]
    public function index(): Response
    {
        return new Response(<<<E0F
        <html>
            <body>
                <img src="/images/under-construction.gif" alt="">
            </body>
        </html>
          
E0F);
    }
}
