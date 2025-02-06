<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    const ACTIVE_MES = 1;
    const UPDATED_MES = 2;
    const DELETED_MES = 0;
}
