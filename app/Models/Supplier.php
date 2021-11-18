<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function receipts() {
        return $this->hasMany(Receipt::class, 'supplier_id', 'id');
    }
}
