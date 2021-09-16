<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RecetteController extends AbstractController
{
    /**
    * @Route("/api/place", name="api_place" , methods="GET")
    */
    public function index(RecetteRepository $recetteRepository
    ,NormalizerInterface $normalizer): Response
    {
    $recettes = $recetteRepository->findAll();
    $normalized = $normalizer->normalize($recettes,null,['groups'=>'recette:read']);
    $json = json_encode($normalized);
    $reponse = new Response($json, 200, [
    'content-type' => 'application/json'
    ]);
    return $reponse;
    }
    /**
    * @Route("/api/recette/{id}", name="api_recette_avec_id")

    */
    public function findById(RecetteRepository $recetteRepository, $id, NormalizerInterface $normalizer): Response
    {
    $recette = $recetteRepository->find($id);
    $normalized = $normalizer->normalize($recette,null,['groups'=>'recette:read']);
    $json = json_encode($normalized);
    $reponse = new Response($json, 200, [
    'content-type' => 'application/json'
    ]);
    return $reponse;
    }

    
        
  }

