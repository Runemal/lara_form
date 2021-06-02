<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubmitRules extends Model
{
    use HasFactory;


    public static function rules()
    {
        return [
            'userName' => 'required|string|max:25',
            'telNumber' => 'required|max:12',
            'userMessage' =>'required|string|max:255',
        ];
    }
}
