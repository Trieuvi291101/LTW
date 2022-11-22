<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Province extends Model
{
 use HasFactory;
 protected $table = "district";
public $timestamps = false;
protected $fillable=['id','info','province_id' ];

 public function Ward()
 {
 return $this->hasMany("ward::class");
 }

public function Province()
{
    return $this->belongsTo("district::class");
} 
}