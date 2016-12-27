<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 *
 * @package App\Models
 */
class Customer extends BaseModel
{
    use SoftDeletes;

    public function group()
    {
        return $this->belongsTo(CustomerGroup::class, 'customer_group_id');
    }
}