<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['title', 'body', 'important'];

    public function isImportant()
    {
        return $this->important == 1;
    }
}
