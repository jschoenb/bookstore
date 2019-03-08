<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Author extends Model
{
    public function books(): BelongsToMany{
        $this->belongsToMany(Book::class)->withTimestamps();
    }
}
