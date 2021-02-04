<?php

namespace App\Http\Controllers;

use App\Models\Korisnik;
use Illuminate\Http\Request;

class KorisnikController extends Controller
{
    private $model;

    function __construct(){
        $this->model = new Korisnik(); 
    }
    public function login(Request $request){
       
        if($request->has('sendL')){
       
        $username=$request->input('usernameL');
        $password=$request->input('passwordL');

        $user = Korisnik::where([
            ['korisnickoIme', '=', $username],
            ['lozinka', '=', md5($password)],
        ])->first();

        if($user){
            $request->session()->put("idKorisnik", $user->id);
          // dd($request->session()->get('idKorisnik'));
            return redirect()->route('dodajClanak');
        } else{
            return redirect()->back()->with('message','Pogresni podaci');
        }
        
    }
    }
    public function logout(Request $request){
        if($request->session()->has('idKorisnik')){

            $request->session()->forget('idKorisnik');
            $request->session()->flush();
            return redirect()->route('clanak.index');
        } 
    }
    
}
