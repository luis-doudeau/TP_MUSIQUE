<?php

// src/Controller/SpotifyController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use GuzzleHttp\Client;

class SpotifyController extends AbstractController
{
    public function index(): Response
    {
        // Récupérer l'access token Spotify
        $client = new Client();
        $response = $client->request('POST', 'https://accounts.spotify.com/api/token', [
            'headers' => [
                'Authorization' => 'Basic ' . base64_encode($_ENV['SPOTIFY_CLIENT_ID'] . ':' . $_ENV['SPOTIFY_CLIENT_SECRET']),
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'grant_type' => 'client_credentials',
            ],
        ]);
        $accessToken = json_decode($response->getBody()->getContents(), true)['access_token'];

        // Récupérer la liste des albums
        $response = $client->request('GET', 'https://api.spotify.com/v1/search', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
            ],
            'query' => [
                'q' => 'album',
                'type' => 'album',
                'limit' => 10,
            ],
        ]);
        $albums = json_decode($response->getBody()->getContents(), true)['albums']['items'];

        // Afficher la liste des albums
        return $this->render('spotify/index.html.twig', [
            'albums' => $albums,
        ]);
    }
}

