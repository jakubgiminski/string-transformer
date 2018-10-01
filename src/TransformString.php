<?php declare(strict_types=1);

namespace StringTransformer;

class TransformString
{
    public static function toUnderscore(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }
}