<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function products() {
        return $this->hasMany(Product::class, 'employee_id', 'id');
    }

    public function bills() {
        return $this->hasMany(Bill::class, 'employee_id', 'id');
    }

    public function account() {
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
