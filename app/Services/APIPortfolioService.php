<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class APIPortfolioService {
    public static string $hostAPI = 'api.rayzerdev.fr';
    protected static string $pathPortfolio = '/portfolio/';

    public function getExperiences(){
        $urlAPI = self::$hostAPI . self::$pathPortfolio;
        return Http::get($urlAPI . "experiences")->json()["products"];
    }

    public function getDiplomes(){
        $urlAPI = self::$hostAPI . self::$pathPortfolio;
        return Http::get($urlAPI . "diplomes")->json()["products"];
    }

    public function getCompetences(){
        $urlAPI = self::$hostAPI . self::$pathPortfolio;
        return Http::get($urlAPI . "competences")->json()["products"];
    }

    public function getCompetenceCategories(){
        $urlAPI = self::$hostAPI . self::$pathPortfolio;
        return Http::get($urlAPI . "competences/categories")->json()["products"];
    }

    public function getProjets(){
        $urlAPI = self::$hostAPI . self::$pathPortfolio;
        return Http::get($urlAPI . "projets")->json()["products"];
    }

    public function getProjetCategories(){
        $urlAPI = self::$hostAPI . self::$pathPortfolio;
        return Http::get($urlAPI . "projets/categories")->json()["products"];
    }
}
