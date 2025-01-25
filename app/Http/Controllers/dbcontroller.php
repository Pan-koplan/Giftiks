<?php

namespace App\Http\Controllers;

use App\Models\gifts;
use App\Models\tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dbcontroller extends Controller{
    // функция добавления объектов в базу данных
    public function submit(Request $req) {
        $gift = new gifts();
        $gift->name = $req->input('descript_prompt');
        // $gift->description = "loxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx";
        // $gift->link = "lox";
        // $gift->tag = "lox";
        // $gift->photo = "lox";
        $gift->save();
        return redirect()->route('home')->with('success', 'Подарок успешно добавлен');
    }
    // получение данных из базы данных
    public function get(Request $req){
        $tag = tags::where('name', $req->input('descript_prompt'))->first();
        //dd($tag->id);
        $tag = tags::find($tag->id);
        $gift = gifts::find(1);        
        $tag = $tag->gifts;
        return view('Results', ['gifts' => $tag]);
    }
    public function gift_page($id){
        $gift = new gifts;
        $el = $gift->find($id);
        
        $photo_url[]= 'Images/wbshkaa_' . $id . '_1.jpg'; //добавляем возможные фото
        $photo = '/Images/wbshkaa_' . $id . '_2.jpg';
        if (Storage::exists($photo)) {
            $photo_url[]= '/Images/wbshkaa_' . $id . '_2.jpg';
        }
        $photo = '/Images/wbshkaa_' . $id . '_3.jpg';
        if (Storage::exists($photo)) {
            $photo_url[]= '/Images/wbshkaa_' . $id . '_3.jpg';
        }
        $photo = '/Images/wbshkaa_' . $id . '_4.jpg';
        if (Storage::exists($photo)) {
            $photo_url[]= '/Images/wbshkaa_' . $id . '_4.jpg';
        } 
        return view('Product', ['gift' => $el], ['photos' => $photo_url]);
    }
}


     





