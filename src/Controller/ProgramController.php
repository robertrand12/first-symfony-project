<?php

namespace App\Controller;

use App\Entity\Program;
use App\Entity\Season;
use App\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\SeasonRepository;
use App\Form\ProgramType;


#[Route('/program', name: 'program_')]
class ProgramController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProgramRepository $programRepository): Response
    {
      $programs = $programRepository->findAll();
      return $this->render('program/index.html.twig', [
        'programs' => $programs,
     ]);
    }

    #[Route('/new', name: 'new')]
    public function new(Request $request, ProgramRepository $programRepository): Response
    {
        $program = new Program();

        // Create the form, linked with $category
        $form = $this->createForm(ProgramType::class, $program);
        $form->handleRequest($request);
        // Was the form submitted ?
        if ($form->isSubmitted() && $form->isValid()) {
          $programRepository->save($program, true);
          return $this->redirectToRoute('program_index');
            // Deal with the submitted data
            // For example : persiste & flush the entity
            // And redirect to a route that display the result
        }

        // Render the form

        return $this->render('program/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id<\d+>}', methods: ['GET'], name: 'show')]
    public function show(Program $program):Response
    {
      if(!$program){
        throw $this->createNotFoundException(
          'No program with id : '.$id.' found in program\'s table.'
      );
      }
      return $this->render('program/show.html.twig', [
        'program' => $program
      ]);
    }

    #[Route('/{program<\d+>}/seasons/{season<\d+>}', methods: ['GET'], name: 'season_show')]
    public function showSeason(Program $program, Season $season):Response
    {
      if(!$program){
        throw $this->createNotFoundException(
          'No program with id : '.$program.' found in program\'s table.'
      );
      }
      if(!$season){
        throw $this->createNotFoundException(
          'No season with id : '.$season.' found in season\'s table.'
      );
      }
      return $this->render('program/season_show.html.twig', [
        'program' => $program,
        'season' => $season
      ]);
    }

    #[Route('/{program<\d+>}/season/{season<\d+>}/episode/{episode<\d+>}', methods: ['GET'], name: 'episode_show')]
    public function showEpisode(Program $program, Season $season, Episode $episode):Response
    {
      if(!$program){
        throw $this->createNotFoundException(
          'No program with id : '.$program.' found in program\'s table.'
      );
      }
      if(!$season){
        throw $this->createNotFoundException(
          'No season with id : '.$season.' found in season\'s table.'
      );
      if(!$episode){
        throw $this->createNotFoundException(
          'No program with id : '.$episode.' found in episode\'s table.'
      );
      }
      }
      return $this->render('program/episode_show.html.twig', [
        'program' => $program,
        'season' => $season,
        'episode' => $episode
      ]);
    }
}