<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Proprice;
use Validator;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Exports\ExportUser;

class PropriceController extends Controller
{
    public function __construct()
    {
        
        $this->proprice = new Proprice;

    }


    public function index(Request $request)
    {
        $proprice = Proprice::latest()->paginate(5);
        //print_r($product);exit;

        return view('admin.proprice.index', compact('proprice'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('admin.proprice.create');
    }


    public function store(Request $request)
    {

        $input = $request->all();
      //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'part_type' => 'required',
            'product_info' => 'required',

        ]);
        
        if ($validator->passes()) {
        
        $this->proprice->addProprice($input);
       // DB::insert('insert into portfolios (project_name,status, category_selection, platform_selection, tech_stack,tags, hero_img, description,client_name,slug,company_name,country) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$input['project_name'],$input['status'],$input['category_selection'],$input['platform_selection'],$input['tech_stack'],$input['tags'],$input['hero_img'],$input['description'],$input['client_name'],$input['slug'],$input['company_name'],$input['country']]);
     
        return redirect()->route('admin.proprice.index')->with('success','Product created successfully.');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function edit($id)
    {
       
         $proprice = $this->proprice->find($id);
         //$roles = Role::with('users')->get();
         //echo "<pre>";print_r($roles);exit;

         return view('admin.proprice.edit',compact('proprice'));
        
    }



    public function update($id, Request $request)
    {
        $input = $request->all();
        //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'part_type' => 'required',
            'product_info' => 'required',
         
           
        ]);
     
        if ($validator->passes()) {
      
      
        $this->proprice->updateProprice($id, $input);
      
        return redirect()->route('admin.proprice.index')->with('success','Proprice updated successfully');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function destroy(Request $request, $id)
    {
        //$cms = $this->cms->deleteUser($request->id);
       DB::delete('delete from proprices where id = ?',[$request->id]);
     
        return redirect()->route('admin.proprice.index')
                        ->with('success','Proprice deleted successfully');
    }


   
    public function importView(Request $request){

        return view('importFile');
    }

    public function import(Request $request){

        Excel::import(new ImportUser, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function exportUsers(Request $request){
        
        return Excel::download(new ExportUser, 'product.xlsx');
    }
   
}
