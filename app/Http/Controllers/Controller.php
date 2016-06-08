<?php
//名前空間
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
//抽象クラス
class ArticleController extends Controller
{
   protected $article;

   public function __construct(Article $article){
   	$this->article =$article;
   }

   public function getIndex(){
   	$articles = $this->article->all();

   	return view('articles.index')->with(compact('articles'));
   }

   public function gethow(){

   }

   public function postCreate(){

   }

   public function getEdit(){

   }

   public function postEit(){

   }

   public function postDelete(){

   }
}
