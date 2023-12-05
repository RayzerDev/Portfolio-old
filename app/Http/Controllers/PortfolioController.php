<?php

namespace App\Http\Controllers;

use http\Env;
use Illuminate\Support\Facades\Http;

class PortfolioController extends Controller
{
    /**
     * Display HomePage
     */
    public function index()
    {
        return view('portfolio.index', ['titre' => "Accueil"]);
    }

    /**
     * Display about me
     */
    public function about()
    {
        $urlAPI = env("API_PORTFOLIO_URL");
        $experiences = Http::get($urlAPI . "experiences")->json()["products"];
        $diplomes = Http::get($urlAPI . "diplomes")->json()["products"];
        return view('portfolio.about', ['titre' => "A propos", 'experiences' => $experiences, 'diplomes' => $diplomes]);
    }

    /**
     * Display skills
     */
    public function skills()
    {
        $urlAPI = env("API_PORTFOLIO_URL");
        $competences = Http::get($urlAPI . "competences")->json()["products"];
        $categories = Http::get($urlAPI . "competences/categories")->json()["products"];
        return view('portfolio.skills', ['titre' => "Projets", 'competences' => $competences, 'categories' => $categories]);
    }

    /**
     * Display projets
     */
    public function projets()
    {
        $urlAPI = env("API_PORTFOLIO_URL");
        $projets = Http::get($urlAPI . "projets")->json()["products"];
        $categories = Http::get($urlAPI . "projets/categories")->json()["products"];
        return view('portfolio.projets', ['titre' => "Projets", 'projets' => $projets, 'categories' => $categories]);
    }

    /**
     * Display contact
     */
    public function contact()
    {
        return view('portfolio.contact', ['titre' => "Contact"]);
    }
}
