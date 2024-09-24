<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Model;

class UserType extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function users()
    {
        return $this->hasMany(Admin::class);
    }

    /**
     * @param array $array
     */
    public static function create(array $array)
    {
        return parent::query()->insert($array);
    }
}
