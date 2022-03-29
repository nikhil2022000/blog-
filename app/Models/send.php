<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class send extends Model
{
    use HasFactory;
    protected $table="theam_project";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'city',
        'state',
        'address',
        'pincode',
        'secondery_contact_details',
       
    ];
}
