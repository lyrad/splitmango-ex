<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class YoutubeController extends Controller
{
    /**
     * @Route("/youtube/query")
     */
    public function queryAction()
    {
	$html = $this->container->get('templating')->render(
            'youtube/query.html.twig',
            array()
        );

        return new Response($html);
    }
}
