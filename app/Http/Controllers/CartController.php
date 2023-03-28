<?php

namespace App\Http\Controllers;

use App\Models\{Product,Cart};
use Illuminate\Http\Request;

use DB, Carbon;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request , $id)
    {
        $product = Product::find($id);
        DB::beginTransaction();
        try {
            $cart = new Cart();
            $cart->ip_address = request()->ip();
            $cart->product_id = $product->id;
            $cart->save();
            DB::commit();
            session()->flash('notification-status', 'success');
            session()->flash('notification-msg', 'Product has been added to cart');
            return redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('notification-status', 'failed');
            session()->flash('notification-msg', 'Server Error: Code #{$e->getMessage()}');
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
