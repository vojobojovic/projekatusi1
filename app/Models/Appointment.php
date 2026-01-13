<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    // Ovo govori Laravelu: "Dozvoljeno je upisivanje u ove kolone"
    protected $fillable = ['customer_name', 'service_type', 'appointment_date'];
}
