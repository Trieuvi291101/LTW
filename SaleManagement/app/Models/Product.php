<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
 use HasFactory;
 protected $table = "product";
public $timestamps = false;
protected $fillable=['id','name','description','price','manufacturer','image','created_date','categoryId','num','active'];
 public function Category()
 {
 return $this->belongsTo(category::class);
 } 
}