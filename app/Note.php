<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'body', 'important', 'group_id'];

    public function isImportant()
    {
        return $this->important == 1;
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function scopeWithoutGroup($query)
    {
        return $query->whereNull('group_id');
    }
}
