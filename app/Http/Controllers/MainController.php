<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;
use Illuminate\Support\Facades\DB;
use App\Chien;

class MainController extends Controller
{
    public function index(){
        $newsapi = new NewsApi("052dace452d64e6380f1070db65b274a");
        $all_articles = $newsapi->getEverything($q = "chiens, chien", $sources = null, $domains = null, $exclude_domains = null, $from = null, $to = null, $language = "fr", $sort_by = null,  $page_size = "5", $page = null);
        $articles = $all_articles->articles;
        $select = DB::select('select chiens.id, chiens.name, chiens.age, chiens.caractere, chiens.url_picture, races.name as race, sexe.name as sexe from chiens left join races on chiens.race_id = races.id left join sexe on chiens.sexe_id = sexe.id limit 4');
        return view('welcome', compact('articles', 'select'));
    }

    public function actu(){
        $newsapi = new NewsApi("052dace452d64e6380f1070db65b274a");
        $all_articles = $newsapi->getEverything($q = "chiens, chien", $sources = null, $domains = null, $exclude_domains = null, $from = null, $to = null, $language = "fr", $sort_by = null,  $page_size = "10", $page = null);
        $articles = $all_articles->articles;
        return view('actu', ['articles' => $articles]);
    }

    public function about(){
        return view('about');
    }


    public function contact(){
        return view('contact');
    }

    public function contactsend(Request $request){
        $nom = $request->input('nom');
        $email = $request->input('email');
        $sujet = $request->input('sujet');
        $message = $request->input('contenu');
        $data=['name'=>$nom, 'email'=>$email, 'subject'=>$sujet, 'message'=>$message];
        DB::table('contact')->insert($data);
        return redirect()->route('index');
    }

    public function adopter(){
        $select = DB::select('select chiens.id, chiens.name, chiens.age, chiens.caractere, chiens.url_picture, races.name as race from chiens left join races on chiens.race_id = races.id');
        return view('adopter', compact('select'));
    }

    public function chien($id){
        $chien = Chien::where('id', $id)->firstOrFail();
        $select = DB::select('select chiens.id, chiens.name, chiens.age, chiens.naissance, chiens.caractere, chiens.castre, chiens.url_picture, races.name as race, sexe.name as sexe from chiens left join races on chiens.race_id = races.id left join sexe on chiens.sexe_id = sexe.id where chiens.id ='.$id);
        return view('chien', compact('select'));
    }
}