<?php

namespace GdaDesenv\GdaAbout\Controllers;

use App\Http\Controllers\Controller;
use GdaDesenv\GdaAbout\Entities\About;
use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    function index()
    {
        if( !empty(About::find(1)) ){
            $about = About::find(1);
        }else{
            $about = new About();
        }
        return view('GdaAbout::about.index',compact('about'));
    }

    function update(Request $request)
    {
        if( !empty(About::find(1)) ){
            $about = About::find(1);
        }else{
            $about = new About();
        }
        $about->about = $request->input('about');
        $about->save();
        return redirect()->route('about',['about' => $about])->with('success', 'Sobre salvo com sucesso!');
    }
}
