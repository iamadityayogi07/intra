<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'name', 'description', 'fav_icon', 'logo', // Add other fields here as needed
    ];

    // Add any relationships or additional functionalities here if required
}
