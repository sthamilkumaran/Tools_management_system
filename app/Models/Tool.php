<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;
    protected $fillable = [
        'userName',
        'toolLists',
        'outDate',
        'toolCount',
    ];
    public $timestamps = true;
    public function setToolListsAttribute($value)
    {
        $this->attributes['toolLists'] = json_encode($value);
    }

    public function getToolListsAttribute($value)
    {
        return $this->attributes['toolLists'] = json_decode($value);
    }
}
