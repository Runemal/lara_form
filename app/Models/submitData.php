<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\News
 *
 * @property string $userName
 * @property string $userMessage
 * @property int $telNumber
 * @mixin \Eloquent
 */

class submitData extends Model
{
    use HasFactory;

    protected $fillable = [
        'userName',
        'telNumber',
        'userMessage',
    ];

}
