<?php

namespace Vanguard;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Vanguard\Presenters\UserPresenter;
use Vanguard\Services\Auth\Api\TokenFactory;
use Vanguard\Services\Auth\TwoFactor\Authenticatable as TwoFactorAuthenticatable;
use Vanguard\Services\Auth\TwoFactor\Contracts\Authenticatable as TwoFactorAuthenticatableContract;
use Vanguard\Services\Logging\UserActivity\Activity;
use Vanguard\Support\Authorization\AuthorizationUserTrait;
use Vanguard\Support\CanImpersonateUsers;
use Vanguard\Support\Enum\UserStatus;
use Illuminate\Auth\Passwords\CanResetPassword;
use Laracasts\Presenter\PresentableTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Citizens_OLD extends Model
{


    protected $presenter = UserPresenter::class;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $dates = ['last_login', 'birthday'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

}
