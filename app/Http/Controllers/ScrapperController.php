<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScrapperController extends Controller
{

    //Il faut installer GOUTTE pour pouvoir les sites web
    private $data = array();
    public $count = 0;
    public $url = 'https://freecoursesdownload.com/'; // L'URL sur lequel on va récuperer les données
    public $page;

    public function scraper()
    {

        $client = new Client(); // On crée une instace de client
        $test = true;
        

        // $cours = DB::table('cours')->get();

        // foreach ($cours as $cour) {
        //     echo $cour->img_url.'#####'.$cour->titre.'******************************************************************';
        // }

        // dd('Scrapper fini...........');

        
        while ($test) {

            $this->page = $client->request('GET', $this->url); // On récupère les datas de la page via la méthode GET
            $this->page->filter('#main > div > div > div > div.cm-col-lg-8.cm-col-12 > div > section > div > section > div > div')->each(function ($item) {


                $image_url = $item->filter('figure > img')->extract(array('src'));
                foreach ($image_url as $key => $value) {
                    $image_url[$key] = substr($value, 61, 155);
                }
                $titre = $item->filter('div.post_title')->extract(array('_text'));
                $categorie = $item->filter('.post-categories')->extract(array('_text'));
                $categorie_lien = $item->filter('.post-categories li a')->extract(array('href'));
                $date_post = $item->filter('.entry-date.published')->extract(array('_text'));
                $link = $item->filter('div.post_title h2 a')->extract(array('href'));


                for ($i = 0; $i < sizeof($titre); $i++) {
                    DB::insert('INSERT INTO cours (titre, categorie, categorie_link, img_url, post_date, link) values (?, ?, ?, ?, ?, ?)', [$titre[$i], $categorie[$i], $categorie_lien[$i], $image_url[$i], $date_post[$i], $link[$i]]);
                }
            });

            

            // Réinitialise les variables
            $link = array();
            $titre = array();
            $categorie = array();
            $categorie_lien = array();
            $image_url = array();
            $date_post = array();
            if ($this->page->filter('.next.page-numbers')->count() != 0) {
                $this->url = $this->page->filter('.next.page-numbers')->attr('href');
                
            } else {
                $test = false;
            }

        }

        dd('Poto Fin');
        

        //return view('scraper');
    }

    public function index() {


        $cours = DB::table('cours')->paginate(15);

        return view('index', \compact('cours'));
    }
}
