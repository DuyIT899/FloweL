<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $table = 'user';

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name', 'address', 'phone', 'email', 'username', 'password', 'is_disabled', 'role_id'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }
}
