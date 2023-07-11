<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ProgramRepository;

#[Route('/category', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(CategoryRepository $categoryRepository): Response
    {
      $categories = $categoryRepository->findAll();
      return $this->render('category/index.html.twig', [
        'categories' => $categories,
     ]);
    }

    #[Route('/{categoryName}', methods: ['GET'], name: 'show')]
    public function show(string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository):Response
    {
      $category = $categoryRepository->findOneByName($categoryName);
      if(!$category){
        throw $this->createNotFoundException(
          'No category : '.$categoryName.' found in category\'s table.'
      );
      }
      $programByCategory = $programRepository->findBy(['category' => $category]);
      return $this->render('category/show.html.twig', [
        'programs' => $programByCategory
      ]);
    }
}