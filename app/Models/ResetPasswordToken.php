<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResetPasswordToken extends Model
{
    protected $table = 'reset_password_tokens';
    protected $guarded = [];
}
