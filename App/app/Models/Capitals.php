<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Capitals extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'capitals';
    public $timestamps = false;
    protected $softDeletes = true;
    protected $fillable = ['photo_url', 'name', 'country', 'population'];

    public function setPhotoUrlAttribute($value)    {
        $this->attributes['photo_url'] = $value;
    }
    public function setNameAttribute($value)    {
        $this->attributes['name'] = $value;
    }
    public function setCountryAttribute($value)    {
        $this->attributes['country'] = $value;
    }
    public function setPopulationAttribute($value)    {
        $this->attributes['population'] = $value;
    }
}
