<?php

namespace App\Http\Controllers;

use App\Jobs\EditPicJob;
use App\Models\Category;
use App\Models\User;
use App\Models\UserMessage;
use Illuminate\Http\Request;
use App\Models\Advt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

class AdvtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $i = 0;
        $cat = Category::all();
       // $data = $cat['name'];
        foreach ($cat as $item) {
            //$data[$i] = $item->name;
            $data[$item->id] = $item->name;
           // $i++;
        }
       // $advert = Advt::all();

        return view('advt.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required|digits_between:2,5',
            'header' => 'required',
        ]);

           $i = 0;
           $list = [];
           $img;

        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('app/public'), time() . '_' . $f->getClientOriginalName());
                $list[$i] =  time() . '_' . $f->getClientOriginalName();
              $i++;
            }
            $img  = json_encode($list);
            $record = new Advt;
            $record->contact = Auth::user()->email;
            $record->category_id = $request->category;
            $record->city = $request->city;
            $record->title = $request->header;
            $record->text  =  $request->text;
            $record->price =$request->price;
            $record->img = $img;
            $record->save();

//echo $request->input('text');
           // return "Успех";
            return   redirect('advt/create')->with('success','Обьявление добавлено успешно !');
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
        $data = Advt::find($id);
        $data['cat'] = Category::find($data->category_id)->name;

        // dd($data);

        return view('advt/single_advt')->with('data', $data);
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
        //$advt = Advt::where('id', $id)->get();
        $advt = DB::table('advts')->where('id', $id)->first();

       // dd($advt);
        $img = $advt->img;

        $advt = DB::table('advts')->where('id', $id)->delete();

$out = [];

$out = json_decode($img, true);

        Storage::delete($out);

die();

        return redirect('/');

    }

    public function editPic($data)
    {
        EditPicJob::dispatch($data);
    }

    public function test()
    {
       // echo 'test';
       // $path = 'C:\OServer\domains\servicebox.loc\storage\app\public\magnezis.jpg';
       // echo $path;
       // die();    1648046441_Image-05.jpg

       // return $this->editPic($path);
        Storage::delete('1648046441_Image-05.jpg');

    }
    public  function send_message_form()
    {
       return view('advt/send_message');
    }

    public  function send_message(Request $request)
    {

        $record = new UserMessage();
        $record->user = Auth::user()->email;
        $record->message = $request->message;
        $record->save();



        return   redirect('send_message')->with('success','Сообщение отправлено !');
    }

    public function cat_form()
    {
        return view('admin.category_create');
    }

    public function add_cat(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories,name',
        ]);
         Category::create(['name' => $request->input('name')]);

        return view('admin.category_create')->with('success','Category created successfully');

    }


}
