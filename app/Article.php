<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $dates = ['published_at'];

    protected $fillable = [
        'title',
        'body',
        'created_at'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}