<?php

namespace App\Http\Controllers;

use App\Cheflieu;
use App\Commune;
use App\Domaine;
use App\Indicateur;
use App\Langue;
use App\Oph;
use App\Province;
use App\Region;
use App\TypeHandicap;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $indicateurs = Indicateur::all();
        $domaines = Domaine::all()->sortBy("libelle");
        $regions = Region::all()->sortBy("libelle");
        $ophs = Oph::all()->sortBy("nomOph");
        $cheflies = Cheflieu::all();
        $provinces = Province::all();
        $communes = Commune::all();
        $handicaps = TypeHandicap::all()->sortBy("libelle");;
        $langues = Langue::all()->sortBy("libelle");;



        return view('handi-admin.index',compact('indicateurs','regions','ophs','cheflies','provinces','communes','handicaps','langues','domaines'));
    }
}
