<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $fillable = ['title', 'surname', 'firstname', 'othername', 'organization', 'department', 'country_id', 'phone', 'email', 'editor_image'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
