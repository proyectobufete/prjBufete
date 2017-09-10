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
    public function twigapdf(Request $request)
    {
        $snappy = $this -> get("knp_snappy.pdf");
        $html = $this ->renderView("default/pdf.html.twig", array("title" => "LA GRAN PUTA"));
          $filename = "pdfpruebatwig";

          return new Response(
            $snappy->getOutputFromHtml($html),
            //codigo de ok (?)
            200,
            array(
              'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
          );
        // // replace this example code with whatever you need
        // return $this->render('default/index.html.twig', [
        //     'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        // ]);
    }

    public function indexAction (){
      return $this -> render ('AppBundle:Default:index.html.twig');
    }
}
