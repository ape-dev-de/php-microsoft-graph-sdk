<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * InternetMessageHeader
 */
class InternetMessageHeader
{
    public function __construct(
        /** Represents the key in a key-value pair. */
        public ?string $name = null,
        /** The value in a key-value pair. */
        public ?string $value = null
    ) {}
}
