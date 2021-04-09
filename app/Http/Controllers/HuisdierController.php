<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HuisdierController extends Controller
{
    public function mijnhuisdier(\App\Models\Huisdier $huisdier){
        $id = auth()->user()->id;
        $baasje_id = DB::table('huisdier')->select('baasje_id')->where('baasje_id', '=', $id)->value('baasje_id');
        if($id === $baasje_id){
            return view('huisdier.show_huisdier', [
                'huisdier' => \App\Models\Huisdier::find($id),
            ]);
        }else{
            return redirect('/');
        }
    }

    public function index(){
        return view('huisdier.index', [
            'huisdier' => \App\Models\Huisdier::all()
        ]);
    }

    public function show($id){

        return view('huisdier.show', [
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);
    }

    public function create(){
        return view('huisdier.create', ['huisdier' => \App\Models\Huisdier::all()]);
    }

    public function store(Request $request, \App\Models\Huisdier $huisdier){
        $huisdier->huisdiernaam = $request->input('huisdiernaam');
        $huisdier->soort = $request->input('soort');
        $huisdier->oppasDatum = $request->input('oppasDatum');
        $huisdier->huisdierInformatie = $request->input('huisdierInformatie');
        $huisdier->uurtarief = $request->input('uurtarief');
        $huisdier->duurOppas = $request->input('duurOppas');
        $huisdier->image = $request->input('image');

        try{
            $huisdier->save();
            return redirect('/huisdier');
        }
        catch(exception $e){
            return redirect('/huisdier/create');
        }
    }

}

