<?php
//名前空間
namespace App;

use Illuminate\Database\Eloquent\Model;
//抽象クラス
class Article extends Model
{
    @var string

  protecred $table = 'articles';

  	@var array
  protecred $fillable =['title','body'];
}
