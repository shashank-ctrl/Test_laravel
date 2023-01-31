<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    public function __construct()
    {
        
        $this->users = new User;
        $this->role = new Role;

    }


    public function index(Request $request)
    {
        //$users = User::latest()->paginate(5);
         //echo "<pre>";print_r($users);exit;

         $users = User::with('roles')->get();     
         $roles = Role::with('users')->get();
         
        return view('admin.users.index', compact('users','roles'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('admin.users.create');
    }   


    public function store(Request $request)
    {

        $input = $request->all();
         //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
           
            
        ]);
        
        if ($validator->passes()) {
    
        if ($image = $request->file('user_img')) {
            $destinationPath = 'user/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['user_img'] = "$profileImage";
        }

          
    
        $request['password']=Hash::make($request['password']);
        
        // if (isset($input['platform_selection'])) {
        //     $input['platform_selection'] = implode(" ", $input['platform_selection']);
        //     //$platform_selection = explode(" " ,$input['platform_selection']);
        //    //print_r($platform_selection);exit;
        // }
   
        
        $this->users->addUser($input);
       
        return redirect()->route('admin.users.index')->with('success','User created successfully.');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function edit($id)
    {
       
         $users = $this->users->find($id);
         $roles = Role::with('users')->get();
         //echo "<pre>";print_r($roles);exit;

         return view('admin.users.edit',compact('users', 'roles'));
        
    }



    public function update($id, Request $request)
    {
        $input = $request->all();
        //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'name' => 'required',
            'email' => 'required',
         
           
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

       
      
        $this->users->updateUser($id, $input);
      
        return redirect()->route('admin.users.index')->with('success','User updated successfully');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function destroy(Request $request, $id)
    {
        //$cms = $this->cms->deleteUser($request->id);
       DB::delete('delete from users where id = ?',[$request->id]);
     
        return redirect()->route('admin.users.index')
                        ->with('success','User deleted successfully');
    }




}
