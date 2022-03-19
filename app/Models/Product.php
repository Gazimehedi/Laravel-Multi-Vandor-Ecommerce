<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug','rate','description','sku','vandor_id','opening_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function vandor(){
        return $this->belongsTo(User::class,'vandor_id');
    }
    public function opening(){
        return $this->belongsTo(ProductOpening::class,'opening_id');
    }
}
