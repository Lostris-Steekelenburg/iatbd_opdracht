<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class OppasController extends Controller
{
    public function index(){
        return view('oppas.index', [
            'oppas' => \App\Models\Oppas::all()
        ]);
    }

    public function show($id){

        return view('oppas.show', [
            'oppas' => \App\Models\Oppas::find($id),
        ]);
    }

    public function create(){
        return view('oppas.create', ['oppas' => \App\Models\Oppas::all()]);
    }

    public function store(Request $request, \App\Models\Oppas $oppas){
        $oppas->naam_oppas = $request->input('naam_oppas');
        $oppas->last_name = $request->input('last_name');
        $oppas->email = $request->input('email');
        $oppas->image = $request->input('image');

        try{
            $oppas->save();
            return redirect('/');
        }
        catch(exception $e){
            return redirect('/oppas/create');
        }
    }

    public function delete($id){

        return view('oppas.destroy', [
            'oppas' => \App\Models\Oppas::find($id),
        ]);
    }
    

    public function destroy(Request $request, \App\Models\Oppas $oppas){
        $naam_oppas = $request->input('naam_oppas');
        try{
            DB::delete('delete from oppas where naam_oppas = ?',[$naam_oppas]);
            return redirect('/');
        }
        catch(exception $e){
            return redirect('/oppas/create');
        }
        

    }

    public function review(Request $request, \App\Models\Oppas $oppas){
        $naam_oppas = $request->input('naam_oppas');
        $review = $request->input('review');

        try{
            DB::table('oppas')
              ->where('naam_oppas', $naam_oppas)
              ->update(['review' => $review]);
              return redirect('/');
        }
        catch(exception $e){
            return redirect('/oppasAccepteer');
        }
    }
}
