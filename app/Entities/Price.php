<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entities\Price
 *
 * @property int $id
 * @property int $product_id
 * @property float $sale
 * @property int $price
 * @mixin \Eloquent
 * @property string $created_at
 * @property string $updated_at
 */
class Price extends Model {

    /**
     *
     * @var type 
     */
    public static $rules = [
        'sale'       => 'required|numeric',
        'price'      => 'required|numeric',
        'product_id' => 'required|exists:products,id',
    ];

    /**
     *
     * @var type 
     */
    protected $fillable = [
        'product_id',
        'sale',
        'price',
        'date_created',
    ];

    /**
     *
     * @var type 
     */
    public $timestamps = true;

}
