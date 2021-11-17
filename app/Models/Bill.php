<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bills';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function sales() {
        return $this->hasMany(Sale::class, 'bill_id', 'id');
    }

    public function employee() {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
