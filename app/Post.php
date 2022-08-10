<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates=['fechaPublicacion'];

    public function categoria()// $post-> categoria->get
{
return $this->belongsTo(Categoria::class);
}

   public function tags()
{
return $this->belongsToMany(Tag::class);
}


}


