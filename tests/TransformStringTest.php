<?php declare(strict_types=1);

namespace StringTransformer\Tests;

use PHPUnit\Framework\TestCase;
use StringTransformer\TransformString;

class TransformStringTest extends TestCase
{
    /** @test */
    public static function transformsCamelCaseToUnderscore(): void
    {
        self::assertSame(
            'transformed_string',
            TransformString::toUnderscore('transformedString')
        );
    }

    /** @test */
    public static function transformsUnderscoreToCamelCase(): void
    {
        self::assertSame(
            'transformedString',
            TransformString::toCamelCase('transformed_string')
        );
    }
}