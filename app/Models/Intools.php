<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intools extends Model
{
    use HasFactory;
    protected $fillable = [
        'inuserName',
        'intoolLists',
        'inDate',
        'intoolCount' => [],
        'intoolDam,'
    ];

    public function setIntoolListsAttribute($value)
    {
        $this->attributes['intoolLists'] = json_encode($value);
    }

    public function getIntoolListsAttribute($value)
    {
        return $this->attributes['intoolLists'] = json_decode($value);
    }
}
