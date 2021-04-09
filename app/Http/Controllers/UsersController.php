<?php

namespace App\Http\Controllers;
use DB;
use AUTH;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show(){

        return view('gebruiker.show');
    }

    public function reactie(){
        $role = "Oppas";
        $oppas = DB::table('users')->select('name')->where('role', '=', $role)->value('name');
        return view('gebruiker.reactie', [
            'oppas' => $oppas,
        ]);
    }

    public function oppas_accept(){
        $role = "Oppas";
        $oppas = DB::table('users')->select('name')->where('role', '=', $role)->value('name');
        return view('gebruiker.accept', [
            'oppas' => $oppas,
        ]);
    }

    public function update_role_gast(Request $request, \App\Models\Users $user){
        $name = $request->input('name');
        try{
            DB::table('users')
              ->where('name', $name)
              ->update(['role' => 'Gast']);
              return redirect('/');
        }
        catch(exception $e){
            return redirect('/blokkeer');
        }
        

    }

    public function update_role(Request $request, \App\Models\Users $user){
        $name = $request->input('name');
        try{
            DB::table('users')
              ->where('name', $name)
              ->update(['role' => 'Oppas']);
              return redirect('/');
        }
        catch(exception $e){
            return redirect('/blokkeer');
        }
        

    }

    public function delete(){

        return view('gebruiker.blokkeer');
    }
    

    public function update(Request $request, \App\Models\Users $user){
        $name = $request->input('name');
        try{
            DB::table('users')
              ->where('name', $name)
              ->update(['banned_until' => '2022-01-01 00:00:00']);
              return redirect('/');
        }
        catch(exception $e){
            return redirect('/blokkeer');
        }
        

    }

    public function update_deblokkeer(Request $request, \App\Models\Users $user){
        $name = $request->input('name');
        try{
            DB::table('users')
              ->where('name', $name)
              ->update(['banned_until' => NULL]);
              return redirect('/');
        }
        catch(exception $e){
            return redirect('/blokkeer');
        }
        

    }
}
