<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Category extends Model implements Transformable
{
    use TransformableTrait;

    //permite criar no metodo construtor apenas passando o name
    protected $fillable = [
		'name' 
	];
	
	public function products()
	{
		return $this->hasMany(Product::class);
	}

}
