<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function bills() {
        return $this->hasMany(Bill::class, 'customer_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function customer_type() {
        return $this->belongsTo(CustomerType::class, 'type_id', 'id');
    }


}
