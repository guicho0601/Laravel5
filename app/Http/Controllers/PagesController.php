<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index(){
        $lessons = ['My First lesson','My second lesson', 'My Third Lesson'];
        $name = 'Luis';
        $html = '<em>Hola</em>';
        //return view('pages.home',array('lessons'=>$lessons,'name'=>$name,'html'=>$html));
        //return view('pages.home')->with('lessons',$lessons);
        //return view('pages.home')->withLessons($lessons);
        return view('pages.home',compact('lessons','name'));
    }

    public function about(){
        return view('pages.about');
    }

}
