<?php
//名前空間
namespace App;

use Illuminate\Database\Eloquent\Model;
//抽象クラス
class Article extends Model
{
   // @var string

  protected $table = 'articles';

  	//@var array
  protected $fillable =['title','body'];
}
