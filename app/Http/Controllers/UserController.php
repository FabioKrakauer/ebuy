<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \App\User;

class UserController extends Controller
{
    public function viewEditPage(){
        $user = Auth::user();
        return view('editprofile')->with('user', $user);
    }
    public function editProfile(Request $r){
        $user = Auth::user();
        $validate = $r->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:11',
            'born' => 'required|date|max:12|min:10',
            'file' => 'max:10000|mimes:jpg,jpeg,png,gif',
        ]);
       $newName = $user->img_perfil;
       if($r->hasFile('file')){
            $img = $r->file('file');
            $newName = $user->email."-".time()."." . $img->getClientOriginalExtension();
            $img->move(public_path("images"), $newName);
       }
       $user = User::find($user->id);
       $user->name = $r->input('name');
       $user->phone = $r->input('phone');
       $user->born = $r->input('born');
       $user->img_perfil = $newName;
       $user->save();
       return 'Perfil atualizado! <a href="/perfil"> Clique aqui para voltar </a>';
    }
}
