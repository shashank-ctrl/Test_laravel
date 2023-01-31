<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        
        $this->products = new Product;

    }


    public function index(Request $request)
    {
        $products = Product::latest()->paginate(5);
        //print_r($product);exit;

        return view('admin.products.index', compact('products'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()
    {
        return view('admin.products.create');
    }


    public function store(Request $request)
    {

        $input = $request->all();
      //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'project_name' => 'required',
            'category_selection' => 'required',
            'platform_selection' => 'required',
            'hero_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
        
        if ($validator->passes()) {
        $input['status'] = isset($input['status']) ? 0 : 1 ;
        
        
        $input['slug'] = str_slug($input['project_name']);
        

        $checkSlugExistOrNot = $this->portfolio->getPortfoliosUsingSlug($input['slug']);
        //print_r($checkSlugExistOrNot);exit;
        if (!is_null($checkSlugExistOrNot)) {
            $input['slug'] = $input['slug'].'-'.rand(0,999);
        }


      
        if ($image = $request->file('pro_img')) {
            $destinationPath = 'product/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['pro_img'] = "$profileImage";
        }

          
       
        if($request->hasfile('proj_sub_img'))
        {
           foreach($request->file('proj_sub_img') as $file)
           {
                $name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/project/';
                $file->move($path, $name);
                $Imgdata[] = $name;
           }
           $input['proj_sub_img'] = implode(',', $Imgdata);
        }
        

        if (isset($input['platform_selection'])) {
            $input['platform_selection'] = implode(" ", $input['platform_selection']);
            //$platform_selection = explode(" " ,$input['platform_selection']);
           //print_r($platform_selection);exit;
        }
   
        if (isset($input['category_selection'])) {
            $input['category_selection'] = implode(',', $input['category_selection']);
            //$platform_selection = explode(" " ,$input['platform_selection']);
           //print_r($platform_selection);exit;
        }
        
        $this->products->addProduct($input);
       // DB::insert('insert into portfolios (project_name,status, category_selection, platform_selection, tech_stack,tags, hero_img, description,client_name,slug,company_name,country) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [$input['project_name'],$input['status'],$input['category_selection'],$input['platform_selection'],$input['tech_stack'],$input['tags'],$input['hero_img'],$input['description'],$input['client_name'],$input['slug'],$input['company_name'],$input['country']]);
     
        return redirect()->route('admin.products.index')->with('success','Portfolio created successfully.');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }




    public function show($id)
    {
        $portfolio = $this->portfolio->findPortfolios($id);
        //echo "<pre>";print_r($portfolio);exit;

        return view('pages.account.portfolio.show',compact('portfolio'));
    }



    public function edit($id)
    {
       
         $portfolio = $this->portfolio->find($id);
        // //echo "<pre>";print_r($portfolio);exit;
        // return view('pages.account.portfolio.edit',compact('portfolio'));
        //$portfolio = Portfolio::find($id);
        return view('pages.account.portfolio.edit')
            ->with('portfolio', $portfolio);
    }



    public function update($id, Request $request)
    {
        $input = $request->all();
        //echo "<pre>";print_r($input);exit;

        $validator = Validator::make($input,[
            'project_name' => 'required',
            'category_selection' => 'required',
            // 'client_name' => 'required',
            //'hero_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            //'proj_sub_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
     
        if ($validator->passes()) {
        $input['status'] = isset($input['status']) ? 0 : 1 ;
       // echo "<pre>";print_r($input['status']);exit;
  

       $input['slug'] = str_slug($input['project_name']);

       $checkSlugExistOrNot = $this->portfolio->getPortfoliosUsingSlug($input['slug']);
       if (!is_null($checkSlugExistOrNot)) {
           $input['slug'] = $input['slug'].'-'.rand(0,999);
       }

  
     

        if ($image = $request->file('hero_img')) {
            $destinationPath = 'portfolio/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['hero_img'] = "$profileImage";
        }else{
            unset($input['hero_img']);
        }

       

        if($request->hasfile('proj_sub_img'))
        {
           foreach($request->file('proj_sub_img') as $file)
           {
                $name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
                $path = public_path() . '/project/';
                $file->move($path, $name);
                $Imgdata[] = $name;
           }
           $input['proj_sub_img'] = implode(',', $Imgdata);

        }else{
            unset($input['proj_sub_img']);
        }

        // if ($image = $request->file('proj_sub_img')) {
        //     $destinationPath = 'project/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['proj_sub_img'] = "$profileImage";
        // }
        // else{
        //     unset($input['proj_sub_img']);
        // }


        // $project_name = $request->input('project_name');
        // $status = $request->input('status');
        // $category_selection = $request->input('category_selection');
        // $platform_selection = $request->input('platform_selection');
        // $tech_stack = $request->input('tech_stack');
        // $hero_img = $request->input('hero_img');
        // $proj_sub_img = $request->input('proj_sub_img');
        // $description = $request->input('description');
        // $client_name = $request->input('client_name');
        // $company_name = $request->input('company_name');
        // $country = $request->input('country');
      
        if (isset($input['platform_selection'])) {
            $input['platform_selection'] = implode(" ", $input['platform_selection']);
            //$platform_selection = explode(" " ,$input['platform_selection']);
           //print_r($platform_selection);exit;
        }

        if (isset($input['category_selection'])) {
            $input['category_selection'] = implode(',', $input['category_selection']);
            //$platform_selection = explode(" " ,$input['platform_selection']);
           //print_r($platform_selection);exit;
        }
       
        $this->portfolio->updatePortfolios($id, $input);
      
        return redirect()->route('portfolio.index')->with('success','Portfolio updated successfully');
    }

        return redirect()->back()->withErrors($validator)->withInput();
    }



    public function destroy(Request $request, $id)
    {
       
       DB::delete('delete from portfolios where id = ?',[$request->id]);
     
        return redirect()->route('portfolio.index')
                        ->with('success','Portfolio deleted successfully');
    }

   
}
