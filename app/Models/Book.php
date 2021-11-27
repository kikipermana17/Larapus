<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $visible = ['title', 'author_id', 'amount', 'cover'];
    protected $fillable = ['title', 'author_id', 'amount', 'cover'];
    public $timestamps = true;

    public function author()
    {
        return $this->belongsTo('App\Models\author', 'author_id');
    }

    public function image()
    {
        if ($this->cover && file_exists(public_path('image/book/' . $this->cover))) {
            return asset('image/book/' . $this->cover);
        } else {
            return asset('image/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('image/book/' . $this->cover))) {
            return unlink(public_path('image/book/' . $this->cover));
        }

    }

}
