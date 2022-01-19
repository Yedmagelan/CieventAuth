<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use App\Mail\ConfirMail;
use Mail;

class AdminController extends Controller
{
    //
    function index(){

        return view('dashbord.admin.index');
       }
    
       function users(){
        $users = User::orderBy('id','DESC')->get();
        return view('dashbord.admin.users', compact('users'));
    }

    // ======================== edit product =========== 
    function editUsers($id){

        $user = User::findOrFail($id);
        return view('dashbord.admin.editUser', compact('user'));
    }

      // ======================== update users =========================== 
    public function updateUsers(Request $request){
        $user_id = $request->id;
        User::findOrFail($user_id)->Update([
            'name' => $request->name,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'role' => $request->role,
            'contact' => $request->contact,
            'password' => $request->password,
            'update_at' => Carbon::now(),
        ]);

        return Redirect()->route('admin.users')->with('success','Utilisateur a été modifié avec succèss');
    }

    // Affiche le form de creation d'user
      function usersCreate(){
        return view('dashbord.admin.usersCreate'); 
     }

     // Affiche le form d'insertion d'user
      function usersInstore(Request $request) {

            $this->validate($request, [
            'name' => ['required', 'string', 'max:55'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contact' => ['required', 'string', 'min:8', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
           ]);
      
        //    User::create($request->all());
    
        //     $data = [
        //       'name' => $request->name,
        //       'prenom' => $request->prenom,
        //       'email' => $request->email,
        //       'contact' => $request->contact,
        //       'password' => $request->password,
        //       'subject' => "Confirmation d'accéss à ton compte",
        //       'message' => "Salut Mr",
        //     ];
            $user = new User();
            $user->name = $request->name;
            $user->prenom = $request->prenom;
            $user->email = $request->email;
            $user->role = 2;
            $user->contact = $request->contact;
            $user->status = 1;
            $user->password = \Hash::make($request->password);


            $userMail = new User();
            $userMail->name = $request->name;
            $userMail->prenom = $request->prenom;
            $userMail->email = $request->email;
            $userMail->subject = "Confirmation d'accéss à ton compte";
            $userMail->password = $request->password;

            Mail::to($userMail->email)->send(new ConfirMail($userMail));
      
            if( $user->save() ){
                return back()->with('success', 'Bravo!, ce compte a bien été crée avec succèss
                et un message a bien été envoyé à sa boite email.');
                // return redirect()->back()->with('success','Vous êtes maintenant enregistré avec succès');
             }else{
                 return redirect()->back()->with('error','Inscription echouée');
             }
          
        }
    
      
      // Affiche le profile d'unser
       function profile(){
           return view('dashbord.admin.profile');
       }
       function settings(){
           return view('dashbord.admin.setting');
       }

       // status active 
        function active($id){
            User::findOrFail($id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Utilisateur a été activé avec sucèss');
        }
        // status desactive 
         function desactive($id){
          User::findOrFail($id)->update(['status' => 2]);
        return Redirect()->back()->with('status','Utilisateur a été désactivé');
    }


}

