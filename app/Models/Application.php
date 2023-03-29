<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    public $table = 'applications';

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
