<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    const ACTIVE_MESSAGE = 1;
    const UPDATED_MESSAGE = 2;
    const DELETED_MESSAGE = 0;

    const GUEST_ID_LENGTH = 10;
}
