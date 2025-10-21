<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * StringKeyStringValuePair
 */
class StringKeyStringValuePair
{
    public function __construct(
        /** Key. */
        public ?string $key = null,
        /** Value. */
        public ?string $value = null
    ) {}
}
