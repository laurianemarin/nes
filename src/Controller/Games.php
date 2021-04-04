<?php

namespace App\Controller;

use App\Entity\Game;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Games extends AbstractController
{
    /**
     * @Route("/gamesByCategory/{category}", name="gamesByCategory")
     */
    public function gamesByCategory(int $category): Response
    {
        $repo = $this->getDoctrine()->getRepository(Game::class);
        $list = $repo->findByCategory($category);

        return $this->render('categoryGames.html.twig', [
            'list' => $list,
			'category' => $category
        ]);
    }

    /**
     * @Route("/gamesByEditor/{editor}", name="gamesByEditor")
     */
    public function gamesByEditor(int $editor): Response
    {
        $repo = $this->getDoctrine()->getRepository(Game::class);
        $list = $repo->findByEditor($editor);

        return $this->render('editorGames.html.twig', [
            'list' => $list
        ]);
    }

    /**
     * @Route("/gamesByDeveloper/{developer}", name="gamesByDeveloper")
     */
    public function gamesByDeveloper(int $developer): Response
    {
        $repo = $this->getDoctrine()->getRepository(Game::class);
        $list = $repo->findByDeveloper($developer);

        return $this->render('developerGames.html.twig', [
            'list' => $list
        ]);
    }
}