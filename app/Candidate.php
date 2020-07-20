<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $guarded = [];

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
