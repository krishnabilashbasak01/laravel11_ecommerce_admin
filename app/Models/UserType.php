<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model as Model;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class UserType extends Model
{
    use HasFactory, SoftDeletes;

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

    /**
     * Soft delete user type by id
     *
     * @param int $id
     * @return bool
     */
    public static function softDeleteById($id)
    {
        $userType = self::find($id);
        if ($userType) {
            return $userType->delete();
        }
        return false;
    }

    /**
     * Restore a soft-deleted user type by id
     *
     * @param int $id
     * @return bool
     */
    public static function restoreSoftDeletedById($id)
    {
        return self::withTrashed()->find($id)->restore();
    }

    /**
     * Get all soft deleted user types
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getSoftDeletedUserTypes()
    {
        return self::onlyTrashed()->get();
    }

    /**
     * Delete user type by id
     *
     * @param int $id
     * @return bool
     */
    public static function deleteById($id)
    {
        return self::destroy($id);
    }
}
