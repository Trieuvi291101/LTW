<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Province extends Model
{
 use HasFactory;
 protected $table = "address";
public $timestamps = false;
protected $fillable=['id','info','ward_id' ];

public function Ward()
{
    return $this->belongsTo("ward::class");
} 
}