<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

    //permite criar no metodo construtor apenas passando o name
    protected $fillable = [
		'client_id',
        'user_deliveryman_id',
        'total',
        'status'
	];
	
	public function items()
	{
		return $this->hasMany(OrderItem::class);
	}
    
    public function deliveryman()
	{
		return $this->belongsTo(User::class);
	}

}
