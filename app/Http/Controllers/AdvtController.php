<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\Auth;

class AdvtController extends Controller
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

        $i = 0;
        $cat = Category::all();
       // $data = $cat['name'];
        foreach ($cat as $item) {
            $data[$i] = $item->name;
            $i++;
        }

        return view('advt.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store2(Request $request)
    {
        dd($request);
    }




    public function store(Request $request)
    {


           $i = 0;
           $list = [];
           $img;

        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('images'), time() . '_' . $f->getClientOriginalName());
                $list[$i] =  time() . '_' . $f->getClientOriginalName();
              $i++;
            }

            $img  = json_encode($list);


            $record = new Advt;
            $record->user_id = Auth::id();
            $record->category_id = $request->category;
            $record->title = $request->header;
            $record->text  =  $request->text;
            $record->price =$request->price;
            $record->img = $img;
            $record->save();

//echo $request->input('text');
           // return "Успех";
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
