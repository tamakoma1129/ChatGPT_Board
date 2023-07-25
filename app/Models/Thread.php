<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Message;

class Thread extends Model
{
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
