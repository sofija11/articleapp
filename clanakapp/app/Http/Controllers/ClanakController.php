<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Clanak;
use App\Models\Korisnik;
use Illuminate\Http\Request;

class ClanakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $model;

    public function __construct(){
        $this->model = new Clanak();
    }

    public function index()
    {
        $clanci = DB::table('clanaks')
        ->join('korisniks', 'korisniks.id', '=', 'clanaks.idKorisnik')
        ->select('clanaks.*', 'korisniks.korisnickoIme')
        ->get();
        //dd($clanci);
        return view("clanci",['clanci' => $clanci]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
       $idKorisnika = $request->session()->get('idKorisnik');
       $naslov = $request->input('naslov');
       $tekstClanka = $request->input('tekstClanka');
       
       $clanak = new Clanak;
       $clanak->naslov = $naslov;
       $clanak->tekst = $tekstClanka;
       $clanak->idKorisnik = $idKorisnika;
       $clanak->save();
       return \redirect()->route('clanak.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
