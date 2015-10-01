<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
	//permite criar no metodo construtor apenas passando o name
    protected $fillable = [
		'product_id',
        'order_id',
        'price',
        'qtd'
	];
    
    public function order()
    {
        return $this-belongsTo(User::class);   
    }
	
	public function product()
	{
		return $this->belongsTo(Product::class);
	}
}
