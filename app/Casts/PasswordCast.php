<?php

namespace App\Casts;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

/**
 * Типизатор: пароль
 */
class PasswordCast implements CastsAttributes
{
    /**
     * Получить хэш пароля
     * @param Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return string
     */
    public function get($model, string $key, $value, array $attributes): string
    {
        return $value;
    }

    /**
     * Указать хэш пароля
     * @param Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return string
     */
    public function set($model, string $key, $value, array $attributes): string
    {
        return Hash::make($value);
    }
}
