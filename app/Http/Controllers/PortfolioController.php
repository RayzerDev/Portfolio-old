<?php

namespace App\Http\Controllers;

use http\Env;
use Illuminate\Support\Facades\Http;

class PortfolioController extends Controller{
    public static $hostAPI = 'localhost:8888';

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
        $urlAPI = self::$hostAPI . '/api/portfolio/';
        $experiences = Http::get($urlAPI . "experiences")->json()["products"];
        $diplomes = Http::get($urlAPI . "diplomes")->json()["products"];
        return view('portfolio.about', ['titre' => "A propos", 'experiences' => $experiences, 'diplomes' => $diplomes]);
    }

    /**
     * Display skills
     */
    public function skills()
    {
        $urlAPI = self::$hostAPI  . '/api/portfolio/';
        $competences = Http::get($urlAPI . "competences")->json()["products"];
        $categories = Http::get($urlAPI . "competences/categories")->json()["products"];
        return view('portfolio.skills', ['titre' => "Projets", 'competences' => $competences, 'categories' => $categories, 'hostImage' => self::$hostAPI] );
    }

    /**
     * Display projets
     */
    public function projets()
    {
        $urlAPI = self::$hostAPI  . '/api/portfolio/';
        $projets = Http::get($urlAPI . "projets")->json()["products"];
        $categories = Http::get($urlAPI . "projets/categories")->json()["products"];
        return view('portfolio.projets', ['titre' => "Projets", 'projets' => $projets, 'categories' => $categories, 'hostImage' => self::$hostAPI]);
    }

    /**
     * Display contact
     */
    public function contact()
    {
        return view('portfolio.contact', ['titre' => "Contact"]);
    }
}
