<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Users
 *
 * @property int $id
 * @property string|null $first_name Имя
 * @property string|null $last_name Фамилия
 * @property string|null $city Город
 * @property string|null $country Страна
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|Users newModelQuery()
 * @method static Builder|Users newQuery()
 * @method static Builder|Users query()
 * @method static Builder|Users whereCity($value)
 * @method static Builder|Users whereCountry($value)
 * @method static Builder|Users whereCreatedAt($value)
 * @method static Builder|Users whereFirstName($value)
 * @method static Builder|Users whereId($value)
 * @method static Builder|Users whereLastName($value)
 * @method static Builder|Users whereUpdatedAt($value)
 */

/**
 * @OA\Schema (
 *    schema="Users",
 *    @OA\Property(property="id", type="integer"),
 *    @OA\Property(property="first_name", type="string"),
 *    @OA\Property(property="last_name", type="string"),
 *    @OA\Property(property="city", type="string"),
 *    @OA\Property(property="country", type="string"),
 *    @OA\Property(property="created_at", type="string"),
 *    @OA\Property(property="updated_at", type="string"),
 * )
 */

class Users extends Model
{
    protected $table = 'users';
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];
}
