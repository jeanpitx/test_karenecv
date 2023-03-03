<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'order';
    protected $primaryKey = 'id';

    public $fillable  = [
        'reference',
        'date',
        'status',
        'comments',
        'person_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function Person()
    {
        return $this->hasMany(\App\Models\Person::class, 'id', 'person_id');
    }
}
