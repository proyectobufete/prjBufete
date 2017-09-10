<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Demandados;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Demandado controller.
 *
 */
class DemandadosController extends Controller
{
    /**
     * Lists all demandado entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $demandados = $em->getRepository('AppBundle:Demandados')->findAll();

        return $this->render('demandados/index.html.twig', array(
            'demandados' => $demandados,
        ));
    }

    /**
     * Creates a new demandado entity.
     *
     */
    public function newAction(Request $request)
    {
        $demandado = new Demandados();
        $form = $this->createForm('AppBundle\Form\DemandadosType', $demandado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($demandado);
            $em->flush();

            return $this->redirectToRoute('demandados_show', array('idDemandado' => $demandado->getIddemandado()));
        }

        return $this->render('demandados/new.html.twig', array(
            'demandado' => $demandado,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a demandado entity.
     *
     */
    public function showAction(Demandados $demandado)
    {
        $deleteForm = $this->createDeleteForm($demandado);

        return $this->render('demandados/show.html.twig', array(
            'demandado' => $demandado,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing demandado entity.
     *
     */
    public function editAction(Request $request, Demandados $demandado)
    {
        $deleteForm = $this->createDeleteForm($demandado);
        $editForm = $this->createForm('AppBundle\Form\DemandadosType', $demandado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('demandados_edit', array('idDemandado' => $demandado->getIddemandado()));
        }

        return $this->render('demandados/edit.html.twig', array(
            'demandado' => $demandado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a demandado entity.
     *
     */
    public function deleteAction(Request $request, Demandados $demandado)
    {
        $form = $this->createDeleteForm($demandado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($demandado);
            $em->flush();
        }

        return $this->redirectToRoute('demandados_index');
    }

    /**
     * Creates a form to delete a demandado entity.
     *
     * @param Demandados $demandado The demandado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Demandados $demandado)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('demandados_delete', array('idDemandado' => $demandado->getIddemandado())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
