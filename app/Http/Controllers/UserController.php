<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserSession;
use Illuminate\Http\JsonResponse;
use App\Http\Services\UserService;
use App\Http\Requests\UserAuthRequest;

class UserController extends Controller
{
    private UserService $service;

    /**
     * UserController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    /**
     * @OA\Get(
     *     tags={"User"},
     *     path="/user/auth",
     *     summary="Авторизация пользователя",
     *     security={{"token":{}}},
     *     @OA\Parameter(name="id", in="query", @OA\Schema(type="integer"), required=true, description="ИД"),
     *     @OA\Parameter(name="first_name", in="query", @OA\Schema(type="string"), required=true, description="Имя"),
     *     @OA\Parameter(name="last_name", in="query", @OA\Schema(type="string"), required=true, description="Фамилия"),
     *     @OA\Parameter(name="city", in="query", @OA\Schema(type="string"), required=true, description="Город"),
     *     @OA\Parameter(name="country", in="query", @OA\Schema(type="string"), required=true, description="Страна"),
     *     @OA\Parameter(name="sig", in="query", @OA\Schema(type="string"), required=true, description="Подпись"),
     *     @OA\Response(
     *         response = 200,
     *         description = "Response",
     *         @OA\JsonContent(ref="#/components/schemas/User")
     *     ),
     * )
     * @param UserAuthRequest $request
     * @return JsonResponse
     */
    public function auth(UserAuthRequest $request): JsonResponse
    {
        $accessToken = $request->header('authorization');

        if (!$this->service->checkAuth($accessToken, $request->all())) {
            return response()->json([
                'error' => 'Ошибка авторизации в приложении',
                'error_key' => 'signature error'
            ]);
        }

        $user = User::updateOrCreate(['id' => $request->get('id')],
            [
                'first_name' => $request->get('first_name'),
                'last_name' => $request->get('last_name'),
                'city' => $request->get('city'),
                'country' => $request->get('country')
            ]
        );

        UserSession::updateOrCreate(['user_id' => $request->get('id')],
            [
                'user_id' => $request->get('id'),
                'access_token' => $accessToken,
            ]
        );

        return response()->json([
            'access_token' => $accessToken,
            'user_info' => $user,
            'error' => '',
            'error_key' => ''
        ]);
    }
}
