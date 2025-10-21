<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyValuePair
 */
class KeyValuePair
{
    public function __construct(
        /** Name for this key-value pair */
        public ?string $name = null,
        /** Value for this key-value pair */
        public ?string $value = null
    ) {}
}
