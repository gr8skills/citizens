<?php

namespace Vanguard\Support\Enum;

class CitizenStatus
{
    const UNCONFIRMED = 'Unconfirmed';
    const CONFIRMED = 'Confirmed';
    const SORTED = 'Sorted';

    public static function lists()
    {
        return [
            self::CONFIRMED => trans('app.'.self::CONFIRMED),
            self::SORTED => trans('app.'. self::SORTED),
            self::UNCONFIRMED => trans('app.' . self::UNCONFIRMED)
        ];
    }
}
