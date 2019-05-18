<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {

        return ($this->image) ? '/storage/' . $this->image : 'http://localhost:8000/storage/profile/51NH9FcelOBt0cFVUpl9cWRDUwUqP3REsc8iyP1y.png';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
