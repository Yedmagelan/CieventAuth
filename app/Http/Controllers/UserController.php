<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
   function index(){

    return view('dashbord.user.index');
   }

     // ========== PROFIL USERS =================
     function profile(){
        return view('dashbord.user.profile');
    }
   // ======================== updateprofil simple users =========================== 
   public function profileUsers(Request $request){
     $user_id = $request->id;
     User::findOrFail($user_id)->Update([
         'name' => $request->name,
         'prenom' => $request->prenom,
         'email' => $request->email,
         'contact' => $request->contact,
         'update_at' => Carbon::now(),
     ]);

     return Redirect()->back()->with('success','Modiffication réussie avec succèss');
 }

       // ======================== affiche le form Mot de passe =========================== 
       public function updatePwd(){
         return view('dashbord.user.profilepwd');

     }
   // Mot de pass utilisateur 
 public function pwdProfile(Request $request){
     $user_id = $request->id;
     $this->validate($request, [
         'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
     User::findOrFail($user_id)->Update([
         'password' => \Hash::make($request->password),
         'contact' => $request->password,
         'update_at' => Carbon::now(),
     ]);

     return Redirect()->back()->with('success','Mot de pass a bien été modifié avec succèss');
 }
   function settings(){
       return view('dashbord.user.setting');
   }
}
