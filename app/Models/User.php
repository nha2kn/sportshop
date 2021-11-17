<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory;
    
    // protected $table = 'suppliers';
    // protected $primaryKey = 'id';
    // protected $guarded = [];

    use HasFactory, Notifiable;

    protected $fillable = [
        'customer_id',
        'username',
        'password',
        'avatar',
    ];

    protected $hidden = [
        'password',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }
}
