<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $table = 'doctor';
    protected $fillable = ['name', 'designation', 'email', 'password', 'phone', 'status', 'd_id'];

    public function appointment() : HasMany {
        return $this->hasMany(Appointment::class);
    }
    public function department() : BelongsTo {
        return $this->belongsTo(Department::class, 'd_id');
    }
}
