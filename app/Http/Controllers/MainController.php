<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product,Cart};

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['images'] = Product::where('category', 'Image')->take(4)->get();
        $this->data['videos'] = Product::where('category', 'Video')->take(4)->get();
        $this->data['vectors'] = Product::where('category', 'Vector')->take(4)->get();
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        return view ('welcome', $this->data);
    }

    public function creative() {
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        $this->data['page_title'] = "Creative Products";
        $this->data['record'] = Product::where('category', 'Image')->get();
        return view ('homepage.creative', $this->data);
    }

    public function video() {
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        $this->data['page_title'] = "Video Products";
        $this->data['record'] = Product::where('category', 'Video')->get();
        return view ('homepage.video', $this->data);
    }

    public function music() {
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        $this->data['page_title'] = "Music Products";
        $this->data['record'] = Product::where('category', 'Music')->get();
        return view ('homepage.music', $this->data);
    }
    public function vector() {
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        $this->data['page_title'] = "Vector Products";
        $this->data['record'] = Product::where('category', 'Vector')->get();
        return view ('homepage.vector', $this->data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();
        $this->data['page_title'] = "Filospace | View Product";
        $this->data['product'] = Product::find($id);
        return view ('homepage.show', $this->data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $this->data['page_title'] = "Searched Items";
        $this->data['keyword'] = $request->get('keyword');
        $this->data['tag'] = $request->get('tag');
        $ip_address = request()->ip();
        $this->data['cart'] = Cart::where('ip_address', $ip_address)->get();

        $this->data['searched_items'] = Product::where(function($query){
                                            if(strlen($this->data['keyword']) > 0){
                                                return $query->whereRaw("LOWER(title)  LIKE  '{$this->data['keyword']}%'")
                                                        ->orWhereRaw("LOWER(tags)  LIKE  '{$this->data['keyword']}%'")
                                                        ->orWhereRaw("LOWER(credit)  LIKE  '{$this->data['keyword']}%'")
                                                        ->orWhereRaw("LOWER(description)  LIKE  '{$this->data['keyword']}%'");
                                            }
                                        })
                                        ->where(function($query){
                                            if(strlen($this->data['tag']) > 0){
                                                return $query->where("category", $this->data['tag']);
                                            }
                                        })
                                        ->get();

        return view ('homepage.search', $this->data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
