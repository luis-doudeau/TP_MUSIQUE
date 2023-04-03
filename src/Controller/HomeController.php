<?php

use App\Entity\Album;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function index(): Response
    {
        $albumRepository = $this->entityManager->getRepository(Album::class);
        $albums = $albumRepository->findAll();

        // Afficher la liste des albums
        return $this->render('home/index.html.twig', [
            'albums' => $albums,
        ]);
    }
}
