<?php

namespace App\Http\Controllers;

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
        $experiences = [];
        $diplomes = [];
        return view('portfolio.about', ['titre' => "A propos", 'experiences' => $experiences, 'diplomes' => $diplomes]);
    }

    /**
     * Display skills
     */
    public function skills()
    {
        $competences = [];
        $categories = [];
        return view('portfolio.skills', ['titre' => "Compétences"]);
    }

    /**
     * Display projects
     */
    public function projects()
    {
        $projets = [];
        $categories = [];
        return view('portfolio.projects', ['titre' => "Projets"]);
    }

    /**
     * Display contact
     */
    public function contact()
    {
        return view('portfolio.contact', ['titre' => "Contact"]);
    }
}
