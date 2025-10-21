<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * KeyValue
 */
class KeyValue
{
    public function __construct(
        /** Key for the key-value pair. */
        public ?string $key = null,
        /** Value for the key-value pair. */
        public ?string $value = null
    ) {}
}
