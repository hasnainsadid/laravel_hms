<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = ['name', 'address', 'dob', 'gender', 'blood_grp', 'email', 'password', 'phone', 'd_id', 'trt_id'];

    public function appointment(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
