<?php

// src/DataFixtures/AppFixtures.php

namespace App\DataFixtures;

use App\Entity\Album;
use App\Entity\Artiste;
use App\Entity\Genre;
use App\Entity\Musique;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use GuzzleHttp\Client;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
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

        // Parcourir la liste des albums et créer des instances d'Album, Artiste et Genre
        foreach ($albums as $albumData) {
            $album = new Album();
            $album->setNomAlbum($albumData['name']);

            // Ajouter l'artiste associé à l'album
            $artistData = $albumData['artists'][0];
            $artist = $manager->getRepository(Artiste::class)->findOneBy(['nomArtiste' => $artistData['name']]);
            if (!$artist) {
                $artist = new Artiste();
                $artist->setNomArtiste($artistData['name']);
            }
            $album->setArtiste($artist);

            // Ajouter l'image de l'album s'il y en a une
            if (array_key_exists('images', $albumData) && !empty($albumData['images'])) {
                $album->setUrlImage($albumData['images'][0]['url']);
            }

            // Persister les entités dans la base de données
            $manager->persist($album);
            $manager->persist($artist);
        }

        // Parcourir la liste des albums et créer des instances d'Album, Artiste et Genre
        foreach ($albums as $albumData) {
            $album = new Album();
            $album->setNomAlbum($albumData['name']);

            // Ajouter l'artiste associé à l'album
            $artistData = $albumData['artists'][0];
            $artist = $manager->getRepository(Artiste::class)->findOneBy(['nomArtiste' => $artistData['name']]);
            if (!$artist) {
                $artist = new Artiste();
                $artist->setNomArtiste($artistData['name']);
            }
            $album->setArtiste($artist);

            // Récupérer les informations détaillées de l'album
            $response = $client->request('GET', $albumData['href'], [
                'headers' => [
                    'Authorization' => 'Bearer ' . $accessToken,
            ],
            ]);
            $albumDetails = json_decode($response->getBody()->getContents(), true);


                    // Ajouter l'image de l'album
                    if (array_key_exists('images', $albumDetails) && count($albumDetails['images']) > 0) {
                        $album->setUrlImage($albumDetails['images'][0]['url']);
                    }

                    // Ajouter les musiques de l'album
                    if (array_key_exists('tracks', $albumDetails)) {
                        foreach ($albumDetails['tracks']['items'] as $trackData) {
                            $musique = new Musique();
                            $musique->setNomMusique($trackData['name']);
                            $album->addMusique($musique);
                            $manager->persist($musique);
                        }
                    }

                    // Persister les entités dans la base de données
                    $manager->persist($album);
                    $manager->persist($artist);
                }
                $manager->flush();
}
}