<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InventoryMovementItem
 *
 * @package App\Models
 */
class InventoryMovementItem extends Model
{
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}