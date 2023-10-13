<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string|null $first_name Имя
 * @property string|null $last_name Фамилия
 * @property string|null $city Город
 * @property string|null $country Страна
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCity($value)
 * @method static Builder|User whereCountry($value)
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereFirstName($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereLastName($value)
 * @method static Builder|User whereUpdatedAt($value)
 */

/**
 * @OA\Schema (
 *    schema="User",
 *    @OA\Property(property="id", type="integer"),
 *    @OA\Property(property="first_name", type="string"),
 *    @OA\Property(property="last_name", type="string"),
 *    @OA\Property(property="city", type="string"),
 *    @OA\Property(property="country", type="string"),
 *    @OA\Property(property="created_at", type="string"),
 *    @OA\Property(property="updated_at", type="string"),
 * )
 */

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';
    protected $guarded = [];

    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
