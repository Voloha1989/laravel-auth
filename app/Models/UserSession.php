<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

/**
 * App\Models\UserSession
 *
 * @property int $id
 * @property int $user_id Ид пользователя
 * @property string $access_token Токен
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|UserSession newModelQuery()
 * @method static Builder|UserSession newQuery()
 * @method static Builder|UserSession query()
 * @method static Builder|UserSession whereAccessToken($value)
 * @method static Builder|UserSession whereCreatedAt($value)
 * @method static Builder|UserSession whereId($value)
 * @method static Builder|UserSession whereUpdatedAt($value)
 * @method static Builder|UserSession whereUserId($value)
 */

/**
 * @OA\Schema (
 *    schema="UserSession",
 *    @OA\Property(property="id", type="integer"),
 *    @OA\Property(property="user_id", type="integer"),
 *    @OA\Property(property="access_token", type="string"),
 *    @OA\Property(property="created_at", type="string"),
 *    @OA\Property(property="updated_at", type="string"),
 * )
 */

class UserSession extends Model
{
    protected $table = 'users_sessions';
    protected $guarded = [];
}
