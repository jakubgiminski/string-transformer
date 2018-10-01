<?php declare(strict_types=1);

namespace StringTransformer;

class TransformString
{
    public static function toUnderscore(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }

    public static function toPascalCase(string $input): string
    {
        return str_replace('_', '', ucwords($input, '_'));
    }

    public static function toCamelCase(string $input): string
    {
        $transformed = self::toPascalCase($input);
        $transformed[0] = strtolower($transformed[0]);

        return $transformed;
    }
}