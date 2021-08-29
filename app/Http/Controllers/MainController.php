<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use jcobhams\NewsApi\NewsApi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use App\Chien;

class MainController extends Controller
{
    public function index(){

        $newsapi = new NewsApi("052dace452d64e6380f1070db65b274a");     
        $all_articles = $newsapi->getEverything($q = "chiens, chien", $sources = null, $domains = null, $exclude_domains = null, $from = null, $to = null, $language = "fr", $sort_by = null,  $page_size = "4", $page = null);
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
        $userinfo = Auth::id();
        $sel = DB::select('select * from users where users.id ='.$userinfo);
        if(Auth::check($userinfo)){
            return view('contact', compact('sel'));
        }else{
            return redirect()->route('index');
        }
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

        // $select = DB::select('select chiens.id, chiens.name, chiens.age, chiens.caractere, chiens.url_picture, races.name as race from chiens left join races on chiens.race_id = races.id');
        
        $select = DB::table('chiens')
        ->select('chiens.id', 'chiens.name', 'chiens.age', 'chiens.caractere', 'chiens.url_picture', 'races.name as race')
        ->leftjoin('races', 'chiens.race_id', '=', 'races.id')
        ->paginate(5);

        if($select->isEmpty()){
            return redirect()->route('adopter');
        };
        return view('adopter', compact('select'));
    }

    public function chien($id){
        $chien = Chien::where('id', $id)->firstOrFail();
        $select = DB::select('select chiens.id, chiens.name, chiens.age, chiens.naissance, chiens.caractere, chiens.castre, chiens.url_picture, races.name as race, sexe.name as sexe from chiens left join races on chiens.race_id = races.id left join sexe on chiens.sexe_id = sexe.id where chiens.id ='.$id);
        return view('chien', compact('select'));
    }

    public function parametres(){
        $userinfo = Auth::id();
        $sel = DB::select('select * from users where users.id ='.$userinfo);
        if(Auth::check($userinfo)){
            return view('parametres', compact('sel'));
        }else{
            return redirect()->route('index');
        }
    }

    public function addparam(Request $request){
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $naissance = $request->input('naissance');
        $sexe = $request->input('sexe');
        $email = $request->input('email');
        $tel = $request->input('tel');
        $adresse = $request->input('adresse');
        $compadresse = $request->input('compadresse');
        $ville = $request->input('ville');
        $codepostal = $request->input('codepostal');
        $data=['name'=>$nom, 'surname'=>$prenom, 'birth'=>$naissance, 'sexe'=>$sexe, 'email'=>$email, 'phone'=>$tel, 'adress'=>$adresse, 'compadress'=>$compadresse, 'city'=>$ville, 'zip'=>$codepostal];
        $user = Auth::id();
        DB::table('users')
        ->where('id', $user)
        ->update($data);
        return redirect()->route('index');

    }
}
