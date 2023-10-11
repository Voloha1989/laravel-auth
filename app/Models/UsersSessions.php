<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\UsersSessions
 *
 * @property int $id
 * @property int $user_id Ид пользователя
 * @property string $access_token Токен
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|UsersSessions newModelQuery()
 * @method static Builder|UsersSessions newQuery()
 * @method static Builder|UsersSessions query()
 * @method static Builder|UsersSessions whereAccessToken($value)
 * @method static Builder|UsersSessions whereCreatedAt($value)
 * @method static Builder|UsersSessions whereId($value)
 * @method static Builder|UsersSessions whereUpdatedAt($value)
 * @method static Builder|UsersSessions whereUserId($value)
 */

/**
 * @OA\Schema (
 *    schema="UsersSessions",
 *    @OA\Property(property="id", type="integer"),
 *    @OA\Property(property="user_id", type="integer"),
 *    @OA\Property(property="access_token", type="string"),
 *    @OA\Property(property="created_at", type="string"),
 *    @OA\Property(property="updated_at", type="string"),
 * )
 */

class UsersSessions extends Model
{
    protected $table = 'users_sessions';
    protected $guarded = [];
}
