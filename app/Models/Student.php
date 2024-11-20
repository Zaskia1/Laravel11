<?php

namespace App\Models;

use App\Models\Grade;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    // Memuat relasi 'grade' dan 'department' secara otomatis
    protected $with = ['grade', 'department'];

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
