<?php

namespace App\Http\Controllers;

use App\Services\APIPortfolioService;

class PortfolioController extends Controller
{
    protected APIPortfolioService $apiService;

    public function __construct(APIPortfolioService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index()
    {
        return view('portfolio.index', ['titre' => "Accueil"]);
    }

    public function about()
    {
        $experiences = $this->apiService->getExperiences();
        $diplomes = $this->apiService->getDiplomes();

        return view('portfolio.about', ['titre' => "A propos",
            'experiences' => $experiences, 'diplomes' => $diplomes]);
    }

    public function skills()
    {
        $competences = $this->apiService->getCompetences();
        $categories = $this->apiService->getCompetenceCategories();

        return view('portfolio.skills', ['titre' => "Projets", 'competences' => $competences,
            'categories' => $categories, 'hostImage' => $this->apiService::$hostAPI]);
    }

    public function projets()
    {
        $projets = $this->apiService->getProjets();
        $categories = $this->apiService->getProjetCategories();

        return view('portfolio.projets', ['titre' => "Projets", 'projets' => $projets,
            'categories' => $categories, 'hostImage' => $this->apiService::$hostAPI]);
    }

    public function contact()
    {
        return view('portfolio.contact', ['titre' => "Contact"]);
    }
}
