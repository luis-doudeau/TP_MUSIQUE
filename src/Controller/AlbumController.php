<?php

namespace App\Controller;

use App\Entity\Album;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlbumController extends AbstractController
{
    /**
     * @Route("/album/{id}", name="album_show")
     */
    public function show($id): Response
    {
        $albumRepository = $this->getDoctrine()->getRepository(Album::class);
        $album = $albumRepository->find($id);

        return $this->render('album/show.html.twig', [
            'album' => $album,
        ]);
    }
}
