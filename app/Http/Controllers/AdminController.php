<?php

namespace App\Http\Controllers;

use App\Models\{Product,Inquiry, Dashboard};
use App\Http\Requests\{ CarouselRequest, EditCarouselRequest };
use Illuminate\Http\Request;

use DB, Str, File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['page_title'] = "Dashboard";
        $this->data['product'] = Product::count();
        $this->data['inquiry'] = Inquiry::count();
        return view('admin.index', $this->data);
    }

    public function dashboard() 
    {
        $this->data['page_title'] = "View Carousel";
        $this->data['record'] = Dashboard::paginate(10);
        return view('admin.dashboard', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->data['page_title'] = "Add Carousel";
        return view('admin.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarouselRequest $request)
    {
        DB::beginTransaction();
        try {
            $dashboard = new Dashboard();
            $dashboard->title = str::ucfirst($request->get('title'));
            if ($request->hasFile('filename')) {
                $file = $request->file('filename');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('storage/carousel/', $filename);
                $dashboard->filename = $filename;
            }
            $dashboard->save();
            DB::commit();

            session()->flash('notification-status', 'success');
            session()->flash('notification-msg', 'New carousel has been added.');

            return redirect()->route('admin.dashboard');
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
        $this->data['page_title'] = "Dashboard";
        $this->data['dashboard'] = Dashboard::find($id);
        return view('admin.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCarouselRequest $request, $id)
    {
        $dashboard = Dashboard::find($id);
        DB::beginTransaction();
        try {
            $dashboard->title = str::ucfirst($request->get('title'));
            if ($request->hasFile('filename')) {
                $destination = 'storage/carousel/'.$dashboard->filename;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('filename');
                $extention = $file->getClientOriginalExtension();
                $filename = time().'.'.$extention;
                $file->move('storage/carousel/', $filename);
                $dashboard->filename = $filename;
            }
            $dashboard->save();
            DB::commit();

            session()->flash('notification-status', 'success');
            session()->flash('notification-msg', 'Carousel has been updated.');

            return redirect()->route('admin.dashboard');
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
        $dashboard = Dashboard::find($id);
        $image_path = 'storage/carousel/'.$dashboard->filename;
        if(File::exists($image_path)) {
            File::delete($image_path);
        }
        $dashboard->delete();
        session()->flash('notification-status', 'success');
        session()->flash('notification-msg', 'Dashboard has been deleted.');
        return redirect()->back();
    }
}
