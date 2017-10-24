<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function isImportant()
    {
        return $this->important == 1;
    }
}
