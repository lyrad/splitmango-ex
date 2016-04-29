<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        // return $this->render('default/index.html.twig', [
        //     'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        // ]);

	 return new Response(
            '<html><body>
		<h1>SplitMango SF3 exemple app</h1>
		<ul>
			<li><a href="/youtube/query">Youtube querying app</a></li>
			<li><a href="/lucky/number">Lucky number Symfony first controller exemple</a></li>
		</ul>
	    </body></html>'
        );
    }
}
