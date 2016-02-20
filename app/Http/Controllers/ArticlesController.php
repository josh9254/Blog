<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;
use App\Http\Requests\ArticleRequest;


class ArticlesController extends Controller
{
    public function index(Request $request){
    	$articles = Article::Search($request->title)->orderBy('id','DESC')->paginate(5);
    	$articles->each(function($articles){
    		$articles->category;
    		$articles->user;

    	});
    	return view ('admin.articles.index')->with('articles',$articles);

    }
    public function create(){
    	$categories = Category::orderby('name','ASC')->lists('name','id');
    	$tags = Tag::orderBy('name','ASC')->lists('name','id');

    	return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
    }
    public function store(Request $request){
 
    	//MANIPULACION DE IMAGENES 
     	if($request->file('image')){
    	$file = $request->file('image');
    	$name = 'blog_'.time().'.'. $file->getClientOriginalExtension();
    	$path = public_path() .'/images/articles/';
    	$file->move($path,$name);
    	} 
    	$article = new Article($request->all());
    	$article->user_id = \Auth::user()->id;
    	$article->save();

    	$article-> tags()->sync($request->tags);

    	$image = new Image();
    	$image->name = $name;
    	$image->article()->associate($article);
    	$image->save();

    	Flash::success('Se ha creado el articulo '.$article->title.'de forma satisfactoria');
    	return redirect()->route('admin.articles.index');
    }
    public function update(Request $request, $id){

        $article = Article::find($id);
        $article->fill($request->all());
        $article->save();
        $article-> tags()->sync($request->tags);
        Flash::warning('Se ha editado el articulo '.$article->title.'de forma exitosa!');
        return redirect()->route('admin.articles.index');

    }

      public function edit($id){

        $article = Article::find($id);
        $article->category;
        $categories = Category::orderBy('name','DESC')->lists('name', 'id');
        $tags = Tag::orderBy('name','DESC')->lists('name', 'id');

        $my_tags = $article->tags->lists('id')->toArray();
     
        return view('admin.articles.edit')->with('categories',$categories)->with('article',$article)->with('tags',$tags)->with('my_tags',$my_tags);

    }

    public function destroy($id){

        $article = Article::find($id);
        $article ->delete();

        Flash::error('El articulo '. $article->title .' ha sido borrado con exito');
        return redirect()->route('admin.articles.index');
    }
}
