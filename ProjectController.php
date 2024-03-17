<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects(){
        $users = Project::all();

        $data = compact('users');

        return view('admin.projects')->with($data);
    }

    public function addProject(){
        return view('admin.addproject');
    }

    public function addProjectStore(Request $request){
        echo '<pre>';
        print_r($request->all());
        $request->validate([
            'name' => 'required|min:3|unique:projects',
            // 'job_reference' => 'required',
            'client' => 'required|min:3',
            'site_address' => 'required',
            'proposal' => 'required'
        ]);




        $users = new Project();
        $users->name = $request->name;
        $users->job_reference = $request->job_reference;
        $users->client = $request->client;
        $users->site_address = $request->site_address;
        $users->proposal = $request->proposal;
        $users->save();
        return redirect('projects')->with('success','Project registered successfully');
    }

    
  

    public function editProject($id){
        $users = Project::find($id);

        $data = compact('users');

        return view('admin.editproject')->with($data);
    }


    public function updateProject(Request $request, $id){
       
        $request->validate([
            'name' => 'required|min:3',
            // 'job_reference' => 'required',
            'client' => 'required|min:3',
            'site_address' => 'required',
            'proposal' => 'required'    
        ]);

        $users =  Project::find($id);

        
        $users->name = $request->name;
        $users->job_reference = $request->job_reference;
        $users->client = $request->client;
        $users->site_address = $request->site_address;
        $users->proposal = $request->proposal;
        $users->save();
        return redirect('projects')->with('success','Project updated successfully');
        
    }


    public function deleteProject($id){

        $users =  Project::find($id);
        $users->status = 0;

        $users->save();
        return redirect('projects')->with('success','Project deleted successfully');
        
    }

    public function showProject($id){
        $projects = Project::find($id);

        $data = compact('projects');

        return view('admin.showproject')->with($data);
    }

}
