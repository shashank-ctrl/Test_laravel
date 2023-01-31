<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use DB;
use Validator;

class RoleController extends Controller
{
    public function __construct()
    {
        
        $this->roles = new Role;

    }


    public function index(Request $request)
    {
        $roles = Role::latest()->paginate(5);
         //echo "<pre>";print_r($users);exit;

        return view('admin.roles.index', compact('roles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



    public function create()
    {
        return view('admin.roles.create');
    }


    public function store(Request $request)
    {

        $input = $request->all();
         //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'role' => 'required',
          
           
            
        ]);
        
        if ($validator->passes()) {
    
        if ($image = $request->file('user_img')) {
            $destinationPath = 'user/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['user_img'] = "$profileImage";
        }

          
     

        // if (isset($input['platform_selection'])) {
        //     $input['platform_selection'] = implode(" ", $input['platform_selection']);
        //     //$platform_selection = explode(" " ,$input['platform_selection']);
        //    //print_r($platform_selection);exit;
        // }
   
        
        $this->roles->addRole($input);
       
        return redirect()->route('admin.roles.index')->with('success','Role created successfully.');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function edit($id)
    {
       
         $roles = $this->roles->find($id);
        return view('admin.roles.edit')->with('roles', $roles);
        
    }



    public function update($id, Request $request)
    {
        $input = $request->all();
        //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'role' => 'required',
          
         
           
        ]);
     
        if ($validator->passes()) {
      
        if ($image = $request->file('user_img')) {
            $destinationPath = 'user/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['user_img'] = "$profileImage";
        }else{
            unset($input['user_img']);
        }

       
      
        $this->roles->updateRole($id, $input);
      
        return redirect()->route('admin.roles.index')->with('success','Role updated successfully');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function destroy(Request $request, $id)
    {
        //$cms = $this->cms->deleteUser($request->id);
       DB::delete('delete from roles where id = ?',[$request->id]);
     
        return redirect()->route('admin.roles.index')
                        ->with('success','Role deleted successfully');
    }


}
