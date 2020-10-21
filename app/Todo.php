<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = [
        'name',
        'status'
    ];

    public function todo(){
        return $this->hasOne(Todo::class);
    }
}
