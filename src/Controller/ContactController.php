<?php

namespace App\Controller;

use App\Form\ContactType;

use App\Services\EmailService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EmailService $emailService): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dataContact = $form->getData();
            $subject = 'Demande de renseignement de ' . $dataContact['email'];
            $content = $dataContact['name'] . ' vous a envoyé le message suivant : ' . $dataContact['message'];

            $emailService->sendEmail($dataContact['email'], $subject, $content);


            $this->addFlash('success', 'Votre message a bien été envoyé.');


            return $this->redirectToRoute('app_contact');
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
