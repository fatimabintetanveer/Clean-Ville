<?php

// app/Models/Task.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'event_id',
        'description',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
