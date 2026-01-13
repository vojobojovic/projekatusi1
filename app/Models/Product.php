<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Polja koja dozvoljavamo da se upisuju u bazu (Mass Assignment).
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
    ];

    /**
     * Kastovanje tipova podataka.
     */
    protected $casts = [
        'id' => 'integer',
        'price' => 'decimal:2',
        'category_id' => 'integer',
    ];

    /**
     * RELACIJA: Svaki proizvod pripada jednoj kategoriji.
     * Ovo popravlja grešku "Call to undefined relationship [category]"
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
