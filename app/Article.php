<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    protected $dates = ['created_at'];

    protected $fillable = [
        'title',
        'body',
        'created_at'
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
}