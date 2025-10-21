<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyAttributeMappingSourceValuePair
 */
class StringKeyAttributeMappingSourceValuePair
{
    public function __construct(
        /** The name of the parameter. */
        public ?string $key = null,
        /** The value of the parameter. */
        public ?string $value = null
    ) {}
}
