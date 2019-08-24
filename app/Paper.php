<?php

namespace App;
use App\Country;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{

    protected $fillable=['paper_ref','leadauthor','email','phone','country_id','papertitle','abstract','filename'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
}
