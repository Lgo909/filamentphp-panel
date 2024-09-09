<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class MoneyCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function get($model, string $key, $value, array $attributes): float
    {
        // Преобразование integer, хранящегося в базе данных, во float.
        return round(floatval($value) / 100, precision: 2);
    }

    public function set($model, string $key, $value, array $attributes): float
    {
        // Преобразование числа float в integer для хранения.
        return round(floatval($value) * 100);
    }
}
