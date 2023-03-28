<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\{ ProductRequest, EditProductRequest };
use App\Models\{ Product };
use DB, Str, File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['record'] = Product::paginate(10);
        $this->data['page_title'] = "View Products";
        return view ('product.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page_title'] = "Add Products";
        return view ('product.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $product = new Product();
            $product->category = str::ucfirst($request->get('category'));
            $product->title = str::ucfirst($request->get('title'));
            $product->tags = str::ucfirst($request->get('tags'));
            $product->credit = str::ucfirst($request->get('credit'));
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            if ($request->hasFile('filename')) {
                // $destination = 'storage/avatars/'.$user->profile_image;
                // if(File::exists($destination))
                // {
                //     File::delete($destination);
                // }
                $file = $request->file('filename');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('storage/product/', $filename);
                $product->filename = $filename;
            }
            $product->save();
            DB::commit();

            session()->flash('notification-status', 'success');
            session()->flash('notification-msg', 'New product has been added.');

            return redirect()->route('product.index');
        } catch(\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', 'failed');
            session()->flash('notification-msg', "Server Error: Code #{$e->getMessage()}");
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->data['page_title'] = "Edit Product";
        $this->data['product'] = Product::find($id);
        return view ('product.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductRequest $request, $id)
    {
        $product = Product::find($id);
        DB::beginTransaction();
        try {
            if ($request->hasFile('filename')) {
                $destination = 'storage/product/'.$product->filename;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('filename');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('storage/product/', $filename);
                $product->filename = $filename;
            }
            $product->category = str::ucfirst($request->get('category'));
            $product->title = str::ucfirst($request->get('title'));
            $product->tags = str::ucfirst($request->get('tags'));
            $product->credit = str::ucfirst($request->get('credit'));
            $product->description = $request->get('description');
            $product->price = $request->get('price');
            $product->save();
            session()->flash('notification-status', 'success');
            session()->flash('notification-msg', 'Product has been updated.');
            DB::commit();
            return redirect()->route('product.index');
        } catch(\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', 'failed');
            session()->flash('notification-msg', "Server Error: Code #{$e->getMessage()}");
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $image_path = 'storage/product/'.$product->filename;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $product->delete();
        session()->flash('notification-status', 'success');
        session()->flash('notification-msg', 'Product has been deleted.');
        return redirect()->back();
    }
}
