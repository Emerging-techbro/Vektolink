<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesModel extends Model
{
    use HasFactory;
    protected $table='sales';
    protected $fillable=[
       'product_id','sales_id','sales_name','sales_details'
    ];
}
