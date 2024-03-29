<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'role';

    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role'
    ];

    protected $hidden = ['deleted_at', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->hasMany(User::class, 'role_id');
    }
}
