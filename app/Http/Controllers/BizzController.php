<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BizzController extends Controller
{
    public function  add_biz()
    {
        return view('biz.create');
    }

        public function store_biz(Request $request)
    {

        $i = 0;
        $list = [];
        $img;

        foreach ($request->file() as $file) {
            foreach ($file as $f) {
                $f->move(storage_path('app/public/biz'), time() . '_' . $f->getClientOriginalName());
                $list[$i] =  time() . '_' . $f->getClientOriginalName();
                $i++;
            }
            $img  = json_encode($list);
            $record = new Biz;

            $record->category = $request->cat;
            $record->city     = $request->city;
            $record->title    = $request->header;
            $record->text     =  $request->text;
            $record->img      = $img;
            $record->save();

//echo $request->input('text');
            // return "Успех";
            return   redirect('add_biz')->with('success','ип добавлено !');
        }
    }

    public function show_cat($cat)
    {
        //echo $cat;
        $data = Biz::where('category', '===', $cat)->paginate(8);

        return view('biz.show_cat',compact($data));
    }

    public function  electro()
    {
        $path = storage_path('');

        //echo $path;
       // die();

        $quest = file_get_contents($path.'/2.txt');
        $resp = file_get_contents($path.'/3.txt');

        $key = explode("\n", $quest);
        $val = explode("\n", $resp);

//echo count($key);

        $out =   array_combine($key,$val);
        $i;

        return view('biz.electro',compact('out'));

    }
}
