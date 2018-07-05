<?php

namespace App\Http\Controllers;

use App\Content;
use App\News;
use App\Temceen;
use App\Deedmenu;
use App\Deedmenusub;
use App\Doodmedee;
use App\Doodmenusub;
use Illuminate\Http\Request;

class PagesController extends Controller
{




    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    public function mission_show()
    {
    }
    
    public function index(Request $request)
    {
        $doodmedee = Doodmedee::where('show_on_home', true)->with('members')->first();
        return view('welcome')->with(compact('doodmedee'));
    }
    public function submenu_show($id){

        $doodmenusub = Doodmenusub::find($id);

        $doodmedee = $doodmenusub->doodmedee()->with('members')->first();

        return view('welcome')->with(compact('doodmedee'));
    }
    public function main_menu_show($id){
        $menu = Deedmenu::find($id);
        $news = $menu->news()->latest()->paginate(10);
        return view('index')->with(compact('news', 'menu'));
    }
    public function main_submenu_show($id){
        $menu = Deedmenusub::find($id);
        $news = $menu->news()->latest()->paginate(10);
        return view('index')->with(compact('news', 'menu'));
    }
    public function news_index(Request $request)
    {
        $contents_tag = Tag::where('title', 'мэдээ мэдээлэл')->first();
        $contents = null;
        if($contents_tag){
            $contents = $contents_tag->contents()->latest()->paginate(10);
        }
        return view('index')->with(compact('contents', 'contents_tag'));
    }
    public function duguilan_show($id)
    {
        $content = Content::with('members')->find($id);
        return view('show')->with(compact('content'));
    }
    public function news_show($id)
    {
        $content = News::find($id);
        return view('event_show')->with(compact('content'));
    }
    public function event_show($id)
    {
        $content = Temceen::find($id);
        return view('event_show')->with(compact('content'));
    }
    public function event_index()
    {
        $contents = Temceen::latest()->paginate(10);
        return view('event_index')->with(compact('contents'));
    }
    public function about_index(Request $request)
    {
        $contents_tag = Tag::where('title', 'Танилцуулга')->first();
        $contents = null;
        if($contents_tag){
            $contents = $contents_tag->contents()->latest()->paginate(10);
        }
        return view('index')->with(compact('contents', 'contents_tag'));
    }
    public function law_index(Request $request)
    {
        $contents_tag = Tag::where('title', 'хууль эрх зүй')->first();
        $contents = null;
        if($contents_tag){
            $contents = $contents_tag->contents()->latest()->paginate(10);
        }
        return view('index')->with(compact('contents', 'contents_tag'));
    }
    public function class_index(Request $request)
    {
        // duguilangiin
        $urlag = Tag::where('title', 'урлаг')->with('contents')->first();
        $uranButeel = Tag::where('title', 'уран бүтээл')->with('contents')->first();
        $hel = Tag::where('title', 'хэл')->with('contents')->first();
        return view('class')->with(compact('urlag', 'uranButeel', 'hel'));
    }
    public function transparency_index(Request $request)
    {
        $contents_tag = Tag::where('title', 'Шилэн данс')->first();
        $contents = null;
        if($contents_tag){
            $contents = $contents_tag->contents()->latest()->paginate(10);
        }
        return view('index')->with(compact('contents', 'contents_tag'));
    }
}
