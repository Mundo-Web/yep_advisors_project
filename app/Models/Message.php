<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['full_name', 'email', 'phone', 'message', 'source','service_product', 'status', 'is_read'];


}
