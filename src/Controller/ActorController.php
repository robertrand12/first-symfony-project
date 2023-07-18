<?php

namespace App\Controller;

use App\Entity\Actor;
use App\Entity\Program;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\ActorRepository;
// use App\Form\ActorType;


#[Route('/actor', name: 'actor_')]
class ActorController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ActorRepository $actorRepository): Response
    {
      $actors = $actorRepository->findAll();
      return $this->render('actor/index.html.twig', [
        'actors' => $actors,
     ]);
    }

    // #[Route('/new', name: 'new')]
    // public function new(Request $request, ProgramRepository $programRepository): Response
    // {
    //     $program = new Program();

    //     // Create the form, linked with $category
    //     $form = $this->createForm(ProgramType::class, $program);
    //     $form->handleRequest($request);
    //     // Was the form submitted ?
    //     if ($form->isSubmitted() && $form->isValid()) {
    //       $programRepository->save($program, true);
    //       $this->addFlash('success', 'La série a bien été ajoutée.');
    //       return $this->redirectToRoute('program_index');
    //         // Deal with the submitted data
    //         // For example : persiste & flush the entity
    //         // And redirect to a route that display the result
    //     } 
        
    //     // Render the form

    //     return $this->render('program/new.html.twig', [
    //         'form' => $form,
    //     ]);
    // }

    #[Route('/{id<\d+>}', methods: ['GET'], name: 'show')]
    public function show(Actor $actor):Response
    {
      if(!$actor){
        throw $this->createNotFoundException(
          'No actor with id : '.$id.' found in actor\'s table.'
      );
      }
      return $this->render('actor/show.html.twig', [
        'actor' => $actor
      ]);
    }
}