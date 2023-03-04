<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmanetEmployee extends Model
{
    use HasFactory;
    protected $table = 'department-employees';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
