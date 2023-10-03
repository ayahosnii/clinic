<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'expenses_name',
        'description',
        'amount',
        'supplier_name',
        'buyer_name',
        'expense_date',
        'payment_method',
        'receipt_number',
        'receipt_attachment',
        'notes',
        'user_id',
        'tax_amount',
        'category_id',
    ];

    // Define relationships (if needed)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(ExpensesCategory::class);
    }
}
