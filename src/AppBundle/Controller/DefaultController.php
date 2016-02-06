<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Recommendation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function addRecommendationAction(Request $request)
    {
        $em = $this->get("doctrine.orm.entity_manager");
        $rec = (new Recommendation())
            ->setSubmitterName('Matt Coker')
            ->setSubmitterEmail('matt.coker@praxent.com')
            ->setContent(rand())
            ->setIsPending(true)
            ->setIsApproved(false);
        $em->persist($rec);
        $em->flush();
        return;
    }

    public function dashboardAction(Request $request)
    {
        $em = $this->getDoctrine();
        $recommendations = $em->getRepository('AppBundle:Recommendation')->findAll();

        $pending = [];
        $approved = [];
        foreach ($recommendations as $rec) {
            if ($rec->getIsPending()) {
                array_push($pending, $rec);
            } else if ($rec->getIsApproved()) {
                array_push($approved, $rec);
            }
        }
        return $this->render('AppBundle:Dashboard:index.html.twig', [
            'pending' => $pending,
            'approved' => $approved
        ]);
    }
}
