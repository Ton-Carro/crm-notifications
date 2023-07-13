<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'customers';

    protected $fillable = [
        'phone',
        'customer_name',
        'agreement_number',
        'vehicle_number',
        'hp_customer_name',
        'expiry_date',
        'status',
        'guarantor_name',
        'guarantor_telephone_number',
        'date_of_birth'
    ];

    public function routeNotificationForWhatsapp()
    {
        return $this->phone;
    }
}
