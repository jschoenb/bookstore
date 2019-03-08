<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    protected $fillable = [
        'url', 'title'
    ];

    /*One book can have many images*/
    /*belongsto is from base model class*/
    public function book(): BelongsTo{
        return $this->belongsTo(Book::class);
    }
}
