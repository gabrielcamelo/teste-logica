<?php
namespace App;

class ProductStructure
{
    const PRODUCTS = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    function make(): array
    {
        foreach (self::PRODUCTS as $value) {
            [$color,$size] = explode('-',$value);
            $new_arr[$color][$size] = isset($new_arr[$color][$size]) ? $new_arr[$color][$size] + 1 : 1;
        }

        return $new_arr;
    }

}