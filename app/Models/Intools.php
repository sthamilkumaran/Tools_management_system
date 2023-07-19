<?php

namespace App\Models;

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
}
