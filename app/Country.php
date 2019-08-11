<?php

namespace App;

use App\Paper;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function papers()
    {
        return $this->hasMany(Paper::class);
    }

    public function editorials()
    {
        return $this->hasMany(Editorial::class);
    }
}
