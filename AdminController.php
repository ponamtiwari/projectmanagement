<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function addTeam(){
        return view('admin.addteam');
    }

    public function addTeamStore(Request $request){
        echo '<pre>';
        print_r($request->all());
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'phone' => 'min:10 | numeric',
            'password' => 'required | min:6 |confirmed',
            'password_confirmation' => 'required'
        ]);

        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->password = $request->password;
        $users->save();
        return redirect('teamlist')->with('success','user registered successfully');
    }

    
    public function teamMemberList(){
        $users = User::all();

        $data = compact('users');

        return view('admin.teammemberlist')->with($data);
    }


    public function editTeam($id){
        $users = User::find($id);

        $data = compact('users');

        return view('admin.editteam')->with($data);
    }


    public function updateTeam(Request $request, $id){
       
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'min:10 | numeric',
        ]);

        $users =  User::find($id);

        $users->name = $request->name;
        $users->email = $request->email;
        $users->phone = $request->phone;
        $users->save();
        return redirect('teamlist')->with('success','user updated successfully');
        
    }


    public function deleteTeam($id){

        $users =  User::find($id);

        $users->delete();
        return redirect('teamlist')->with('success','user updated successfully');
        
    }

    
}
